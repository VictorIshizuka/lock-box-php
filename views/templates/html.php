<!DOCTYPE html>
<html lang="en" data-theme="dracula">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lockbox</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.24/dist/full.min.css" rel="stylesheet" type="text/css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />

  <script src="https://cdn.tailwindcss.com"></script>

  <style type="text/tailwindcss">
    @theme {
      --font-sans-serif:'sans-serif'
    }
    @layer base {
    h1 { @apply text-5xl font-bold; }
    h3 { @apply text-2xl font-bold; }
  }
  </style>
</head>

<?php
$classActive = 'font-bold';

$classAuth = '';

if ($view == 'login') {
  $classLogin = $classActive;
}

if ($view == 'register') {
  $classRegister = $classActive;
}


$current_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$auth_link = match ($current_path) {
  '/login'    => ['label' => 'Registre-se', 'path' => '/register'],
  '/register' => ['label' => 'Login',       'path' => '/login'],
  default     => ['label' => 'Login',       'path' => '/login'],
};

$validations = flash()->get('validations');

?>

<?php if (auth() ||  $view == 'index' || $view == ''): ?>

  <?php require "../views/templates/app.php" ?>

<?php else: ?>

  <?php require "../views/templates/auth.php" ?>

<?php endif; ?>

</html>