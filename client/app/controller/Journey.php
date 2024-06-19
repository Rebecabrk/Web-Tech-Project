<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require('../model/Journey_model.php');

$xmlString = getXML($_COOKIE['In_God_We_Trust']);
$xml = simplexml_load_string($xmlString);

if ($xml === false) {
    die('Failed to parse XML');
}

if(strpos($xmlString, "error") !== false){
    $xml = false;
}

include ("../view/Journey_view.php");
include ("../view/components/SideNavBar/SideNavBar.php");