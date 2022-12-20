<?php

class Auth extends Database
{
    public function create(string $firstname, string $lastname, string $username, string $email, string $password, bool $isAdmin=false ): void
    {
        if (!$this->query(
            "INSERT INTO users(firstname, lastname, username, email, password, isAdmin) VALUES (?, ?, ? , ? , ? , ?)",
            [
                $firstname,
                $lastname,
                $username,
                $email,
                $password,
                $isAdmin
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
                $username,
            ]
        )->fetch()) {
            throw new Exception('Failed login attempt : connection error.');
        }

        return $user;
    }
}