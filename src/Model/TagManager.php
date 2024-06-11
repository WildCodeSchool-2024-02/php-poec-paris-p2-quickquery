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

    public function allQuestionByTag(int $tagId): array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM question q JOIN question_tag qt ON q.id = qt.question_id JOIN " . self::TABLE . " t ON qt.tag_id = t.id WHERE t.id = :tagId ");
        $stmt->bindValue(':tagId', $tagId, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
