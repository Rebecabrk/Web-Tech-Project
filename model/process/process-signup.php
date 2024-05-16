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

// DB connection!
$mysqli = require ("..\database\database.php");

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO users (first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST["user_first_name"], $_POST["user_last_name"], $_POST["user_mail"], $password_hash);

try {
    $stmt->execute();
    header("Location:  ..\..\controller\Login.php");
} catch (Exception $e) {
    if( $e->getCode() === 1062) {
        die("Email already in use");
    } else {
        die($e->getMessage(). " " . $e->getCode());
    }
}