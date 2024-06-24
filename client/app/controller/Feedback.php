<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require ("../model/Feedback_model.php");

$info = getBackground();

include ("../view/Feedback_view.php");
include ("../view\components\GoBackButton\GoBackButton.php");