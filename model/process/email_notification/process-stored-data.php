<?php
$mysqli = require ("..\..\database\database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST['emailSwitch'])) {
        $uid = $mysqli->real_escape_string($_COOKIE['In_God_We_Trust']);
        $sql = "UPDATE users SET email_notification = 1 WHERE uid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $uid);
    } else {
        $uid = $mysqli->real_escape_string($_COOKIE['In_God_We_Trust']);
        $sql = "UPDATE users SET email_notification = 0 WHERE uid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $uid);
    }

    if(isset($_POST['emailSwitchForChild'])) {
        $cid = $mysqli->real_escape_string($_COOKIE['Child_Picker']);
        $sql = "UPDATE children SET email_notification = 1 WHERE cid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $cid);
    } else {
        $cid = $mysqli->real_escape_string($_COOKIE['Child_Picker']);
        $sql = "UPDATE children SET email_notification = 0 WHERE cid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $cid);
    }

    try {
        $stmt->execute();
        header("Location: ../../../controller/Settings.php");
    } catch (Exception $e) {
        die($e->getMessage(). " " . $e->getCode());
    }
}
?>