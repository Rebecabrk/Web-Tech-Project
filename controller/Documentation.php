<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: HomePage.php");

include ("../view/Documentation_view.php");
