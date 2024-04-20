<?php
session_start();
$mysqli = require __DIR__ . "/database.php";

$sql="SELECT * FROM user WHERE session_id = '" . session_id() . "'";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

if($user)
    $connected_user=true;
else
    $connected_user=false;
?>