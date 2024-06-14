<?php

// function databaseConnection()
// {
//     $host = "localhost";
//     $dbname = "chim";
//     $username = "root";
//     $password = "";

//     $mysqpli = new mysqli($host, $username, $password, $dbname);

//     if ($mysqpli->connect_error) {
//         die("Connection failed: " . $mysqpli->connect_error);
//     }

//     return $mysqpli;
// }

function alterMemory($memory_id, $text){
    $mysqli = databaseConnection();
    $sql = "UPDATE memories SET text = '" . $text . "' WHERE id =". $memory_id;
    $mysqli->query($sql);
  }