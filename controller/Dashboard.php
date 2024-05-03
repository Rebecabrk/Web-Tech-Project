<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: HomePage.php");

include ("../view/Dashboard_view.php");

include ("../view/components/SideNavBar/SideNavBar.php");
?>