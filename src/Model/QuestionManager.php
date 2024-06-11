<?php

namespace App\Model;

use PDO;

class QuestionManager extends AbstractManager
{
    public const TABLE = 'question';

    public function selectMostRecent()
    {
        $statement = $this->pdo->query("
                SELECT q.*, 
                    COUNT(DISTINCT p.user_id) as participant_count, 
                    t.tag_list
                FROM " . self::TABLE . " AS q
                LEFT JOIN participant AS p ON q.id = p.question_id
                LEFT JOIN (
                    SELECT qt.question_id, GROUP_CONCAT(t.name SEPARATOR ', ') as tag_list
                    FROM question_tag AS qt
                    LEFT JOIN tag AS t ON qt.tag_id = t.id
                    GROUP BY qt.question_id
                ) AS t ON q.id = t.question_id
                GROUP BY q.id
                ORDER BY q.created_at DESC
                LIMIT 6
            ");

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
