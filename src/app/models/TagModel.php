<?php

declare(strict_types=1);
class TagsModel extends Database
{
    public function findAllTags() : array|false
    {
        try {
            return $this->query(
                'SELECT * FROM tags LIMIT 20')->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }

    }
}