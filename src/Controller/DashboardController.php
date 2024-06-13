<?php

namespace App\Controller;

use App\Model\QuestionManager;
use App\Model\TagManager;
use App\Model\UserManager;

class DashboardController extends AbstractController
{
    public function index(): string
    {
        $user = null;
        $msg = "";
        $results = "";
        $query = $_POST['search'] ?? null;
        // $tag = $_POST['tag'] ?? null;
        $tag = 2;
        $questionManager = new QuestionManager();
        $tagManager = new TagManager();


        if (isset($_GET['alert']) && $_GET['alert'] == 1) {
            $msg = "Alerte activée !";
        } elseif (isset($_GET['question']) && $_GET['question'] == 1) {
            $msg = "Question ajoutée avec succès !";
        } elseif (isset($_GET['participant']) && $_GET['participant'] == 1) {
            $msg = "Participation ajoutée avec succès !";
        } elseif ($query) {
            $query = trim($query);
            $query = htmlentities($query, ENT_QUOTES, 'UTF-8');
            $results = $questionManager->search($query);
        } elseif ($tag) {
            $tag = trim($tag);
            $tag = htmlentities($tag, ENT_QUOTES, 'UTF-8');
            $results = $tagManager->allQuestionByTag($tag);
        } else {
            $results = $questionManager->selectMostRecent();
        }
        foreach ($results as &$result) {
            if (!empty($result['tag_list'])) {
                $result['tag_list'] = explode(', ', $result['tag_list']);
            } else {
                $result['tag_list'] = [];
            }
        }
        if (isset($_SESSION['id'])) {
            $userManager = new UserManager();
            $user = $userManager->selectOneById($_SESSION['id']);
        }

        return $this->twig->render('Home/index.html.twig', [
            'results' => $results,
            'query' => $query,
            'tag' => $tag,
            'msg' => $msg,
            'user' => $user,
        ]);
    }
}
