<?php

namespace App\Controller;

use App\Model\QuestionManager;

class DashboardController extends AbstractController
{
    public function index(): string
    {

        $msg = "";

        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            $msg = "Alerte activée !";
        } elseif (isset($_GET['question']) && $_GET['question'] == 1) {
            $msg = "Question ajoutée avec succès !";
        } elseif (isset($_GET['participant']) && $_GET['participant'] == 1) {
            $msg = "Participation ajoutée avec succès !";
        }

        $questionManager = new QuestionManager();
        $lastQuestions = $questionManager->selectMostRecent();

        foreach ($lastQuestions as &$lastQuestion) {

            if (!empty($lastQuestion['tag_list'])) {

                $lastQuestion['tag_list'] = explode(', ', $lastQuestion['tag_list']);

            } else {
                $lastQuestion['tag_list'] = [];
            }
        }
        return $this->twig->render('Home/index.html.twig', [
            
            'lastQuestions' => $lastQuestions,
            'msg' => $msg,
        ]);
    }
    
}