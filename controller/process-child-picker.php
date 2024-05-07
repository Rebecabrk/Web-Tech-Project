<?php
// DB connection!
$mysqli = require ("..\model\database\database.php");

$sql = "INSERT INTO children (firt_name, email, uid, birth_date) VALUES (?,?,?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST['name_input'], $_POST["email_input"], $_COOKIE["In_God_We_Trust"], $_POST["birth_date_input"]);

try {
    $stmt->execute();
    header("Location: HomePage.php");
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}