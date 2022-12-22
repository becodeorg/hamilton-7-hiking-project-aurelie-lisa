<?php
declare(strict_types=1);
class Auth extends Database
{
    /**
     * @throws Exception
     */
    public function create(string $firstname, string $lastname, string $username, string $email, string $password): void
    {
        if (!$this->query(
            "INSERT INTO users(firstname, lastname, username, email, password) VALUES (?, ?, ? , ? , ?)",
            [
                $firstname,
                $lastname,
                $username,
                $email,
                $password,
            ]
        )) {
            throw new Exception('Error during registration.');
        }
    }
    public function find(string $username): array
    {
        if (!$user = $this->query(
            "SELECT * FROM users WHERE username = ?",
            [
                $username
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
//find user ID - not used yet

/*
    public function findUser(string $id): array|false
    {
        try {
            return $this->query(
                'SELECT * FROM users WHERE user_id = ?',
                [
                    $id,
                ]
            )->fetch();

        } catch (Exception $e) {
            echo $e->getMessage();
            return [];
        }
    }
*/
}