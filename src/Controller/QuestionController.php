<?php

namespace App\Controller;

use DateTime;
use DateTimeZone;
use DateInterval;
use App\Model\QuestionManager;
use App\Model\TagManager;
use App\Model\ParticipantManager;
use App\Controller\AbstractController;

class QuestionController extends AbstractController
{
    public function add(): ?string
    {
        $errors = [];
        $question = [];
        $selectedTags = [];
        $tagManager = new TagManager();
        $questionManager = new QuestionManager();
        $tags = $tagManager->selectAll();
        $availableTimes = $this->getAvailableTimes();

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $question = array_map('trim', $_POST);

            foreach ($question as $key => $value) {
                $question[$key] = htmlentities($value, ENT_QUOTES, 'UTF-8');
            }

            $errors = $this->validate($question);

            $selectedTags = $question['tags'];

            if (empty($errors)) {
                $id = $questionManager->insert($question);

                if (!empty($id)) {
                    header('Location:/');
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
                'availableTimes' => $availableTimes,
            ]
        );
    }

    public function getAvailableTimes(): array
    {
        $times = [];
        $timezone = new DateTimeZone('Europe/Paris');
        $currentDateTime = new DateTime('now', $timezone);
        $startTime = new DateTime('09:30', $timezone);
        $endTime = new DateTime('19:30', $timezone);
        $interval = new DateInterval('PT30M');

        $cutoffTime = new DateTime('19:30', $timezone);

        if ($currentDateTime > $cutoffTime) {
            $startTime->add(new DateInterval('P1D'));
            $endTime->add(new DateInterval('P1D'));
        }
        while ($startTime <= $endTime) {
            $times[] = $startTime->format('Y-m-d H:i:s');
            $startTime->add($interval);
        }
        return $times;
    }

    private function validate(array $question)
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
}
