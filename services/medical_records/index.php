<?php
header("Content-Type: application/xml");

require_once 'service/medical_record.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if ( strpos($url, 'Alergy') !== false || strpos($url, 'Accident') !== false || strpos($url, 'Desire') !== false){
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'get':
            $segments = explode('/', $url);
            $id = end($segments);
            echo alergies_record_xml($id,$segments[0]);
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