<?php
session_start();

// DB connection!
$host="localhost";
$dbname="login_db";
$username="root";
$password="";

$mysqli = new mysqli($host, $username, $password, $dbname);

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

$sql="SELECT * FROM user WHERE session_id = '" . session_id() . "'";
$result = $mysqli->query($sql);
$user = $result->fetch_assoc();

if($user)
    $connected_user=true;
else
    $connected_user=false;

return $mysqli;