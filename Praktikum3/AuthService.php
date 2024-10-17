<?php
class AuthService {
    public function __construct() {
        ini_set('session.use_only_cookies', 1);
        ini_set('session.cookie_httponly', 1);
        ini_set('session.cookie_secure', 1); 

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            session_regenerate_id(true);
        }
    }

    public function login($username, $password) {
        $stored_username = 'user123';
        $stored_password = 'password123';

        if ($username === $stored_username && $password === $stored_password) {
            $_SESSION['user'] = $username;
            return true;
        }
        return false;
    }

    public function isLoggedIn() {
        return isset($_SESSION['user']);
    }

    public function logout() {
        $destroyedSessionData = $_SESSION;
        session_unset();
        session_destroy();
        setcookie(session_name(), '', time() - 3600, '/');
        return $destroyedSessionData;
    }

    public function getSessionData() {
        return $_SESSION;
    }
}
?>
