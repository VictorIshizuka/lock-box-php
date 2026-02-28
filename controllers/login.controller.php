<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $validation = Validation::validate([
    'email' => ['required', 'email'],
    'password' => ['required']
  ], $_POST);

  if ($validation->isInvalid()) {
    view('login');
    exit();
  }

  $user = User::findByEmail($_POST['email']);

  if (empty($user) || !password_verify($_POST['password'], $user->password)) {
    flash()->push('validation_login', ['Usuário ou senha estão incorretos!']);
    view('login');
    exit();
  }

  $_SESSION['auth'] = $user;
  flash()->push('message', "Seja bem-vindo, " . $user->name . "!");
  header("Location: /");
  exit();
}

auth() ? header('Location: /') : view('login');
