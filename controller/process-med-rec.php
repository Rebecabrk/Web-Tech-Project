<?php

// echo $_POST['type_input'];

// DB connection!
$mysqli = require ("..\model\database\database.php");

$sql = "INSERT INTO medical_records (type, name, date, location, insertion_date) VALUES (?,?,?,?, SYSDATE())";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST['type_input'], $_POST["name_input"], $_POST["date_input"], $_POST["location_input"]);

try {
    $stmt->execute();
    header("Location: Dashboard.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}