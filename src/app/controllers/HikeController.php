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
    public function addHikeForm(array $input): void
    {
        try{
            //vérifie que les champs ne sont pas vides
            if (empty($input['hikeName']) || empty($input['hikeDistance']) || empty($input['hikeDuration']) || empty($input['hikeElevation']) || empty($input['hikeDescription'])) {
                throw new Exception('Form data not validated.');
            }

            //filtre bonne valeur
            $hikeName = htmlspecialchars($input['hikeName']);
            $hikeDistance = floatval(filter_var($input['hikeDistance'],FILTER_SANITIZE_NUMBER_FLOAT));
            $hikeDuration = intval(filter_var($input['hikeDuration'],FILTER_SANITIZE_NUMBER_INT));
            $hikeElevation = intval(filter_var($input['hikeElevation'],FILTER_SANITIZE_NUMBER_INT));
            $hikeDescription = htmlspecialchars($input['hikeDescription']);
            $creationDate = date("Y-m-d");
            $user_id = $_SESSION['user']['id'];

            $this->hikesModel->addHike($hikeName, $hikeDistance, $hikeDuration, $hikeElevation, $hikeDescription, $creationDate,$user_id);

            http_response_code(302);
            header('location: /');

        } catch (Exception $e) {
            echo $e->getMessage() . '<br>';
            echo '<a href="/addhike">Add a hike here</a>';
        }
    }

    public function showAddHike() : void
    {
        include 'app/views/includes/header.view.php';
        include 'app/views/includes/navbar.view.php';
        include 'app/views/addhike.view.php';
        include 'app/views/includes/footer.view.php';
    }
}