<?php

function alterFriend($name, $photo_path, $description, $friend_id)
{
    $mysqli = databaseConnection();

    $sql = "UPDATE friends SET name = ?, photo_path = ?, description = ? WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ssss", $name, $photo_path, $description, $friend_id);

        if ($stmt->execute()) {
            $stmt->close();

        } else {
            $stmt->close();
            return "Error: " . $stmt->error;
        }
    } else {
        return "Error: " . $mysqli->error;
    }

    return "Success";
}
