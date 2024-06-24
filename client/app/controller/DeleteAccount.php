<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

// DB connection!
$mysqli = require ("..\model\database\database.php");

require("..\model\delete_account\delete_account.php");

delete_account($mysqli);