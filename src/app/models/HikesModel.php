<?php
declare(strict_types=1);
class HikesModel extends Database
{
    function convertTime($time, $format = '%02d:%02d')
    {
        if ($time < 60) {
            return;
        }
        $hours = floor($time / 60);
        $minutes = ($time % 60);
        return sprintf($format, $hours, $minutes);
    }

    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM hikes  LIMIT 20'
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
                'SELECT * FROM hikes WHERE hike_id = ?',
                [
                    $id
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function addHike(string $hikeName, float $hikeDistance, int $hikeDuration, int $hikeElevation, string $hikeDescription, string $created_at, int $user_id): void
    {
        if (!$this->query(
            'INSERT INTO hikes (hikeName, hikeDistance, hikeDuration, hikeElevation, hikeDescription,created_at,user_id ) VALUE (?,?,?,?,?,?,?)',
            [
                $hikeName,
                $hikeDistance,
                $this->convertTime($hikeDuration),
                $hikeElevation,
                $hikeDescription,
                $created_at,
                $user_id
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
}