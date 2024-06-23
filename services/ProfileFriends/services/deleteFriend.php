<?php

function deleteFriend($friend_id) {
    $mysqli = databaseConnection();

    $sqlMemories = "DELETE FROM friends WHERE id = ?";
    $stmtMemories = $mysqli->prepare($sqlMemories);
    $stmtMemories->bind_param("i", $friend_id);
    $stmtMemories->execute();
    $stmtMemories->close();

    return "Success";
}