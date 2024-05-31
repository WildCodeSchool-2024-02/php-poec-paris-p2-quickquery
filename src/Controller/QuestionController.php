<?php

namespace App\Controller;

use DateTime;
use DateInterval;
use App\Model\QuestionManager;

class QuestionController extends AbstractController
{
    /**
     * Add a new question
     */
    public function add(): ?string
    {
        $errors = [];
        $question = [];
        // $selected_tags = [];
        $questionManager = new QuestionManager();
        $tags = $questionManager->allTags();
        $selectedTags = [];
        $availableTimes = $this->getAvailableTimes();


        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $question = $_POST;

            $selectedTags = isset($_POST['tags']) ? $_POST['tags'] : [];

            foreach ($question as $key => $value) {
                $question[$key] = is_string($value) ? trim($value) : $value;
            }

            $errors = $this->validate($question);

            if (empty($errors)) {
                $id = $questionManager->insert($question);

                if (!empty($id)) {
                    header('Location:/');
                }
            }
            //return null;
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

        $startTime = new DateTime('12:00');
        $startTime->add(new DateInterval('PT30M'));


        $minutes = intval($startTime->format('i'));
        if ($minutes >= 30) {
            $startTime->modify('+1 hour');
            $startTime->setTime(intval($startTime->format('H')), 0);
        } else {
            $startTime->setTime(intval($startTime->format('H')), 30);
        }

        $endTime = new DateTime('19:30');

        $interval = new DateInterval('PT30M');

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
}
