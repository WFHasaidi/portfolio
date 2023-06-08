<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use App\App\Controllers\HomeController;
use App\App\Controllers\ProjectController;
use App\App\Controllers\PublicationController;
use App\App\Controllers\TutorialController;

// Define your routes
$routes = [
    '/' => HomeController::class.'@index',
    '/research' => HomeController::class.'@index',
    '/publications' => PublicationController::class.'@index',
    '/cv' => HomeController::class.'@index',
    '/projects' => ProjectController::class.'@index',
    '/write-ups' => HomeController::class.'@index',
    '/tutorials' => TutorialController::class.'@index',
    '/links' => TutorialController::class.'@index'
    // Add more routes as needed
];

// Handle the request
$uri = $_SERVER['REQUEST_URI'];
if (array_key_exists($uri, $routes)) {
    [$controller, $method] = explode('@', $routes[$uri]);
    $controllerInstance = new $controller();
    $controllerInstance->$method();
} else {
    // Handle 404 error
    echo '404 - Page not found';
}


