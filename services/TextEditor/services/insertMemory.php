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

function insertMemory($user_id, $title, $text, $pattern, $isCoreMemory)
{
    $mysqli = databaseConnection();

    $data = date('Y-m-d H:i:s');

    $sql = "INSERT INTO memories (user_id, creation_date, title, text, pattern, isCoreMemory) VALUES (?,?,?,?,?, ?)"; //we insert the photos as well
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ssssss", $user_id, $data, $title, $text, $pattern, $isCoreMemory);
    try {
        $stmt->execute();
    } catch (Exception $e) {
        die($e->getMessage() . " " . $e->getCode());
    }

    $dom = new DOMDocument;
    @$dom->loadHTML($text);

    $imgs = $dom->getElementsByTagName('img');
    $srcs = array();

    foreach ($imgs as $img) {
        $srcs[] = $img->getAttribute('src');
    }

    foreach ($srcs as $src) {
        $last_id = mysqli_insert_id($mysqli);
        $sql = "INSERT INTO images_paths (memory_id, path) VALUES (?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $last_id, $src);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage() . " " . $e->getCode());
        }
    }

    $output = "Success";

    // header('Content-Type: application/json; charset=utf-8');
    // return json_encode($output);

    return $output;
}