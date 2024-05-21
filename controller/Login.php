<?php

if(isset($_COOKIE["In_God_We_Trust"])) {
    header("Location: LandingPage.php");
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$mysqli = require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $users_sql = sprintf("SELECT * FROM users WHERE email = '%s'", $mysqli->real_escape_string($_POST["user_mail"]));
    $user_result = $mysqli->query($users_sql);
    $user = $user_result->fetch_assoc();

    if($user) {

        if(password_verify(validate($_POST["user_password"]), $user["password_hash"])) {

            session_start();

            setcookie("In_God_We_Trust", $user["uid"], time() + (30 * 24 * 60 * 60), '/');

            $children_sql = sprintf("SELECT * FROM children WHERE uid = '%s'", $mysqli->real_escape_string($user["uid"]));
            $children_result = $mysqli->query($children_sql);
            $children = $children_result->fetch_assoc();
                
            if($children)
                setcookie("Child_Picker", $children["cid"], time() + (30 * 24 * 60 * 60), '/');
            else
                setcookie("Child_Picker", "nothing", time() + (30 * 24 * 60 * 60), '/');

            header("Location: HomePage.php");
            exit;
        }
    }
    $is_invalid = true;
}

include ("../view/Login_view.php");