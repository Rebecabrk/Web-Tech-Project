<?php

$mysqli = require('../database/database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uid = $_COOKIE['Child_Picker'];
    $type = $_POST['type'];
    $name = $_POST['name'];

    $sql = "DELETE FROM medical_records WHERE cid = ? AND type = ? AND name = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sss", $uid, $type, $name);

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
