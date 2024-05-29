<?php

// echo $_POST['type_input'];

// DB connection!
$mysqli = require ("..\database\database.php");

$sql = "INSERT INTO medical_records (type, name, date, location, insertion_date, cid) VALUES (?,?,?,?, SYSDATE(), ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sssss", $_POST['type_input'], $_POST["name_input"], $_POST["date_input"], $_POST["location_input"], $_COOKIE["Child_Picker"]);

try {
    $stmt->execute();
    header("Location: ../../controller/Dashboard.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}