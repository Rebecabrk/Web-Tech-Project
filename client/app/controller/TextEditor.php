<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require ("../model/TextEditor_model.php");
$backgroundInformation = getBackground();

$isMemorySet = isset($_GET['memoryId']) ? $_GET['memoryId'] : null;

include ("../view/TextEditor_view.php");