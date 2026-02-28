<?php

namespace App\Controllers;

class IndexController
{
  public function __invoke()
  {
    var_dump(auth());
    echo "IndexController.__invoke";
  }
}
