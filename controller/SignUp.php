<?php

if(isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: HomePage.php");
}

include ("../view/SignUp_view.php");

include ("../view/components/GoBackButton/GoBackButton.php");