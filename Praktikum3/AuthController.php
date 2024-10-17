<?php
require_once 'AuthService.php';

class AuthController {
    private $authService;

    public function __construct() {
        $this->authService = new AuthService();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($this->authService->login($username, $password)) {
                header('Location: index.php?action=dashboard');
                exit();
            } else {
                return "Username atau password salah!";
            }
        }
        return null;
    }

    public function logout() {
        return $this->authService->logout();
    }

    public function isLoggedIn() {
        return $this->authService->isLoggedIn();
    }

    public function getSessionData() {
        return $this->authService->getSessionData();
    }
}

$controller = new AuthController();
$action = $_GET['action'] ?? null;

if ($action === 'logout') {
    $destroyedSessionData = $controller->logout();
}

$error = $controller->login();
$isLoggedIn = $controller->isLoggedIn();
$sessionData = $controller->getSessionData();
?>
