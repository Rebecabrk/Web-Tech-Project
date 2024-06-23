<?php

function databaseConnection()
{
    $host = "localhost";
    $dbname = "chim";
    $username = "root";
    $password = "";

    $mysqpli = new mysqli($host, $username, $password, $dbname);

    if ($mysqpli->connect_error) {
        die("Connection failed: " . $mysqpli->connect_error);
    }

    return $mysqpli;
}

function addFriend($user_id, $name, $photo_path, $description)
{
    $mysqli = databaseConnection();

    $sql = "INSERT INTO friends (user_id, name, photo_path, description) VALUES (?,?,?,?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssss", $user_id, $name, $photo_path, $description);
    try {
        $stmt->execute();
    } catch (Exception $e) {
        die($e->getMessage() . " " . $e->getCode());
    }

    $output = "Success";
    return $output;
}