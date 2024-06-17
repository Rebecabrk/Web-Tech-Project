<?php

function databaseConnection()
{
    $host = "localhost";
    $dbname = "chim";
    $username = "root";
    $password = "";

    $mysqpli = new mysqli($host, $username, $password, $dbname);

    if ($mysqpli->connect_error) {
        die("Connection failed: " . $mysqpli->connect_error);
    }

    return $mysqpli;
}

function xml($user_id)
{
    $mysqli = databaseConnection();  

    $stmt = $mysqli->prepare("SELECT * FROM memories WHERE user_id = ? AND isCoreMemory = true");
    $stmt->bind_param("s", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    $root = $dom->createElement('root');
    $dom->appendChild($root);

    $ok = false;

    while ($row = $result->fetch_assoc()) {
        $ok = true;
        $memory = $dom->createElement('memory');
        $memory->appendChild($dom->createElement('id', $row['id']));
        $memory->appendChild($dom->createElement('user_id', $row['user_id']));
        $memory->appendChild($dom->createElement('creation_date', $row['creation_date']));
        $memory->appendChild($dom->createElement('last_modification', $row['last_modification']));
        $memory->appendChild($dom->createElement('title', $row['title']));
        $memory->appendChild($dom->createElement('text', $row['text']));
        $memory->appendChild($dom->createElement('pattern', $row['pattern']));
        $root->appendChild($memory);
    }

    if ($ok == false) {
        $error = $dom->createElement('error', 'no memories');
        $root->appendChild($error);
    }
    $stmt->close();

    // Get the XML content as a string
    $xmlContent = $dom->saveXML();

    $filePath = 'file.xml'; 
    file_put_contents($filePath, $xmlContent);

    return $xmlContent;
}
