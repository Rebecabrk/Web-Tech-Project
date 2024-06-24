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

function alergies_record_xml($user_id, $type)
{
    $mysqli = databaseConnection();

    $stmt1 = $mysqli->prepare("SELECT * FROM medical_records WHERE cid = ? AND type = ? ORDER BY insertion_date DESC");
    $stmt1->bind_param("ss", $user_id, $type);
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
    $record = $dom->createElement('record');
        $record->appendChild($dom->createElement('name', 'nothing here...'));
        $root->appendChild($record);
        $record = $dom->createElement('record');
        $record->appendChild($dom->createElement('name', 'nothing here...'));
        $root->appendChild($record);
  

    if ($ok == false) {
        $record = $dom->createElement('record');
        $record->appendChild($dom->createElement('name', 'nothing here...'));
        $root->appendChild($record);
    }

    // Get the XML content as a string
    $xmlContent = $dom->saveXML();

    // $filePath = 'file.xml';
    // file_put_contents($filePath, $xmlContent);

    return $xmlContent;
}
