<?php

function alterMemory($memory_id, $text, $isCoreMemory)
{
    $mysqli = databaseConnection();

    $last_mod = date('Y-m-d H:i:s');

    $sql = "UPDATE memories SET text = ?, isCoreMemory = ?, last_modification = ? WHERE id = ?";

    if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ssss", $text, $isCoreMemory, $last_mod, $memory_id);

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

    $videos = $dom->getElementsByTagName('video');
    $video_srcs = array();

    foreach ($imgs as $img) {
        $srcs[] = $img->getAttribute('src');
    }

    foreach ($videos as $vid) {
        $video_srcs[] = $vid->getAttribute('src');
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

    foreach ($video_srcs as $vid_src) {
        $last_id = mysqli_insert_id($mysqli);
        $sql = "UPDATE videos_paths SET path = ? WHERE memory_id = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $vid_src, $memory_id);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage() . " " . $e->getCode());
        }
    }

    return "Success";
}
