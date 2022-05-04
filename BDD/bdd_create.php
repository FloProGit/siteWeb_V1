<?php

require(__DIR__.'/utilsFunction/BDDCreationManager.php');
require(__DIR__.'/utilsFunction/ActionBdd.php');
require('../model/BDD.php');
require('../BDD/CreationClass/createBDDMng.php');

require(__DIR__ .'/../vendor/autoload.php');

$servername = $_GET['host'];
$username = $_GET['user'];
$password = $_GET['password'];


//$currentBddCreation = new BDDCreate($servername,$username,$password);
 $currentBddCreation = new BDDCreate('localhost','root','');



// try {
//   $conn = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE myDBPDO";
//   // use exec() because no results are returned
//   $conn->exec($sql);
//   echo "Database created successfully<br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

// $conn = null;
?>