<?php
class HikesModel extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes, users LIMIT 20'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $id): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes, users WHERE hike_id = ?',
                [
                    $id
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function addHike(string $hikeName, int $hikeDistance, int $hikeDuration, int $hikeElevation, string $hikeDescription, string $created_at): void
    {
        if (!$this->query(
            'INSERT INTO hikes (hikeName, hikeDistance, hikeDuration, hikeElevation, hikeDescription,created_at ) VALUES (?,?,?,?,?,?)',
            [
                $hikeName,
                $hikeDistance,
                $hikeDuration,
                $hikeElevation,
                $hikeDescription,
                $created_at
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
}