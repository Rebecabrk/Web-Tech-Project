<?php
$mysqli = require ('../database/database.php');

$sql = "INSERT INTO feedback (feedback, uid) VALUES (?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $_POST['text'], $_COOKIE['In_God_We_Trust']);

try {
    $stmt->execute();
    header("Location: ../../controller/Settings.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}
?>