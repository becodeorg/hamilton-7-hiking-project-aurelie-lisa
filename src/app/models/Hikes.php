<?php
class Hikes extends Database
{
    public function findAll(): array|false
    {
        try {
            return $this->query(
                'SELECT NAME FROM hikes LIMIT 20'
            )->fetchAll();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }

    public function find(string $code): array|false
    {
        try {
            return $this->query(
                "SELECT id, NAME FROM products WHERE id = ?",
                [
                    $code
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
}