<?php

declare(strict_types=1);

class HomeController
{
    public function index(): void
    {
        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/index.view.php';
        include 'app/views/includes/footer.view.php';
    }
}