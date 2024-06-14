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

function deleteMemory($memory_id){
    $mysqli = databaseConnection();
    $sql = "DELETE FROM memories WHERE id = " . $memory_id;
    $mysqli->query($sql);
}