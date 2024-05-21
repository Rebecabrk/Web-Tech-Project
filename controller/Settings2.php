<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

$info = require ("../model/backgrounds/settings2_model.php");

include ("../view/Settings2_view.php");