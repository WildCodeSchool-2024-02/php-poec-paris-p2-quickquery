<?php

namespace App\Controller;

use App\Model\QuestionManager;
use App\Model\HomeManager;
use App\Model\ParticipantManager;

class HomeController extends AbstractController
{
    public function index(): string
    {

        $questionManager = new QuestionManager();
        $lastQuestions = $questionManager->selectMostRecent();

        return $this->twig->render('Home/index.html.twig', ['lastQueries' => $lastQuestions]);
    }
}
