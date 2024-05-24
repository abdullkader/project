<?php
namespace App\Controller;

use App\Model\User;

class UserController extends BaseController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->login($email, $password);
            if ($user) {
                session_start();
                $_SESSION['user'] = $user;
                if ($user['role'] === 'manager') {
                    header('Location: /dashboard');
                } else {
                    header('Location: https://abdullkader.github.io/Web1/index.html');
                }

                
                exit();
            } else {
                $this->view('login', ['error' => 'Invalid email or password']);
                return;
            }
        }
        $this->view('login');
    }

    public function signup() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($this->userModel->register($name, $email, $password)) {
                header('Location: /login');
                exit();
            } else {
                $this->view('signup', ['error' => 'Failed to create account']);
                return;
            }
        }
        $this->view('signup');
    }

    public function dashboard() {
        session_start();
        if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'manager') {
            $users = $this->userModel->getAllUsers();
            $this->view('dashboard', ['users' => $users]);
        } else {
            header('Location: /login');
            exit();
        }
    }
}
?>
