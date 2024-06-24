<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="../../public/css/Settings2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings2</title>
    <style>
        <?php $background = $info[0];
        echo $background;
        ?>
        ;
    </style>
</head>

<body>
    <div class="container">
        <h1><?php
        $title = $info[1];
        echo $title;
        ?>
        </h1>
        <form action="../model/process/process-settings-confirmation.php" method="POST">
            <?php
            $formBox = $info[2];
            echo $formBox;
            ?>
            <button type="submit" class="submit-btn-email">Submit</button>
        </form>
    </div>
</body>

</html>