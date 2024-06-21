<?php

function alterMemory($memory_id, $text, $isCoreMemory)
{
    $mysqli = databaseConnection();
    $sql = "UPDATE memories SET text = ?, isCoreMemory = ? WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("sss", $text, $isCoreMemory, $memory_id);

        if ($stmt->execute()) {
            $stmt->close();

        } else {
            $stmt->close();
            return "Error: " . $stmt->error;
        }
    } else {
        return "Error: " . $mysqli->error;
    }

    $dom = new DOMDocument;
    @$dom->loadHTML($text);

    $imgs = $dom->getElementsByTagName('img');
    $srcs = array();

    foreach ($imgs as $img) {
        $srcs[] = $img->getAttribute('src');
    }

    foreach ($srcs as $src) {
        $sql = "UPDATE images_paths SET path = ? WHERE memory_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $src, $memory_id);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage() . " " . $e->getCode());
        }
    }
    return "Success";
}
