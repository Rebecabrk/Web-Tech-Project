<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require ("../model/TextEditor_model.php");
$backgroundStyle = getBackground();

$isMemorySet = isset($_POST['memoryId']) ? $_POST['memoryId'] : null;

include ("../view/TextEditor_view.php");