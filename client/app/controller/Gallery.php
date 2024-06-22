<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: LandingPage.php");

require("../model/Gallery_model.php");

$multimediaXML = getMultimediaXML($_COOKIE['In_God_We_Trust']);

include ("../view/Gallery_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");
include ("../view\components\Dashborad_Popup\Dashborad_Popup.php");
?>