<?php

class Handler {
    public function Ifelse($username, $password) {
        $correctUsername = "admin";
        $correctPassword = "password123";

        if ($username == $correctUsername && $password == $correctPassword) {
            return "Login successful!";
        } else {
            return "Invalid username or password!";
        }
    }

    public function Switchcase($month) {
        switch ($month) {
            case 1:
            case 2:
            case 12:
                return "It's winter!";
            case 3:
            case 4:
            case 5:
                return "It's spring!";
            case 6:
            case 7:
            case 8:
                return "It's summer!";
            case 9:
            case 10:
            case 11:
                return "It's autumn!";
            default:
                return "Invalid month!";
        }
    }

    public function Looping($number) {
        $result = "";
        for ($i = 1; $i <= 10; $i++) {
            $result .= "$number x $i = " . ($number * $i) . "<br>";
        }
        return $result;
    }
}
