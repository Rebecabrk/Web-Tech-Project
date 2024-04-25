<?php

require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require ("../model/user_acces/database.php");
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["user_mail"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if($user) {
        if(password_verify($_POST["user_password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $sql = sprintf("UPDATE user SET session_id = '" . session_id() . "' WHERE email = '" . $_POST["user_mail"] . "'");
            $result = $mysqli->query($sql);

            header("Location: HomePage.php");
            exit;
        }
    }
    $is_invalid = true;
}

include ("../view/Login_view.php");