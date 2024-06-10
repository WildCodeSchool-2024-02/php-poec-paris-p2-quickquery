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
    public function insert(int $userId, int $questionId)
    {
            $statement = $this->pdo->prepare(
                'INSERT INTO ' . self::TABLE . ' (user_id, question_id) VALUES (:userId, :questionId)'
            );
            $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
            $statement->bindParam(':questionId', $questionId, PDO::PARAM_INT);

        $statement->execute();
    }

    /**
     * Count the number of participants for a given question
     */
    public function countByQuestionId(int $questionId): int
    {
        $statement = $this->pdo->prepare(
            'SELECT COUNT(*) as participant_count FROM ' . self::TABLE . ' WHERE question_id = :questionId'
        );
        $statement->bindParam(':questionId', $questionId, PDO::PARAM_INT);
        $statement->execute();

        return (int)$statement->fetchColumn();
    }
}
