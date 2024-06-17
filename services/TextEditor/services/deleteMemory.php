<?php

function deleteMemory($memory_id){
    $mysqli = databaseConnection();
    $sql = "DELETE FROM memories WHERE id = " . $memory_id;
    $mysqli->query($sql);

    return "Success";
}