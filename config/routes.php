<?php

use Core\Route;

use App\Controllers\IndexController;
use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use App\Controllers\LogoutController;
use App\Controllers\NotesController;

(new Route())

  ->get('/', IndexController::class)

  ->get('/login', [LoginController::class, 'index'])
  ->post('/login', [LoginController::class, 'login'])

  ->get('/register', [RegisterController::class, 'index'])
  ->post('/register', [RegisterController::class, 'register'])

  ->get('/logout', [LogoutController::class, 'index'])

  ->get('/notes/create', [NotesController::class, 'index'])
  ->post('/notes', [NotesController::class, 'store'])



  ->run();
