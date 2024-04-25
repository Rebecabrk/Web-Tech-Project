<?php
session_start();

$host="localhost";
$dbname="login_db";
$username="root";
$password="";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

$sql = "UPDATE user SET session_id = NULL WHERE session_id = '" . session_id() . "'";
$result = $mysqli->query($sql);

session_destroy(); //NOT WORKNING

header("Location: HomePage.php");
exit;