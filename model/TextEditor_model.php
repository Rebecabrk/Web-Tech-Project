<?php
$mysqli = require ("../model/database/database.php");

$title = $_POST['title'];
$text = $_POST['text'];
$data = date('Y-m-d H:i:s');
$user_id = 2;
$sql = "INSERT INTO memories (user_id, creation_date, title, text) VALUES (?,?,?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $user_id, $data, $title, $text);
try {
    $stmt->execute();
    header("Location: ../controller/Journal.php");
} catch (Exception $e) {
    die($e->getMessage() . " " . $e->getCode());
}