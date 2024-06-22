<?php

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

function signup($first_name, $last_name, $email, $password){
    $mysqpli = databaseConnection();
    
    $sql = "INSERT INTO users (first_name, last_name, email, password_hash) VALUES (?, ?, ?, ?)";
    $stmt = $mysqpli->prepare($sql);
    $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);
    
    try {
        $stmt->execute();
        $response = [
            "message" => "Succes"
        ];
    } catch (Exception $e) {
        if( $e->getCode() === 1062) {
            // die("Email already in use");
            $response = [
                "message" => "Email already in use"
            ];
        } else {
             die($e->getMessage(). " " . $e->getCode() . $password_hash . $email
                 . $first_name . $last_name . $email . $password);
             
            $response = [
                "message" => "Error"
            ];
        }
    } 

    $mysqpli->close();

    return $response;
}