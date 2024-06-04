<?php

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function databaseConnection()
{
    $host = "localhost";
    $dbname = "chim";
    $username = "root";
    $password = "";

    $mysqpli = new mysqli($host, $username, $password, $dbname);

    if ($mysqpli->connect_error) {
        die("Connection failed: " . $mysqpli->connect_error);
    }

    return $mysqpli;
}

function login($email, $password)
{
    $mysqli = databaseConnection();
    $is_invalid = false;

    $user_mail = validate($email);
    $user_password = validate($password);

    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $user_mail);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    $stmt->close();

    if ($user && password_verify($user_password, $user["password_hash"])) {
        $is_invalid = false;
    } else {
        $is_invalid = true;
    }

    return $is_invalid;
}