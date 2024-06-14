<?php
header("Content-Type: application/xml");

require_once 'service/xml.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url == 'xml-request') {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'post':
            echo xml($_POST['user_id']);
            break;
        default:
            http_response_code(405);
            echo "<message>Method not allowed</message>";
            break;
    }
} else {
    http_response_code(400);
    echo "<message>Bad request</message>";
}