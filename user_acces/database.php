<?php

$host="localhost";
$dbname="login_db";
$username="root";
$password="";

$mysqpli = new mysqli($host, $username, $password, $dbname);

if($mysqpli->connect_error){
    die("Connection failed: " . $mysqpli->connect_error);
}

return $mysqpli;