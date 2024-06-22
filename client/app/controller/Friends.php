<?php

if(!isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}

include ("../view/Friends_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");

include ("../view\components\Children_Popup\Children_Popup.php");