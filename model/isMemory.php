<?php

function isMemory(){

    $mysqli = require ("../model/database/database.php");
    $id = $_GET['param'];
    $sql = "SELECT * FROM memories  WHERE id =" . $id;
    $result = $mysqli->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    header('Content-Type: application/json; charset=utf-8');
    return json_encode($data);
}

echo isMemory();