<?php

function login()
{
    $is_invalid = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["user_mail"];
        $password = $_POST["user_password"];
        $data = [
            "email" => $email,
            "password" => $password
        ];

        $url = 'http://localhost/Web-Tech-Project/services/login/authentificated_users';

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
        $is_invalid = json_decode($response, true);

        if ($is_invalid == false) {
            $mysqli = databaseConnection();
            $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $stmt->close();
            setcookie("In_God_We_Trust", $user["uid"], time() + (30 * 24 * 60 * 60), '/');
            $stmt = $mysqli->prepare("SELECT * FROM children WHERE uid = ?");
            $stmt->bind_param("s", $user["uid"]);
            $stmt->execute();
            $result = $stmt->get_result();
            $children = $result->fetch_assoc();
            $stmt->close();

            if ($children) {
                setcookie("Child_Picker", $children["cid"], time() + (30 * 24 * 60 * 60), '/');
            } else {
                setcookie("Child_Picker", "nothing", time() + (30 * 24 * 60 * 60), '/');
            }
            header('Location: HomePage.php');
            exit;
        }

    }

    return $is_invalid;
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