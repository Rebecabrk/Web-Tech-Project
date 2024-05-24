<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

session_start();

// DB connection!
$mysqli = require ("..\model\database\database.php");

require("..\model\logout\logout.php");

logout($mysqli);