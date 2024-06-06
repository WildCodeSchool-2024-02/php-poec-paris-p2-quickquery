<?php

namespace App\Model;

use PDO;

class AlertManager extends AbstractManager
{
    public const TABLE = 'alert';

    public function insert($userId, $questionId): bool
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO ' . self::TABLE . ' (user_id, question_id) VALUES (:userId, :questionId)'
        );
        $statement->bindParam(':userId', $userId, PDO::PARAM_INT);
        $statement->bindParam(':questionId', $questionId, PDO::PARAM_INT);

        return $statement->execute();
    }
}
