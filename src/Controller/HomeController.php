<?php

namespace App\Controller;

use App\Model\HomeManager;
use Exception;

class HomeController extends AbstractController
{
    public function __construct()
    {
        parent::__construct();
        $this->homeManager = new HomeManager();
    }
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
        return $this->twig->render('Home/index.html.twig', [
            'msg' => $msg,
        ]);
    }
}
