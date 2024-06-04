<?php
header("Content-Type: application/json");

require_once 'login.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url) {
    $segments = explode('/', trim($url, '/'));
    $service = array_shift($segments);
    $method = strtolower($_SERVER['REQUEST_METHOD']);

    if ($service == 'login.php') {
        switch ($method) {
            case 'get':
                echo json_encode($dataService->getData());
                break;
            default:
                http_response_code(405);
                echo json_encode(["message" => "Method not allowed"]);
                break;
        }
    } else {
        http_response_code(404);
        echo json_encode(["message" => "Service not found"]);
    }
} else {
    http_response_code(400);
    echo json_encode(["message" => "Bad request"]);
}