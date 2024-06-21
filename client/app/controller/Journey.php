<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require('../model/Journey_model.php');

$xmlString = getXML($_COOKIE['In_God_We_Trust']);
$cleanedContent = str_replace('&nbsp;', ' ', $xmlString);
$xml = simplexml_load_string($cleanedContent);

if ($xml === false) {
    die('Failed to parse XML' . " " . $xmlString);
}

if(strpos($xmlString, "error") !== false){
    $xml = false;
}

include ("../view/Journey_view.php");
include ("../view/components/SideNavBar/SideNavBar.php");