<?php

if(!isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}
require("../model/Friends_model.php");
$allFriends = getAllFriends($_COOKIE["In_God_We_Trust"]);

include ("../view/Friends_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");