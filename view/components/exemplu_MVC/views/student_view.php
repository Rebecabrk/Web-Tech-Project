<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Studentilor</title>
</head>

<body>
    <p>
        Lista conturilor din baza da date:
    </p>
    <ol>
        <?php
        $output = '';
        foreach ($result as $element) {
            $output = $output . '<li>'. $element['name'] . ' ' . $element['password'] . '</li>';
        }
        echo $output;
        ?>
    </ol>
</body>

</html>