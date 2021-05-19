<?php

session_start();

date_default_timezone_set("America/Sao_Paulo");

require('vendor/autoload.php');
define("INCLUDE_PATH_STATIC", "http://localhost/videoPratico/backend/Views/Pages/");
define("INCLUDE_PATH","http://localhost/videoPratico/");
$app = new backend\Application();
$app->run();
