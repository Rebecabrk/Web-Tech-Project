<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

$mysqli = require ("..\model\database\database.php");

require ('../model/process/email_notification/process-email-switch.php');
$isChecked= getChecked();
$isCheckedForChild= getCheckedForChild();

include ("../view/Settings_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");
