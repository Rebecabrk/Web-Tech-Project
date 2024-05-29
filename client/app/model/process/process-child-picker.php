<?php
// DB connection!
$mysqli = require ("..\database\database.php");

$sql = "INSERT INTO children (first_name, email, uid, birth_date) VALUES (?,?,?,?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $_POST['name_input'], $_POST["email_input"], $_COOKIE["In_God_We_Trust"], $_POST["birth_date_input"]);

try {
    $stmt->execute();

    $sql2 = "SELECT cid FROM children WHERE email = ? AND uid = ?";
    $stmt2 = $mysqli->prepare($sql2);
    $stmt2->bind_param("ss", $_POST['email_input'], $_COOKIE['In_God_We_Trust']);
    $stmt2->execute();
    $result = $stmt2->get_result();
    $row = $result->fetch_assoc();
    setcookie("Child_Picker", $row["cid"], time() + (30 * 24 * 60 * 60), '/');

    header("Location: ../../controller/HomePage.php"); 
} catch (Exception $e) {
    die($e->getMessage(). " " . $e->getCode());
}