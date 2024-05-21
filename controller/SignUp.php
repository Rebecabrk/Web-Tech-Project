<?php

if(isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}

include ("../view/SignUp_view.php");