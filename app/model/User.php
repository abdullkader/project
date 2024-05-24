<?php
namespace App\Model;
use mysqli;

class User {
    private $conn;
    public function __construct() {
        $this->conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function register($name, $email, $password) {

        $name = trim($name);
        $email = trim($email);
        $password = trim($password);
        if (strlen($name) < 3) {
            throw new \Exception("Name must be at least 3 characters long");
        }
        if (empty($name)) {
            throw new \Exception("Name must not be empty");
        }
        if (empty($email)) {
            throw new \Exception("Email must not be empty");
        }
        if (empty($password)) {
            throw new \Exception("Password must not be empty.");
        }
        // if (preg_match('/@gmail\.com$/', $email)) {
        //     throw new \Exception("Please enter a valid Gmail address.");
        // } ما عرفت استخدمها :(
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
            return $this->conn->query($query);   
    }

    public function login($email, $password) 
        {
        $query = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->conn->query($query);
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return null;
}

    public function getAllUsers() {
        $result = $this->conn->query("SELECT * FROM users");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>
