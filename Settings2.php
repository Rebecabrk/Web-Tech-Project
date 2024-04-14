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
        $formBox = '<input type="text" id="first_name" name="user_first_name" placeholder="Change your first name here" required />
        <input type="text" id="last_name" name="user_last_name" placeholder="Change your last name here" required />
        <input type="text" id="child_name" name="child_name" placeholder="Change your child\'s name here" required />
        ';
        break;
    case 'email':
        $title = 'Email Settings';
        $formBox = '<input type="email" id="mail" name="user_mail" placeholder="Enter new email" required />';
        break;
    case 'feedback':
        $title = 'Feedback';
        $formBox = '<textarea type="text" id="text" name="text" rows="10" cols="50" placeholder="Please enter your thoughts about our site..."></textarea>';
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
        <form action="SettingsConfirmation.php" method="get">
            <?php echo $formBox; ?>
        </form>
    </div>
</body>

</html>