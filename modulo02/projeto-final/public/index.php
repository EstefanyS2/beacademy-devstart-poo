<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function creatRoute(string $controllername, string $methodName) {
    return [
        'controller' => $controllername,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => creatRoute(IndexController::class, 'indexAction'),
    '/produtos' => creatRoute(ProductController::class, 'listAction'),
    '/produtos/novo' => creatRoute(ProductController::class, 'addAction'),
    ];

if (false === isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url] ['controller'];
$methoudName = $routes[$url] ['method'];

(new $controllerName())-> $methodName();