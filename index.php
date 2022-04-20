<?php


include_once('_config.php');


MyAutoload::start();
include_once(CLASSES .'Router.php');

$request = $_GET['r'];


$router = new Router($request);
$router->renderController();


