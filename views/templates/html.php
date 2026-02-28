<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lock box</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/fill/style.css" />

  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  <style type="text/tailwindcss">
    @theme {
      --font-sans-serif: sans-serif
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

$errors = flash()->get("validations_{$view}") ?? [];

function get_error($errors, $field)
{
  if (isset($errors[$field])) {
    return is_array($errors[$field]) ? $errors[$field][0] : $errors[$field];
  }
  return null;
}

?>

<?php if (auth() ||  $view == 'index' || $view == '' ): ?>

  <?php require "../views/templates/app.php" ?>

<?php else: ?>

  <?php require "../views/templates/auth.php" ?>

<?php endif; ?>

</html>