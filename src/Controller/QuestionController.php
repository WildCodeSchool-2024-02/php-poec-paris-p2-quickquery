<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use DateInterval;
use App\Model\QuestionManager;
use App\Model\ParticipantManager;
use App\Model\TagManager;
use App\Model\AlertManager;

class QuestionController extends AbstractController
{
    public function add(): string
    {
        $errors = [];
        $question = [];
        $selectedTags = [];
        $tagManager = new TagManager();
        $tags = $tagManager->selectAll();
        $availableTimes = $this->getAvailableTimes();
        $today = [];
        $tomorrow = [];
        $afterTomorrow = [];

        foreach ($availableTimes as $time) {
            $date = new DateTime($time);
            $dayDifference = $date->diff(new DateTime('now', new DateTimeZone('Europe/Paris')))->days;

            if ($dayDifference == 0) {
                $today[] = $time;
            } elseif ($dayDifference == 1) {
                $tomorrow[] = $time;
            } elseif ($dayDifference == 2) {
                $afterTomorrow[] = $time;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $questionManager = new QuestionManager();

            $question = $_POST;

            if (isset($_POST['title'])) {
                $_POST['title'] = htmlentities(trim($_POST['title']), ENT_QUOTES, 'UTF-8');
            }
            if (isset($_POST['description'])) {
                $_POST['description'] = htmlentities(trim($_POST['description']), ENT_QUOTES, 'UTF-8');
            }

            $errors = $this->validate($question);

            $selectedTags = $question['tags'];

            if (empty($errors)) {
                $id = $questionManager->insert($question);

                if (!empty($id)) {
                    header('Location:/?question=1');

                    exit();
                }
            }
        }
        return $this->twig->render(
            'Question/add.html.twig',
            [
                'errors' => $errors,
                'tags' => $tags,
                'selectedTags' => $selectedTags,
                'question' => $question,
                'todayTimes' => $today,
                'tomorrowTimes' => $tomorrow,
                'afterTomorrowTimes' => $afterTomorrow,
            ]
        );
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
