<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $validation = Validation::validate([
        'name' => ['required'],
        'email' => ['required', 'email', 'confirmed', 'unique:users'],
        'password' => ['required', 'min:8', 'max:30', 'strong']
    ], $_POST);

    if ($validation->isInvalid()) {
        view('register');
        exit();
    }

    User::create([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);

    flash()->push('message', 'Registrado com sucesso! 👍');
    header('Location: /login');
    exit();
}

auth() ? header('Location: /') : view('register');
exit();