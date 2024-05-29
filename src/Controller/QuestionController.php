<?php

namespace App\Controller;

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
        $selected_tags = [];

        
        //var_dump($tags);

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {

            $question = $_POST;

            $selected_tags = isset($_POST['tags']) ? $_POST['tags'] : [];

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
                'selected_tags' => $selected_tags,
                'question' => $question,
            ]
        );
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
        } elseif (!preg_match('/^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/', $question['scheduled_at'])) {
            $errors[] = 'Le format date et heure est invaide : ex. YYYY-MM-DD HH:MM:SS';
        }

        if (empty($question['tags'])) {
            $errors[] = 'Vous devez choisir au moins 1 tag';
        } elseif (!is_array($question['tags'])) {
            $errors[] = 'Probleme de tableau array des tags';
        }

        return $errors;
    }
}
