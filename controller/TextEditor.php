<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

// $backgroundStyle = require ("../model/backgrounds/texteditor_model.php");
require ("../model/backgrounds/texteditor_model.php");

$isMemorySet = isset($_POST['memoryId']) ? $_POST['memoryId'] : null;

include ("../view/TextEditor_view.php");