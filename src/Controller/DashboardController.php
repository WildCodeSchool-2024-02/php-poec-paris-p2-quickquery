<?php

namespace App\Controller;

use App\Model\QuestionManager;
use App\Model\UserManager;

class DashboardController extends AbstractController
{
    public function index(): string
    {
        $msg = $this->getAlertMessage();
        $user = $this->getUser();
        $query = null;
        $tag = null;
        $questionManager = new QuestionManager();
        $lastQuestions = null;

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            if (isset($_POST['search'])) {
                $query = $_POST['search'];
                $query = htmlentities(trim($query), ENT_QUOTES, 'UTF-8');
                $lastQuestions = $questionManager->search($query);
                $lastQuestions = $this->processLastQuestions($lastQuestions);
                ;
            } elseif (isset($_POST['tag'])) {
                $tag = $_POST['tag'];
                $tag = htmlentities(trim($tag), ENT_QUOTES, 'UTF-8');
                $tag = (int) $tag;
                $lastQuestions = $questionManager->selectAllByTag($tag);
                $lastQuestions = $questionManager->$this->processLastQuestions($lastQuestions);
            }
        } else {
            $lastQuestions = $questionManager->selectMostRecent();
            $lastQuestions = $this->processLastQuestions($lastQuestions);
        }

        return $this->twig->render('Home/index.html.twig', [
            'lastQuestions' => $lastQuestions,
            'msg' => $msg,
            'user' => $user,
            'query' => $query,
            'tag' => $tag,
        ]);
    }

    private function getAlertMessage(): string
    {
        $messages = [
            'alert' => "Alert activated :)",
            'question' => "Question added :)",
            'participant' => "Participation added :)",
            'register' => "Registration ok. Please login",
            'login' => "Login ok"
        ];

        foreach ($messages as $key => $message) {
            if (isset($_GET[$key]) && $_GET[$key] == 1) {
                return $message;
            }
        }

        return "";
    }

    private function getUser()
    {
        if (isset($_SESSION['id'])) {
            $userManager = new UserManager();
            return $userManager->selectOneById($_SESSION['id']);
        }
        return null;
    }

    private function processLastQuestions(array $lastQuestions): array
    {
        foreach ($lastQuestions as &$lastQuestion) {
            if (!empty($lastQuestion['tag_list'])) {
                $lastQuestion['tag_list'] = explode(', ', $lastQuestion['tag_list']);
            } else {
                $lastQuestion['tag_list'] = [];
            }
        }

        return $lastQuestions;
    }
}
