<?php

namespace App\Model;

use PDO;

class ParticipantManager extends AbstractManager
{
    /**
     * The name of the database table
     */
    public const TABLE = 'participant';

    /**
     * Add a new participant to the database
     */
    public function addParticipant($userId, $questionId)
    {
            $statement = $this->pdo->prepare(
                'INSERT INTO ' . self::TABLE . ' (user_id, question_id) VALUES (:user_id, :question_id)'
            );
            $statement->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $statement->bindParam(':question_id', $questionId, PDO::PARAM_INT);

        $statement->execute();
    }
}
