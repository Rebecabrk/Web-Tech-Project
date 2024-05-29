<?php

if(!isset($_COOKIE['In_God_We_Trust']))
header("Location: LandingPage.php");

require ('../model/Journal_model.php');

// $data = getMemories();
// $allMemories = json_decode($students, true);

$allMemories = getMemories();

include ("../view/Journal_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");