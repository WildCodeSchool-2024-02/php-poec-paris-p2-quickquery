<?php

namespace App\Controller;

use password_hash;
use session_start;
use App\Model\UserManager;

class LogController extends AbstractController
{
    /**
     * Add a new inscription
     */

     public function processLogin() {

        $errors = [];
        $UserManager = new UserManager();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $password = $_POST['password'] ?? '';


            $errors = $this->validate($email, $password);


            // Vérification de l'utilisateur dans la base de données
            
            
            if (empty($errors)) {

                $user = $UserManager->getByEmail($email);
                
                // Authentification réussie
                session_start();
                $_SESSION['user'] = $user ;
                
                
                return $this->twig->render(
                    'Home/index.html.twig',
                    [
                        'session' => $_SESSION,
                        'user' => $user,
                    ]
                );

            }
        } 

        return $this->twig->render(
            'User/Login.html.twig',
            [
                'errors' => $errors,

            ]
        );
    }

    public function logout()
    {
        session_unset();
        header('Location: /');
    }
    


    private function validate($email, $password)
    {
        $errors = [];
        $UserManager = new UserManager();
        $user = $UserManager->getByEmail($email);

        if (empty($email)) {
            $errors['email'] = 'L\'email est requis.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide.';
        }


        if (empty($password)) {
            $errors['password'] = 'Le mot de passe est requis.';
        } elseif (!$user || !password_verify($password, $user['password'])) {
            $errors['password'] = 'Email ou mot de passe incorrect';
        }

        return $errors;
    }

    
}
