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

$validations = flash()->get('validations');

?>

<?php
$template = auth() ? 'app' : 'auth';
require base_path("views/templates/{$template}.php");
?>

</html>