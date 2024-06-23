<?php

function deleteMRecord($memory_id) {
    // Assuming you have a valid database connection established
    $mysqli = databaseConnection();

    // Prepare the DELETE query for memories table
    $sqlMemories = "DELETE FROM memories WHERE id = ?";
    $stmtMemories = $mysqli->prepare($sqlMemories);
    $stmtMemories->bind_param("i", $memory_id);
    $stmtMemories->execute();
    $stmtMemories->close();

    // Prepare the DELETE query for images_paths table
    // $sqlImages = "DELETE FROM images_paths WHERE memory_id = ?";
    // $stmtImages = $mysqli->prepare($sqlImages);
    // $stmtImages->bind_param("i", $memory_id);
    // $stmtImages->execute();
    // $stmtImages->close();

    //pastram pozele pentru gallery

    return "Success";
}