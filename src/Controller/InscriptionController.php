<?php

namespace App\Controller;

use password_hash;
use App\Model\UserManager;

class InscriptionController extends AbstractController
{
    /**
     * Add a new inscription
     */
    public function add(): ?string
    {
        $errors = [];
        $inscription = [];
        $UserManager = new UserManager();


        if ($_SERVER["REQUEST_METHOD"] === 'POST') {
            $inscription = $_POST;


            foreach ($inscription as $key => $value) {
                $inscription[$key] = is_string($value) ? trim($value) : $value;
            }

            $errors = $this->validate($inscription);

            if (empty($errors)) {
                $id = $UserManager->insert($inscription);

                if (!empty($id)) {
                    header('Location:/');
                }
            }
        }

        return $this->twig->render(
            'User/Inscription.html.twig',
            [
                'errors' => $errors,
                'inscription' => $inscription,

            ]
        );
    }



    private function validate(array $inscription)
    {
        $errors = [];
        $UserManager = new UserManager();

        if (empty($inscription['pseudo'])) {
            $errors[] = 'Le champ \'pseudo\' est à remplir';
        }
        
        if (empty($inscription['email'])) {
            $errors['email'] = 'L\'email est requis.';
        } elseif (!filter_var($inscription['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'L\'email n\'est pas valide.';
        } elseif ($UserManager->emailExists($inscription['email'])) {
            $errors['email'] = 'Cet email est déjà utilisé. <a href="   /login">Voulez-vous vous connecter ?</a>';
        }
        
        if (empty($inscription['password'])) {
            $errors['password'] = 'Le mot de passe est requis.';
        } elseif (strlen($inscription['password']) < 8) {
            $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères.';
        } elseif (!preg_match('/[A-Za-z]/', $inscription['password']) || !preg_match('/[0-9]/', $inscription['password'])) {
            $errors['password'] = 'Le mot de passe doit contenir des lettres et des chiffres.';
        }

        return $errors;
    }

    private function sendConfirmationEmail($email, $pseudo)
    {
        $to = $email;
        $subject = "Confirmation d'inscription";
        $message = "Bonjour $pseudo,\n\nMerci de vous être inscrit !\n\nCordialement,\nL'équipe";
        $headers = "From: no-reply@votresite.com";
        
        mail($to, $subject, $message, $headers);
    }

    
}
