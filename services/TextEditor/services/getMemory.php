<?php

function getMemory($memory_id){
    $mysqli = databaseConnection();
    
    $sql = "SELECT * FROM memories  WHERE id =" . $memory_id;
    $result = $mysqli->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // header('Content-Type: application/json; charset=utf-8');
    // return json_encode($data);

    return $data;
}