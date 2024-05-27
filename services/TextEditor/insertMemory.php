<?php

function insertMemory()
{
    $host = "localhost";
    $dbname = "chim";
    $username = "root";
    $password = "";

    $mysqli = new mysqli($host, $username, $password, $dbname);

    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    $title = $_POST['title'];
    $text = $_POST['text'];
    $data = date('Y-m-d H:i:s');
    $user_id = 2; //need to figure out how to get the user_id
    $pattern = $_POST['pattern'];
    $sql = "INSERT INTO memories (user_id, creation_date, title, text, pattern) VALUES (?,?,?,?,?)"; //we insert the photos as well
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("sssss", $user_id, $data, $title, $text, $pattern);
    try {
        $stmt->execute();
        // header("Location: ../controller/Journal.php");
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

    header('Content-Type: application/json; charset=utf-8');
    return json_encode($output);
}

echo insertMemory();