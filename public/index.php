<?php
require_once __DIR__ . '/../app/URL.php';
require_once __DIR__ . '/../app/controller/BaseController.php';
require_once __DIR__ . '/../app/controller/UserController.php';
require_once __DIR__ . '/../app/model/User.php';
require_once __DIR__ . '/../config/config.php';

use App\URL;
use App\Controller\UserController;

$router = new URL();

$router->get('/signup', UserController::class, 'signup');
$router->post('/signup', UserController::class, 'signup');
$router->get('/login', UserController::class, 'login');
$router->post('/login', UserController::class, 'login');
$router->get('/dashboard', UserController::class, 'dashboard');

$router->dispatch();
?>
