<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: HomePage.php");

include ("../view/Journey_view.php");
include ("../view/components/SideNavBar/SideNavBar.php");