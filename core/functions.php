<?php
function view($view, $data = [])
{

  foreach ($data as $key => $value) {

    $$key = $value;
  }

  require '../views/templates/html.php';
}

function dd(...$dump)
{

  dump($dump);

  die();
}

function dump(...$dump)
{

  echo '<pre>';

  var_dump($dump);

  echo '</pre>';
}

function abort($code)
{

  http_response_code($code);

  view($code);

  die();
}

function config($key = null)
{

  $config = require 'config.php';

  if (strlen($key) > 0) {

    return $config[$key];
  }

  return $config;
}

function auth()
{
  if (! isset($_SESSION['auth'])) {

    return null;
  }

  return $_SESSION['auth'];
}

function flash()
{

  return new Flash;
}
