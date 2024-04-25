<?php

require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

//session_start();

if(isset($_SESSION["user_id"])){
    $mysqli = require __DIR__ . "/user_acces/database.php";

    $sql = sprintf("SELECT * FROM user WHERE id = {$_SESSION["user_id"]}");

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

include ("../view/HomePage_view.php");
