<?php
session_start();

// DB connection!
$mysqli = require ("..\model\database\database.php");

if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

if(isset($_COOKIE["In_God_We_Trust"]))
{   
    $sql="SELECT * FROM users WHERE uid='" . $_COOKIE["In_God_We_Trust"] . "'";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
    $connected_user=true;
}
else
    $connected_user=false;

return $mysqli;