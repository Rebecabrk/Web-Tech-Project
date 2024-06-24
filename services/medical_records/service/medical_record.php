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

function mrecord_xml($user_id)
{
    $mysqli = databaseConnection();

    $stmt1 = $mysqli->prepare("SELECT * FROM children WHERE cid = ?");
    $stmt1->bind_param("s", $user_id);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    $stmt1->close();

    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    $root = $dom->createElement('root');
    $dom->appendChild($root);

    $ok = false;

    while ($row = $result1->fetch_assoc()) {
        $ok = true;
        $record = $dom->createElement('record');
        $record->appendChild($dom->createElement('id', $row['id']));
        $record->appendChild($dom->createElement('type', $row['type']));
        $record->appendChild($dom->createElement('name', $row['name']));
        $record->appendChild($dom->createElement('date', $row['date']));
        $record->appendChild($dom->createElement('location', $row['location']));
        $root->appendChild($record);
    }

    if ($ok == false) {
        $error = $dom->createElement('error', 'no data found');
        $root->appendChild($error);
    }

    // Get the XML content as a string
    $xmlContent = $dom->saveXML();

    // $filePath = 'file.xml';
    // file_put_contents($filePath, $xmlContent);

    return $xmlContent;
}
