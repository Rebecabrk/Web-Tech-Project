<?php
$mysqli = require ('../model/database/database.php');

$sql = "UPDATE children SET first_name = ?, email = ? WHERE cid = '" . $_COOKIE['Child_Picker'] . "'";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ss", $_POST['child_first_name'], $_POST['child_mail']);

try {
    $stmt->execute();
    header("Location: HomePage.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}
?>