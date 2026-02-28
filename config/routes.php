<?php

use Core\Route;

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\LogoutController;

(new Route())

  ->get('/', IndexController::class)

  ->get('/login', [LoginController::class, 'index'])
  ->post('/login', [LoginController::class, 'login'])

  ->get('/register', [RegisterController::class, 'index'])
  ->post('/register', [RegisterController::class, 'register'])

  ->get('/logout', [LogoutController::class, 'index'])

  ->run();

die();

$controller = str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);

if (!$controller) $controller = 'index';

if (! file_exists("../controllers/{$controller}.controller.php")) {

  abort(404);
}

require "../controllers/{$controller}.controller.php";
