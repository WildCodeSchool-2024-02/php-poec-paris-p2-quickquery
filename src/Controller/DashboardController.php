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

        $questionManager = new QuestionManager();
        $lastQuestions = $questionManager->selectMostRecent();
        $lastQuestions = $this->processLastQuestions($lastQuestions);

        return $this->twig->render('Home/index.html.twig', [
            'lastQuestions' => $lastQuestions,
            'msg' => $msg,
            'user' => $user,
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
