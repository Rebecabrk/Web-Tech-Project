<?php

require ("../model/user_acces/connected-user.php"); // here we are verifying if the user is connected

session_start();

$mysqli = require ("../model/user_acces/database.php");
$sql = "UPDATE user SET session_id = NULL WHERE session_id = '" . session_id() . "'";
$result = $mysqli->query($sql);

session_destroy(); //NOT WORKNING

header("Location: HomePage.php");
exit;