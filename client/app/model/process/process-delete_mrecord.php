<?php

$mysqli = require('../database/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cid = $_COOKIE['Child_Picker'];
    $id = $_POST['id'];

    $sql = "DELETE FROM medical_records WHERE cid = ? AND id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $cid, $id);

    try {
        $stmt->execute();
        header("Location: ../../controller/Dashboard.php");
        exit;
    } catch (Exception $e) {
        die($e->getMessage() . " " . $e->getCode());
    }
} else {
    die("Invalid request method.");
}
?>
