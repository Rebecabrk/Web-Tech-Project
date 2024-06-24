<?php

function getFriends($id){
    $mysqli = databaseConnection();
    $stmt1 = $mysqli->prepare("SELECT * FROM friends WHERE user_id = ?");
    $stmt1->bind_param("s", $id);
    $stmt1->execute();
    $result = $stmt1->get_result();
    $stmt1->close();

    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    return $data;
}