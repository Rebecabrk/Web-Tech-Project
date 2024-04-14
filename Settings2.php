<?php

$settings_checkbox = [
    'basic' => "
        html{
            background-image: url('css/background_images/pexels-engin-akyurt-2084254.jpg');
            background-size: cover;
        }
    ",
    'email' => "
        html{
            background-image: url('css/background_images/pexels-pixabay-255514.jpg');
            background-size: cover;
        }
    ",
    'feedback' => "
        html{
            background-image: url('css/background_images/pexels-magda-ehlers-1319572.jpg');
            background-size: cover;
        }
    ",
    'default' => 'background: linear-gradient(60deg, #abecd6 25%, #fbed96 25%, #fbed96 50%, #abecd6 50%, #abecd6 75%, #fbed96 75%, #fbed96)'
];

$settingsName = $_GET['setting'] ?? 'default';
switch ($settingsName) {
    case 'basic':
        $title = 'Basic Settings';
        break;
    case 'email':
        $title = 'Email Settings';
        break;
    case 'feedback':
        $title = 'Feedback';
        break;
    default:
        $title = 'Default text';
}

$containers = $settings_checkbox[$settingsName] ?? $settings_checkbox['default'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="css/Settings2.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings2</title>
    <style>
        <?php echo $containers;
        ?>
        ;
    </style>
</head>

<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
    </div>
</body>

</html>