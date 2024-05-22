<?php
$mysqli = require ("../model/database/database.php");

$title = $_POST['title'];
$text = $_POST['text'];
$data = date('Y-m-d H:i:s');
$user_id = 2; //need to figure out how to get the user_id
$sql = "INSERT INTO memories (user_id, creation_date, title, text) VALUES (?,?,?,?)"; //we insert the photos as well
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("ssss", $user_id, $data, $title, $text);
try {
    $stmt->execute();
    // header("Location: ../controller/Journal.php");
} catch (Exception $e) {
    die($e->getMessage() . " " . $e->getCode());
}

// Assuming $_POST['text'] contains your HTML string
$html = $_POST['text'];

// Create a new DOMDocument instance
$dom = new DOMDocument;

// Load the HTML. The @ before the method call suppresses any warnings that
// loadHTML might throw because of invalid HTML in the input.
@$dom->loadHTML($html);

// Get all img elements
$imgs = $dom->getElementsByTagName('img');

// Array to hold all src attributes
$srcs = array();

foreach ($imgs as $img) {
    // Add the src attribute to the array
    $srcs[] = $img->getAttribute('src');
}

foreach ($srcs as $src){
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

