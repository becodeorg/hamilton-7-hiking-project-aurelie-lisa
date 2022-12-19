<?php
declare(strict_types=1);

class hikesController
{
    private Hikes $singleHike;
    public function __construct()
    {
        $this->singleHike = new Hikes();
    }

    public function index(): void
    {
        $products = $this->productModel->findAll();

        include 'views/includes/header.view.php';
        include 'views/index.view.php';
        include 'views/includes/footer.view.php';
    }

    public function show(string $code): void
    {
        if (empty($code)) {
            throw new Exception("Product code was not provided.");
        }

        $product = $this->productModel->find($code);

        include 'views/includes/header.view.php';
        include 'views/product.view.php';
        include 'views/includes/footer.view.php';
    }
}

}