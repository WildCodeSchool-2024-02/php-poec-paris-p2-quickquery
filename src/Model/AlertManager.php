<?php

namespace App\Model;

use PDO;

class AlertManager extends AbstractManager
{
    /**
     * The name of the database table
     */
    public const TABLE = 'alert';

    /**
     * Add a new participant to the database
     */
    public function insert($userId, $questionId): bool
    {
            $statement = $this->pdo->prepare(
                'INSERT INTO ' . self::TABLE . ' (user_id, question_id) VALUES (:user_id, :question_id)'
            );
            $statement->bindParam(':user_id', $userId, PDO::PARAM_INT);
            $statement->bindParam(':question_id', $questionId, PDO::PARAM_INT);

            return $statement->execute();
    }
}
