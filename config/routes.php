<?php

use Core\Route;

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\LogoutController;
use App\Controllers\NotesController;
use App\Middlewares\AuthMiddleware;
use App\Middlewares\GuestMiddleware;

(new Route())

  ->get('/', IndexController::class, AuthMiddleware::class)

  ->get('/login', [LoginController::class, 'index'], GuestMiddleware::class)
  ->post('/login', [LoginController::class, 'login'], GuestMiddleware::class)

  ->get('/register', [RegisterController::class, 'index'], GuestMiddleware::class)
  ->post('/register', [RegisterController::class, 'register'], GuestMiddleware::class)

  ->get('/logout', LogoutController::class, GuestMiddleware::class)

  ->get('/notes/create', [NotesController::class, 'index'], AuthMiddleware::class)
  ->post('/notes', [NotesController::class, 'store'], AuthMiddleware::class)



  ->run();
