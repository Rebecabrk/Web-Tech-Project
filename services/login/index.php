<?php
header("Content-Type: application/json");

require_once 'service/login.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url == 'authentificated_users') {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'post':
                echo json_encode(login($_POST['email'], $_POST['password']));
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