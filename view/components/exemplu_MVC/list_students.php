<?php

$mysql = new mysqli (
	'localhost', 
	'root',      
	'',    
	'students'  
	);

if (mysqli_connect_errno()) {
	die ('Conexiunea a esuat...');
}

if (!($rez = $mysql->query ('select name, password from accounts'))) 
	die ('Ceva e rau...');

$output = '<ol>';
while ($inreg = $rez->fetch_assoc()) {
	$output = $output . ('<li>Studentul ' . $inreg['name'] . 
		' are parola ' . $inreg['password'] . '</li>');
}
$output = $output . ('</ol>');

$mysql->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Studentilor</title>
</head>
<body>
    <?php
        echo $output;
    ?>
</body>
</html>