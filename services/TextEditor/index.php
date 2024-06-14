<?php
header("Content-Type: application/json");

require_once 'services/insertMemory.php';
require_once 'services/deleteMemory.php';
require_once 'services/getMemory.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url == 'memories') {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'post':
            $rawData = file_get_contents('php://input');

            // Decode the JSON data to an associative array
            $data = json_decode($rawData, true);

            // Now you can access the data fields
            echo json_encode(
                array(
                    "message" =>
                        insertMemory(
                            $data['user_id'],
                            $data['title'],
                            $data['text'],
                            $data['pattern'],
                        )
                )
            );
            break;

        default:
            http_response_code(405);
            echo json_encode(["message" => "Method not allowed"]);
            break;
    }
} else if (strpos($url, 'memory') != false) {
    switch ($method) {
        case 'get':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode(array("message" => getMemory($id)));
            break;

        case 'delete':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode((deleteMemory($id)));
            break;

        default:
            http_response_code(405);
            echo json_encode(["message" => "Method not allowed"]);
            break;
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Bad request"]);
}