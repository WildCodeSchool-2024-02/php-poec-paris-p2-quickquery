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
    public function addToQuestion(int $userId, int $questionId)
    {
            $statement = $this->pdo->prepare(
                'INSERT INTO ' . self::TABLE . ' (user_id, question_id) VALUES (:userId, :questionId)'
            );
            $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
            $statement->bindParam(':questionId', $questionId, PDO::PARAM_INT);

        $statement->execute();
    }
}
