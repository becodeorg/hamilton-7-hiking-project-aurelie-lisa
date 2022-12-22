<?php

declare(strict_types=1);

session_start();

require 'vendor/autoload.php';

$url = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

if ($url === '') {
    $homeController = new HomeController();
    $homeController->index();
}

if ($url === 'registration') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showRegistrationForm();
    }

    if ($method === 'POST') {
        $authController->register($_POST);
    }
}

if ($url === 'login') {
    $authController = new AuthController();

    if ($method === 'GET') {
        $authController->showLoginForm();
    }

    if ($method === 'POST') {
        $authController->login($_POST);
    }
}

if ($url === 'logout') {
    $authController = new AuthController();
    $authController->logout();
}

if ($url === 'allhike') {
    $hikesController = new HikesController();
    $hikesController->showAllHikes();
}

if ($url === 'hike') {
    $id = $_GET['id'];
    $hikesController = new HikesController();
    $hikesController->showOne($id);
}

if ($url === 'profile') {
    $authController = new UserProfile();
    $authController->showUserProfile();
}