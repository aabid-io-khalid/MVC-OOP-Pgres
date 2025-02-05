<?php

session_start();

require_once __DIR__ . '/../vendor/autoload.php';  

use App\Core\Router;
use App\Controllers\ArticleController;
use App\Controllers\AuthController;  

$router = new Router();

$router->get('/', ArticleController::class, 'index');
$router->get('/articles/{id}', ArticleController::class, 'show');

$router->get('/login', AuthController::class, 'showLogin');  
$router->get('/register', AuthController::class, 'showRegister');  
$router->post('/login', AuthController::class, 'handleLogin');  
$router->post('/register', AuthController::class, 'handleRegister');  

$router->dispatch();
