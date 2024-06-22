<?php

function validate($data)
{
    if (strlen($data) < 8) {
        die("Password must be at least 8 characters long");
    }
    if ($data !== $_POST["user_password_repeat"]) {
        die("Passwords do not match");
    }
    if ( ! preg_match("/[a-z]/i", $data) || ! preg_match("/[A-Z]/i", $data) ){
        die("Password must contain at least one letter");
    }
    if ( ! preg_match("/[0-9]/", $data) ) {
        die("Password must contain at least one digit");
    }
}
function signup($first_name, $last_name, $email, $password)
{
    validate($password);
    $password_hash = password_hash($_POST["user_password"], PASSWORD_DEFAULT);

    $url = 'http://localhost/Web-Tech-Project/services/signup/accounts';

    $data = [
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "password" => $password_hash
    ];

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data)); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        $response = curl_exec($ch);

        if ($response === false) {
            $error_msg = curl_error($ch);
            curl_close($ch);
            die('Error occurred while posting data: ' . $error_msg);
        }

        curl_close($ch);
        $is_valid = json_decode($response, true);
        echo $response;

        if($is_valid['message'] === "Succes") {
            header('Location: ../controller/Login.php');
            echo "what???";
            exit;
        } else {
            die($is_valid['message']);
            echo "what???";
        }
echo "what???";
}