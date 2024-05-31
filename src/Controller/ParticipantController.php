<?php

namespace App\Controller;

use App\Model\ParticipantManager;

class ParticipantController
{
    private $participantManager;

    public function __construct()
    {
        $this->participantManager = new ParticipantManager();
    }

    public function participate()
    {
            $_SERVER['REQUEST_METHOD'] === 'POST';
            $userId = (int)$_POST['user_id'];
            $questionId = (int)$_POST['question_id'];
            
            // Call the model method to add the participant
             $this->participantManager->addParticipant($userId, $questionId);

    }
}
