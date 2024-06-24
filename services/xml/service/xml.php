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

    $stmt1 = $mysqli->prepare("SELECT * FROM memories WHERE user_id = ? AND isCoreMemory = true ORDER BY creation_date DESC");
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
        $memory = $dom->createElement('memory');
        $memory->appendChild($dom->createElement('id', $row['id']));
        $memory->appendChild($dom->createElement('user_id', $row['user_id']));
        $memory->appendChild($dom->createElement('creation_date', $row['creation_date']));
        // $memory->appendChild($dom->createElement('last_modification', $row['last_modification']));
        $memory->appendChild($dom->createElement('title', $row['title']));
        $memory->appendChild($dom->createElement('text', $text = substr($row['text'], 0, 70)));
        $memory->appendChild($dom->createElement('pattern', $row['pattern']));

        $stmt2 = $mysqli->prepare("SELECT * FROM images_paths WHERE memory_id = ?");
        $stmt2->bind_param("s", $row['id']);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        $stmt3 = $mysqli->prepare("SELECT * FROM videos_paths WHERE memory_id = ?");
        $stmt3->bind_param("s", $row['id']);
        $stmt3->execute();
        $result3 = $stmt3->get_result();


        if ($photo = $result2->fetch_assoc()) {
            $multimedia = $dom->createElement('multimedia_element');
            $multimedia->appendChild($dom->createElement('type', 'photo'));
            $multimedia->appendChild($dom->createElement('path', $photo['path']));
            $memory->appendChild($multimedia);
        } else if($video = $result3->fetch_assoc()){
            $multimedia = $dom->createElement('multimedia_element');
            $multimedia->appendChild($dom->createElement('type', 'video'));
            $multimedia->appendChild($dom->createElement('path', $video['path']));
            $memory->appendChild($multimedia);
        }else{
            $multimedia = $dom->createElement('multimedia_element');
            $multimedia->appendChild($dom->createElement('type', 'none'));
            $memory->appendChild($multimedia);
        }

        $root->appendChild($memory);
    }

    if ($ok == false) {
        $error = $dom->createElement('error', 'no memories');
        $root->appendChild($error);
    }

    // Get the XML content as a string
    $xmlContent = $dom->saveXML();

    // $filePath = 'file.xml';
    // file_put_contents($filePath, $xmlContent);

    return $xmlContent;
}
