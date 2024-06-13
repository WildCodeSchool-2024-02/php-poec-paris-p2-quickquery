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

class QuestionController extends AbstractController
{
    public function add()
    {

        $errors = [];
        $question = [];
        $selectedTags = [];
        $userManager = new UserManager();
        $tagManager = new TagManager();
        $tags = $tagManager->selectAll();
        $availableTimes = $this->getAvailableTimes();
        $todayTimes = [];
        $tomorrowTimes = [];
        $afterTomorrowTimes = [];

        if (isset($_SESSION['id'])) {
            foreach ($availableTimes as $time) {
                $date = new DateTime($time);
                $timezone = new DateTimeZone('Europe/Paris');
                $currentDate = new DateTime('now', $timezone);
                $currentDate->setTime(0, 0);

                $todayDate = clone $currentDate;
                $tomorrowDate = (clone $currentDate)->modify('+1 day');
                $afterTomorrowDate = (clone $currentDate)->modify('+2 days');

                if ($date->format('Y-m-d') == $todayDate->format('Y-m-d')) {
                    $todayTimes[] = $time;
                } elseif ($date->format('Y-m-d') == $tomorrowDate->format('Y-m-d')) {
                    $tomorrowTimes[] = $time;
                } elseif ($date->format('Y-m-d') == $afterTomorrowDate->format('Y-m-d')) {
                    $afterTomorrowTimes[] = $time;
                }
            }

            $errors = $this->validate($question);
            $user = $userManager->selectOneById($_SESSION['id']);

            $this->processPostData($errors, $question, $selectedTags);

            return $this->twig->render(
                'Question/add.html.twig',
                [
                    'errors' => $errors,
                    'tags' => $tags,
                    'selectedTags' => $selectedTags,
                    'question' => $question,
                    'todayTimes' => $todayTimes,
                    'tomorrowTimes' => $tomorrowTimes,
                    'afterTomorrowTimes' => $afterTomorrowTimes,
                    'user' => $user,

                ]
            );
        } else {
            header("Location: /login");
        }
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

    private function validate(array $question): array
    {
        $errors = [];

        if (empty($question['title'])) {
            $errors[] = 'Le titre est vide';
        }
        if (!empty($question['title']) && strlen($question['title']) > 255) {
            $errors[] = 'Le titre doit faire moins de 255 caracteres';
        }

        if (empty($question['description'])) {
            $errors[] = 'La description est obligatoire';
        }

        if (empty($question['scheduled_at'])) {
            $errors[] = 'La date et heure sont obligatoires';
        } else {
            $selectedTime = \DateTime::createFromFormat('Y-m-d H:i:s', $question['scheduled_at']);

            if (!$selectedTime) {
                $errors[] = 'Le format de la date et heure est invalide';
            }
        }

        if (empty($question['tags'])) {
            $errors[] = 'Vous devez choisir au moins 1 tag';
        } elseif (!is_array($question['tags'])) {
            $errors[] = 'Probleme de tableau array des tags';
        }

        return $errors;
    }

    private function processPostData(array &$errors, array &$question, array &$selectedTags): void
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $questionManager = new QuestionManager();

            $question = $_POST;

            if (isset($_POST['title'])) {
                $_POST['title'] = htmlentities(trim($_POST['title']), ENT_QUOTES, 'UTF-8');
            }
            if (isset($_POST['description'])) {
                $_POST['description'] = htmlentities(trim($_POST['description']), ENT_QUOTES, 'UTF-8');
            }
            if (isset($_POST['scheduled_at'])) {
                $_POST['scheduled_at'] = htmlentities(trim($_POST['scheduled_at']), ENT_QUOTES, 'UTF-8');
            }

            $errors = $this->validate($_POST);

            $selectedTags = $question['tags'] ?? [];
            $authorId = $_SESSION['id'];

            if (empty($errors)) {
                $id = $questionManager->insert($question, $authorId);

                if (!empty($id)) {
                    header('Location:/?question');

                    exit();
                }
            }
        }
    }

    public function participate(): string
    {
        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $participantManager = new ParticipantManager();
            if (isset($_POST['questionId'])) {
                $userId = 1;
                $questionId = (int)$_POST['questionId'];

                $participantManager->insert($userId, $questionId);
            }
        }
        return $this->twig->render('Home/index.html.twig', [
        ]);
    }

    public function alert(): void
    {
        $questionId = htmlentities(trim($_POST['questionId']));
        $userId = 2;
        $alertManager = new AlertManager();
        $alertManager->insert($userId, $questionId);
        header('Location: /?alert=1');
    }
}

