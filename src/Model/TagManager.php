<?php

namespace App\Model;

use PDO;

class TagManager extends AbstractManager
{
    public const TABLE = 'tag';

    public function insert(int $questionId, int $tagId): void
    {
        $statement = $this->pdo->prepare(
            "INSERT INTO question_tag 
            (question_id, tag_id) 
            VALUES (:question_id, :tag_id)"
        );
        $statement->bindValue(':question_id', $questionId, PDO::PARAM_INT);
        $statement->bindValue(':tag_id', $tagId, PDO::PARAM_INT);
        $statement->execute();
    }
}
