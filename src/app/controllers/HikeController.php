<?php
declare(strict_types=1);

class HikesController
{
    private HikesModel $hikesModel;
    public function __construct()
    {
        $this->hikesModel = new HikesModel();
    }

    public function showAllHikes() : void

    {
        $hikes = $this->hikesModel->findAll();

        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/allhike.view.php';
        include 'app/views/includes/footer.view.php';
    }

    public function showOne(string $id): void
    {
        if (empty($id)) {
            throw new Exception("Product code was not provided.");
        }

        $hike = $this->hikesModel->find($id);

        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/hikingcard.view.php';
        include 'app/views/includes/footer.view.php';
    }
}