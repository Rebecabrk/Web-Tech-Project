<?php 

function getXML($user_id){

    $url = 'http://localhost/Web-Tech-Project/services/xml/' . $user_id;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    if ($response === false) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        die('Error occurred while posting data: ' . $error_msg);
    }

    curl_close($ch);

    return $response;
}