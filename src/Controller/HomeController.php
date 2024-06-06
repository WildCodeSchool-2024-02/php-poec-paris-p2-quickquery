<?php

namespace App\Controller;

use App\Model\HomeManager;

class HomeController extends AbstractController
{
    public function index(): string
    {
        // require_once '/../Model/HomeManager.php';
        $homeManager = new HomeManager();
        $lastQueries = $homeManager->select5Last();
        // var_dump($lastQueries);
        return $this->twig->render('Home/index.html.twig', ['lastQueries' => $lastQueries]);
    }
}
