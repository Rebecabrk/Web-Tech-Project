<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Gallery Page</title>
    <link href="../../public/css/Gallery.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../view/components/Popup/Popup.js"></script>
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages">
        <div class="padding">
                <?php
                if (strpos($multimediaXML, "error") !== false) {
                    echo '<div class="no-memories">';
                        echo '<h1>Your family\'s gallery</h1>';
                        echo '<div class="banner-no-memories">';
                        echo 'No photos yet. Go to <a href="Journal.php">Journal</a> to add ';
                        echo 'new memories with photos now!';
                        echo '</div>';
                    echo '</div>';
                }
                else {
                echo '<div class="card-container">';
                $xml = simplexml_load_string($multimediaXML);
                foreach ($xml->children() as $element) {
                    echo '<div class="big-card">';
                    echo '<img src="' . $element->path . '" alt="Image description" />';
                    echo '</div>';
                }
                echo '</div>';
            }
            ?>
        </div>
</body>

</html>