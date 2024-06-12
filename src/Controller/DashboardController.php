<?php

namespace App\Controller;

use App\Model\QuestionManager;
use App\Model\ParticipantManager;
use App\Model\UserManager;

class DashboardController extends AbstractController
{
    public function index(): string
    {
        $questionManager = new QuestionManager();
        $lastQuestions = $questionManager->selectMostRecent();

        $user = null;

        if (isset($_SESSION['id'])) {
            $userManager = new UserManager();
            $user = $userManager->selectOneById($_SESSION['id']);
        }
        return $this->twig->render(
            'Home/index.html.twig',
            [
                'lastQuestions' => $lastQuestions,
                'user' => $user,
            ]
        );
    }
}
