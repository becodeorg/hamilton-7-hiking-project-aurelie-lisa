<?php
declare(strict_types=1);


class AuthController
{
    private Auth $authModel;

    public function __construct()
    {
        $this->authModel = new Auth();
    }

    public function register(array $input): void
    {
        if (empty($input['username']) || empty($input['email']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        $firstname = htmlspecialchars($input['username']);
        $lastname = htmlspecialchars($input['username']);
        $username = htmlspecialchars($input['username']);
        $email = filter_var($input['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($input['password'], PASSWORD_DEFAULT);
        $isAdmin = false;

        $this->authModel->create($firstname, $lastname, $username, $email, $password, $isAdmin );

        $id = $this->authModel->getLastInsertId();

        $_SESSION['user'] = [
            'user_id' => $id,
            'username' => $username,
            'email' => $email
        ];

        http_response_code(302);
        header('location: /');
    }

    public function showRegistrationForm(): void
    {
        include 'app/views/includes/header.view.php';
        include 'app/views/register.view.php';
        include 'app/views/includes/footer.view.php';
    }

    public function login(array $input)
    {
        if (empty($input) || empty($input['username']) || empty($input['password'])) {
            throw new Exception('Form data not validated.');
        }

        // Sanitize/validate input
        $username = htmlspecialchars($input['username']);
        $password = htmlspecialchars($input['password']);

        $user = $this->authModel->find($username);

        if (!password_verify($password, $user['password'])) {
            throw new Exception("Failed login attempt : wrong password");
        }

        $_SESSION['user'] = [
            "id" => $user["id"],
            'username' => $user['username'],
            'email' => $user['email']
        ];

        // Then, we redirect to the home page
        http_response_code(302);
        header('location: /');
    }

    public function showLoginForm()
    {
        include 'app/views/includes/header.view.php';
        include 'app/views/login.view.php';
        include 'app/views/includes/footer.view.php';
    }

    public function logout()
    {
        unset($_SESSION['user']);

        header('location: /');
    }
}