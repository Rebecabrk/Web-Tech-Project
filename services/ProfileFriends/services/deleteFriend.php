<?php

function deleteFriend($friend_id) {
    $mysqli = databaseConnection();

    $sqlMemories = "DELETE FROM friends WHERE id = ?";
    $stmtMemories = $mysqli->prepare($sqlMemories);
    $stmtMemories->bind_param("s", $friend_id);
    try {
        $stmtMemories->execute();
    } catch (Exception $e) {
        return $e->getMessage() . " " . $e->getCode();
    }
    $stmtMemories->close();

    return "Success";
}