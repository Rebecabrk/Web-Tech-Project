<?php
header("Content-Type: application/json");

require_once 'services/addFriend.php';
require_once 'services/deleteFriend.php';
require_once 'services/getFriend.php';
require_once 'services/alterFriend.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if (strpos($url, 'friends') !== false) {
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
                        addFriend(
                            $data['user_id'],
                            $data['name'],
                            $data['photo_path'],
                            $data['description']
                        )
                )
            );
            break;

        case 'get':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode(array("message" => getFriend($id)));
            break;

        case 'delete':
            $segments = explode('/', $url);
            $id = end($segments);
            echo json_encode(array("message" => deleteFriend($id)));
            break;

        case 'patch':
            $segments = explode('/', $url);
            $id = end($segments);

            $rawData = file_get_contents('php://input');
            $data = json_decode($rawData, true);

            echo json_encode(array("message" => alterFriend($data['name'], $data['photo_path'], $data['description'], $id)));
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