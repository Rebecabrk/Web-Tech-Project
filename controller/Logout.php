<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

session_start();

// DB connection!
$mysqli = require ("..\model\database\database.php");

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

setcookie("In_God_We_Trust", "", time() - 3600, '/');
setcookie("Child_Picker", "", time() - 3600, '/');

session_unset();
session_destroy();

header("Location: HomePage.php");
exit;