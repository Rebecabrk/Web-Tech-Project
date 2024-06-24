<?php
header("Content-Type: application/xml");

require_once 'service/mrecord_xml.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ($url != null) {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'get':
            $segments = explode('/', $url);
            $id = end($segments);
            echo mrecord_xml($id);
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