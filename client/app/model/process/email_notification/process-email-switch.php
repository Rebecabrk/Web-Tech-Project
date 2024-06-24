<?php
function getConnection() {
    return require('../model/database/database.php');
}

function getChecked() {
    // return isset($_POST['emailSwitch']) && $_POST['emailSwitch'];
    $mysqli = getConnection();

    $sql = "SELECT email_notification FROM users WHERE uid = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_COOKIE['In_God_We_Trust']);

    try {
        $stmt->execute();
        if($stmt->get_result()->fetch_assoc()['email_notification'] == 1)
            return true;
        // header("Location: ../../controller/Settings.php");
    } catch (Exception $e) {
        die($e->getMessage(). " " . $e->getCode());
    }
}
function getCheckedForChild() {
    // return isset($_POST['emailOptInForChild']) && $_POST['emailOptInForChild'];
    $mysqli = getConnection();

    $sql = "SELECT email_notification FROM children WHERE cid = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("s", $_COOKIE['Child_Picker']);

    try {
        $stmt->execute();
        if($stmt->get_result()->fetch_assoc()['email_notification'] == 1)
            return true;
        // header("Location: ../../controller/Settings.php");
    } catch (Exception $e) {
        die($e->getMessage(). " " . $e->getCode());
    }
}
?>