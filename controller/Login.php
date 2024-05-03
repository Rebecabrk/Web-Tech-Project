<?php

if(!isset($_COOKIE['In_God_We_Trust']))
    header("Location: HomePage.php");

$mysqli = require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $sql = sprintf("SELECT * FROM users WHERE email = '%s'", $mysqli->real_escape_string($_POST["user_mail"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }

    if($user) {
        if(password_verify(validate($_POST["user_password"]), $user["password_hash"])) {

            session_start();

            setcookie("In_God_We_Trust", $user["uid"], time() + (30 * 24 * 60 * 60), '/');

            header("Location: HomePage.php");
            exit;
        }
    }
    $is_invalid = true;
}

include ("../view/Login_view.php");