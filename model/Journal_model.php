<?php

function getMemories()
{
    $mysqli = require ("../model/database/database.php");
    $sql = "SELECT * FROM memories";
    $result = $mysqli->query($sql);

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return json_encode($data);
}

header('Content-Type: application/json');
echo getMemories();

