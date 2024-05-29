<?php

if(isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}

$mysqli = require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

require ("../model/login/login.php");

$is_invalid = login($mysqli);

include ("../view/Login_view.php");

include ("../view\components\GoBackButton\GoBackButton.php");
