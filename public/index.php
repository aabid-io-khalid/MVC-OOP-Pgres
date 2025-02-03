<?php

require_once __DIR__ . '/../vendor/autoload.php';  

use App\Core\Router;
use App\Controllers\ArticleController;

$router = new Router();

$router->get('/', ArticleController::class, 'index');
$router->get('/articles/{id}', ArticleController::class, 'show');

$router->dispatch();
