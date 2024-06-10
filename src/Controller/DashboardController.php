<?php

namespace App\Controller;

use App\Model\QuestionManager;
use App\Model\ParticipantManager;

class DashboardController extends AbstractController
{
    public function index(): string
    {
        $questionManager = new QuestionManager();
        $lastQuestions = $questionManager->selectMostRecent();

        return $this->twig->render('Home/index.html.twig', ['lastQuestions' => $lastQuestions]);
    }
}