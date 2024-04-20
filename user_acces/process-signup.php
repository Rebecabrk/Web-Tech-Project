<?php

if (strlen($_POST["user_password"]) < 8) {
    die("Password must be at least 8 characters long");
}
if ($_POST["user_password"] !== $_POST["user_password_repeat"]) {
    die("Passwords do not match");
}
if ( ! preg_match("/[a-z]/i", $_POST["user_password"]) || ! preg_match("/[A-Z]/i", $_POST["user_password"]) ){
    die("Password must contain at least one letter");
}
if ( ! preg_match("/[0-9]/", $_POST["user_password"]) ) {
    die("Password must contain at least one digit");
}

$password_hash = password_hash($_POST["user_password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/user_acces/database.php";

$sql = "INSERT INTO user (email, first_name, last_name, password_hash) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST["user_mail"], $_POST["user_first_name"], $_POST["user_last_name"], $password_hash);

try {
    $stmt->execute();
    header("Location: Login.php");
} catch (Exception $e) {
    if( $e->getCode() === 1062) {
        die("Email already in use");
    } else {
        die($e->getMessage(). " " . $e->getCode());
    }
}