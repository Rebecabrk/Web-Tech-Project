<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require ("../model/Settings2_model.php");

$info = getBackground();

include ("../view/Settings2_view.php");