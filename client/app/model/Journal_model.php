<?php

function getMemories($user_id)
{
    $mysqli = require ("../model/database/database.php");
    $stmt1 = $mysqli->prepare("SELECT * FROM memories WHERE user_id = ? ORDER BY last_modification DESC");
    $stmt1->bind_param("s", $user_id);
    $stmt1->execute();
    $result = $stmt1->get_result();
    $stmt1->close();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}