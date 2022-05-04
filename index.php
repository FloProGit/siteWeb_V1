<?php

include_once('./vendor/autoload.php');
include_once('_config.php');
include_once('DotENV.php');

use Symfony\Component\Yaml\Yaml;
MyAutoload::start();
include_once(CLASSES .'Router.php');
use DevCoder\DotEnv;

$request = $_GET['r'];
(new DotEnv(__DIR__ . '/vars/.env'))->load();

$router = new Router($request);
$router->renderController();



//(new DotEnv(__DIR__ . '/vars/.env'))->load();

// mysql:host=localhost;dbname=test;