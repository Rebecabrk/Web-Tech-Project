<?php

if(!isset($_COOKIE['In_God_We_Trust']) || $_COOKIE['Child_Picker'] === "nothing")
    header("Location: LandingPage.php");

require ("../model/Dashboard_model.php");

$MRecordXMLAllergy = getMRecordXML($_COOKIE['Child_Picker'], "Alergy");
$MRecordXMLAccident = getMRecordXML($_COOKIE['Child_Picker'], "Accident");
$MRecordXMLDesire = getMRecordXML($_COOKIE['Child_Picker'], "Desire");


include ("../view/Dashboard_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");
include ("../view\components\Dashborad_Popup\Dashborad_Popup.php");
?>