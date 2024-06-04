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
            $userId = (int)$_POST['user_id'];
            $questionId = (int)$_POST['question_id'];

             $this->participantManager->addParticipant($userId, $questionId);
    }
}
