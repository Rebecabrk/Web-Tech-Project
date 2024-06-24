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

function multimedia_xml($user_id)
{
    $mysqli = databaseConnection();

    $stmt1 = $mysqli->prepare("SELECT * FROM images_paths WHERE user_id = ?");
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
        $photo = $dom->createElement('item');
        $photo->appendChild($dom->createElement('type', 'photo'));
        $photo->appendChild($dom->createElement('id', $row['id']));
        $photo->appendChild($dom->createElement('user_id', $row['user_id']));
        $photo->appendChild($dom->createElement('memory_id', $row['memory_id']));
        $photo->appendChild($dom->createElement('path', $row['path']));
        $root->appendChild($photo);
    }

    $stmt2 = $mysqli->prepare("SELECT * FROM videos_paths WHERE user_id = ?");
    $stmt2->bind_param("s", $user_id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $stmt2->close();

    while ($row = $result2->fetch_assoc()) {
        $ok = true;
        $photo = $dom->createElement('item');
        $photo->appendChild($dom->createElement('type', 'video'));
        $photo->appendChild($dom->createElement('id', $row['id']));
        $photo->appendChild($dom->createElement('user_id', $row['user_id']));
        $photo->appendChild($dom->createElement('memory_id', $row['memory_id']));
        $photo->appendChild($dom->createElement('path', $row['path']));
        $root->appendChild($photo);
    }

    if ($ok == false) {
        $error = $dom->createElement('error', 'no photos found');
        $root->appendChild($error);
    }

    // Get the XML content as a string
    $xmlContent = $dom->saveXML();

    // $filePath = 'file.xml';
    // file_put_contents($filePath, $xmlContent);

    return $xmlContent;
}
