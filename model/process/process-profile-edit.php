<?php
$mysqli = require ("../database/database.php");

$sql="UPDATE users SET first_name=?, last_name=?, email=? WHERE uid=?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST['user_first_name'], $_POST['user_last_name'], $_POST['user_mail'], $_COOKIE["In_God_We_Trust"]);

try {
    $stmt->execute();
    header("Location: ..\..\controller\HomePage.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}
?>