<?php

class Login {
    public $username;
    public $password;

    public function __construct($username, $password) {
        if (isset($username)) {
            $this->username = $username;
        }

        if (isset($password)) {
            $this->password = $password;
        }
    }

    public function login() {
        if ($this->username == 'admin' && $this->password == 'admin') {
            return '<h1>Login Berhasil</h1>';
        } else {
            return '<h1>Login Gagal</h1>';
        }
    }
}

if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $login = new Login($username, $password);
    $result = $login->login();
    echo $result;
    echo '<a href="index.php" class="btn btn-primary">Back</a>';
}
