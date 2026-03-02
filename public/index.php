<?php

declare(strict_types=1);

use Carbon\Carbon;

require '../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Timezone da aplicação
|--------------------------------------------------------------------------
*/

date_default_timezone_set(config('date.tz'));

/*
|--------------------------------------------------------------------------
| Configuração global do Carbon
|--------------------------------------------------------------------------
*/

Carbon::setLocale('pt_BR');

session_start();

require base_path('/config/routes.php');
