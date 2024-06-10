<?php
header("Content-Type: application/xml");

require_once 'service/xml.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

function array_to_xml($data, &$xml_data)
{
    foreach ($data as $key => $value) {
        if (is_array($value)) {
            if (is_numeric($key)) {
                $key = 'item' . $key;
            }
            $subnode = $xml_data->addChild($key);
            array_to_xml($value, $subnode);
        } else {
            $xml_data->addChild("$key", htmlspecialchars("$value"));
        }
    }
}

if ($url == 'xml-request') {
    $method = strtolower($_SERVER['REQUEST_METHOD']);
    switch ($method) {
        case 'post':

            $xmlContent = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<note>
  <to>Tove</to>
  <from>Jani</from>
  <heading>Reminder</heading>
  <body>Don't forget me this weekend!</body>
</note>
XML;

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