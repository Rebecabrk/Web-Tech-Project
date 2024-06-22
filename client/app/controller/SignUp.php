<?php

if(isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}

require("../model/process/process-signup.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    signup($_POST["user_first_name"], $_POST["user_last_name"], $_POST["user_mail"], $_POST["user_password"]);
}

include ("../view/SignUp_view.php");

include ("../view\components\GoBackButton\GoBackButton.php");
