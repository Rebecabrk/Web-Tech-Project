<?php
$mysqli = require ("../model/database/database.php");

function insertMemory()
{
    global $mysqli;
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

    header("Location: ../controller/Journal.php");
}

function deleteMemory($id){
    global $mysqli;
    $sql = "DELETE FROM memories WHERE id = " . $id;
    $mysqli->query($sql);

    header("Location: ../controller/Journal.php");
}

if (isset($_GET['function'])) {
    $functionToCall = $_GET['function'];
    if (function_exists($functionToCall)) {
        if(isset($_POST['memoryId'])){
            $param = $_POST['memoryId'];
            echo $functionToCall($param);
        }else{
            echo $functionToCall();
        }
    } else {
        echo json_encode(array("error" => "Invalid function specified"));
    }
} else {
    echo json_encode(array("error" => "No function specified"));
}
