<?php
session_start();

use App\controllers\AuthController;

$uri    = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$method = $_SERVER['REQUEST_METHOD'];

$auth = new AuthController();

match (true) {
    $uri === 'login'    && $method === 'GET'  => $auth->loginForm(),
    $uri === 'login'    && $method === 'POST' => $auth->login(),
    $uri === 'register' && $method === 'GET'  => $auth->registerForm(),
    $uri === 'register' && $method === 'POST' => $auth->register(),
    $uri === 'logout'                         => $auth->logout(),
    default => require ROOT . '/routes/home.php'
};