<?php

use DevCoder\DotEnv;

include_once('_config.php');


MyAutoload::start();
include_once(CLASSES .'Router.php');

$request = $_GET['r'];


$router = new Router($request);
$router->renderController();



(new DotEnv(__DIR__ . '/vars/.env'))->load();

echo getenv('APP_ENV');
// dev
echo getenv('DATABASE_DNS');
// mysql:host=localhost;dbname=test;