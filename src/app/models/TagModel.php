<?php

declare(strict_types=1);
class Tags extends Database
{
    public function findAllTags()
    {
        try {
            return $this->query(
                'SELECT * FROM tags JOIN type ON tags.tag_id = type.tag_id JOIN hikes on hikes.hike_id = type.hike_id WHERE hike.id = '.$hike['id']
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }

    }
}