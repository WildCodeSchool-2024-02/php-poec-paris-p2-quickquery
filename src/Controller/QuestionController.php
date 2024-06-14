<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use DateInterval;
use App\Model\QuestionManager;
use App\Model\ParticipantManager;
use App\Model\UserManager;
use App\Model\TagManager;
use App\Model\AlertManager;
use Mailjet\Resources;
use Mailjet\Client;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class QuestionController extends AbstractController
{
    private int $userId;
    private $userManager;

    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['id'])) {
            $this->userId = (int)$_SESSION['id'];
        }
        $this->userManager = new UserManager();
    }

    public function addQuestion(): ?string
    {
        $this->ensureUserIsLoggedIn();

        $errors = [];
        $question = [];
        $selectedTags = [];
        $userManager = new UserManager();
        $tagManager = new TagManager();

        $tags = $this->getSortedTags($tagManager);
        $availableTimes = $this->getAvailableTimes();
        $timeSlots = $this->categorizeTimes($availableTimes);

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $question = $_POST;
            $errors = $this->validate($question);

            if (empty($errors)) {
                $this->sanitizeQuestionInput($question);
                $selectedTags = $question['tags'] ?? [];

                $questionManager = new QuestionManager();
                $questionManager->insert($question, $this->userId);
                header("Location: /?question=1");
                exit();
            }
        }

        $user = $userManager->selectOneById($this->userId);

        return $this->twig->render(
            'Question/add.html.twig',
            [
                'errors' => $errors,
                'tags' => $tags,
                'selectedTags' => $selectedTags,
                'question' => $question,
                'todayTimes' => $timeSlots['todayTimes'],
                'tomorrowTimes' => $timeSlots['tomorrowTimes'],
                'afterTomorrowTimes' => $timeSlots['afterTomorrowTimes'],
                'user' => $user,
            ]
        );
    }

    private function ensureUserIsLoggedIn(): void
    {
        if (!isset($_SESSION['id'])) {
            header("Location: /login");
            exit();
        }
    }

    private function getSortedTags(TagManager $tagManager): array
    {
        $tags = $tagManager->selectAll();
        usort($tags, function ($indexa, $indexb) {
            return strcmp($indexa['name'], $indexb['name']);
        });
        return $tags;
    }

    private function categorizeTimes(array $availableTimes): array
    {
        $todayTimes = [];
        $tomorrowTimes = [];
        $afterTomorrowTimes = [];

        $timezone = new DateTimeZone('Europe/Paris');
        $currentDate = new DateTime('now', $timezone);
        $currentDate->setTime(0, 0);

        $todayDate = clone $currentDate;
        $tomorrowDate = (clone $currentDate)->modify('+1 day');
        $afterTomorrowDate = (clone $currentDate)->modify('+2 days');

        foreach ($availableTimes as $time) {
            $date = new DateTime($time);
            if ($date->format('Y-m-d') == $todayDate->format('Y-m-d')) {
                $todayTimes[] = $time;
            } elseif ($date->format('Y-m-d') == $tomorrowDate->format('Y-m-d')) {
                $tomorrowTimes[] = $time;
            } elseif ($date->format('Y-m-d') == $afterTomorrowDate->format('Y-m-d')) {
                $afterTomorrowTimes[] = $time;
            }
        }

        return [
            'todayTimes' => $todayTimes,
            'tomorrowTimes' => $tomorrowTimes,
            'afterTomorrowTimes' => $afterTomorrowTimes,
        ];
    }

    private function sanitizeQuestionInput(array &$question): void
    {
        if (isset($question['title'])) {
            $question['title'] = htmlentities(trim($question['title']), ENT_QUOTES, 'UTF-8');
        }
        if (isset($question['description'])) {
            $question['description'] = htmlentities(trim($question['description']), ENT_QUOTES, 'UTF-8');
        }
        if (isset($question['scheduled_at'])) {
            $question['scheduled_at'] = htmlentities(trim($question['scheduled_at']), ENT_QUOTES, 'UTF-8');
        }
    }

    private function validate(array $question): array
    {
        $errors = [];

        if (empty($question['title'])) {
            $errors[] = 'The title is empty';
        }
        if (!empty($question['title']) && strlen($question['title']) > 255) {
            $errors[] = 'The title must be less than 255 characters';
        }

        if (empty($question['description'])) {
            $errors[] = 'The description is required';
        }

        if (empty($question['scheduled_at'])) {
            $errors[] = 'The date and time are required';
        } else {
            $selectedTime = \DateTime::createFromFormat('Y-m-d H:i:s', $question['scheduled_at']);

            if (!$selectedTime) {
                $errors[] = 'The date and time format is invalid';
            }
        }

        if (empty($question['tags'])) {
            $errors[] = 'You must choose at least 1 tag';
        }
        return $errors;
    }

    private function getAvailableTimes(): array
    {
        $times = [];
        $timezone = new DateTimeZone('Europe/Paris');
        $currentDateTime = new DateTime('now', $timezone);
        $interval = new DateInterval('PT1H');

        for ($day = 0; $day < 3; $day++) {
            $startTime = (new DateTime('09:30', $timezone))->add(new DateInterval("P{$day}D"));
            $endTime = (new DateTime('19:30', $timezone))->add(new DateInterval("P{$day}D"));

            while ($startTime <= $endTime) {
                if ($startTime > $currentDateTime) {
                    $times[] = $startTime->format('Y-m-d H:i:s');
                }
                $startTime->add($interval);
            }
        }
        return $times;
    }

    public function participate(): void
    {
        $this->ensureUserIsLoggedIn();

        if (isset($_POST['questionId'])) {
            $questionId = (int) htmlentities(trim($_POST['questionId']));

            $participantManager = new ParticipantManager();
            $participantManager->insert($this->userId, $questionId);

            $questionManager = new QuestionManager();
            $question = $questionManager->selectOneById($questionId);

            $user = $this->userManager->selectOneById($this->userId);
            $recipientEmail = $user['email'];

            $loader = new FilesystemLoader('../src/View/Mail');
            $twig = new Environment($loader);

            $emailBody = $twig->render('participate_mail.html.twig', [
                'question' => $question,
                'user' => $user
            ]);

            require '../vendor/autoload.php';

            $mailjetClient = new Client(
                '29c42176bad99900811075e341698b45',
                'dcaa58b45620499270acfb463ff6dbbc',
                true,
                ['version' => 'v3.1']
            );
            $body = [
                'Messages' => [
                    [
                        'From' => [
                            'Email' => "nassim.boussaid.csm@gmail.com",
                            'Name' => "Quickquery"
                        ],
                        'To' => [
                            [
                                'Email' => $recipientEmail,
                                'Name' => $user['pseudo']
                            ]
                        ],
                        'Subject' => "Participation Notification",
                        'TextPart' => "Dear User, you have successfully participated in the question.",
                        'HTMLPart' => '<html><body>' . $emailBody . '</body></html>',
                    ]
                ]
            ];
            $response = $mailjetClient->post(Resources::$Email, ['body' => $body]);
            if ($response->success()) {
                echo "Email sent successfully.";
            } else {
                echo "Error sending email.";
            }

            header('Location: /?participant=1');
            exit();
        }
    }

    public function alert(): void
    {
        $this->ensureUserIsLoggedIn();

        $questionId = (int) htmlentities(trim($_POST['questionId']));

        $alertManager = new AlertManager();
        $alertManager->insert($this->userId, $questionId);

        $questionManager = new QuestionManager();
        $question = $questionManager->selectOneById($questionId);

        $userManager = new UserManager();
        $user = $userManager->selectOneById($this->userId);
        $recipientEmail = $user['email'];

        $loader = new FilesystemLoader('../src/View/Mail');
        $twig = new Environment($loader);

        $emailBody = $twig->render('alert_mail.html.twig', [
            'question' => $question,
            'user' => $user
        ]);

        require '../vendor/autoload.php';

        $mailjetClient = new Client(
            '29c42176bad99900811075e341698b45',
            'dcaa58b45620499270acfb463ff6dbbc',
            true,
            ['version' => 'v3.1']
        );
        $body = [
            'Messages' => [
                [
                    'From' => [
                        'Email' => "nassim.boussaid.csm@gmail.com",
                        'Name' => "Quickquery"
                    ],
                    'To' => [
                        [
                            'Email' => $recipientEmail,
                            'Name' => $user['pseudo']
                        ]
                    ],
                    'Subject' => "Alert Notification",
                    'TextPart' => "Dear User, you have successfully created an alert for the question.",
                    'HTMLPart' => '<html><body>' . $emailBody . '</body></html>',
                ]
            ]
        ];
        $response = $mailjetClient->post(Resources::$Email, ['body' => $body]);
        if ($response->success()) {
            echo "Email sent successfully.";
        } else {
            echo "Error sending email.";
        }

        header('Location: /?alert=1');
        exit();
    }
}
