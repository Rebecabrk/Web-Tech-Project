<?php
if(isset($_COOKIE['In_God_We_Trust']))
header("Location: HomePage.php");

require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

include ("../view/LandingPage_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");
include ("../view/components/GoUpButton/GoUpButton.php");
// include ("../view/components/ThemeButton/ThemeButton.php");

// include ("../view/components/Cookie/Cookie.php");
include ("../view\components\Children_Popup\Children_Popup.php");