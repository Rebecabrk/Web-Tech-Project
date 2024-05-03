<?php

$host="localhost";
$dbname="chim";
$username="root";
$password="";

$mysqpli = new mysqli($host, $username, $password, $dbname);

if($mysqpli->connect_error){
    die("Connection failed: " . $mysqpli->connect_error);
}

return $mysqpli;