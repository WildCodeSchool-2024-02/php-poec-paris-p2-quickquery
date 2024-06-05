<?php

namespace App\Controller;

use App\Model\AlertManager;

class AlertController extends AbstractController
{

    public function add(): string
    {
        $alertManager = new AlertManager();

        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            
            if (isset($_POST['questionId'])) {
                $questionId = $_POST['questionId'];
                $userId = 2;

                if (!isset($_COOKIE['user_id']) && !isset($_COOKIE['question_id'])) {
                    $id = $alertManager->insert($userId, $questionId);

                    if (!empty($id)) {
                        $cookieExpirationTime = time() + (365 * 24 * 60 * 60);
                        setcookie('user_id', (string) $userId, $cookieExpirationTime, "/");
                        setcookie('question_id', (string) $questionId, $cookieExpirationTime, "/");
                        $msg = "Alerte activée !";
                        $msgType = "success";
                    }
                } else {
                    $msg = "Attention : vous avez déjà activé l'alerte pour cette question !";
                    $msgType = "danger";
                }

            } 
        }

        return $this->twig->render('Home/index.html.twig', [
            'msg' => $msg,
            'msg_type' => $msgType,
        ]);
    }
}
