<?php
function delete_account($mysqli) {
if($mysqli->connect_error){
    die("Connection failed: " . $mysqli->connect_error);
}

setcookie("In_God_We_Trust", "", time() - 3600, '/');
setcookie("Child_Picker", "", time() - 3600, '/');

$sql = "DELETE FROM users WHERE uid = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_COOKIE["In_God_We_Trust"]);
$stmt->execute();
$stmt->close();

header("Location: HomePage.php");
exit;
}