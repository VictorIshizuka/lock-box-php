<?php

namespace App\Controllers;

class LogoutController
{
  public function __invoke()
  {
    if (auth()) {
      session_destroy();
    }

    return redirect("/login");
  }
}
