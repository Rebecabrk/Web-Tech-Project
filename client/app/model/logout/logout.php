<?php
function logout($mysqli) {
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

setcookie("In_God_We_Trust", "", time() - 3600, '/');
setcookie("Child_Picker", "", time() - 3600, '/');

header("Location: HomePage.php");
exit;
}