<?php
header("Content-Type: application/json");

require_once 'services/insertMReccord.php';
require_once 'services/deleteMReccord.php';
require_once 'services/getMReccord.php';
require_once 'services/alterMReccord.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if (strpos($url, 'mrecord') !== false) {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'post':
            /* informatiile sunt trimise printr-un fetch din javascript */
            /* deci body ul requestului trebuie de-encodat din json */
            $rawData = file_get_contents('php://input');
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
                            $data['is_core_memory']
                        )
                )
            );
            break;

        case 'get':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode(array("message" => getMemory($id)));
            break;

        case 'delete':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode(array("message" => deleteMemory($id)));
            break;

        case 'patch':
            $segments = explode('/', $url);
            $id = end($segments);

            $rawData = file_get_contents('php://input');
            $data = json_decode($rawData, true);

            echo json_encode(array("message" => alterMemory($id, $data['updated_text'], $data['updated_is_core_memory'])));
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