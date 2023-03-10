<?php

declare(strict_types=1);
class UserController
{

    private Auth $userModel;

    public function __construct()
    {
        $this->userModel = new Auth();
    }
    public function showUserProfile(): void
    {
        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/profile.view.php';
    }
}




