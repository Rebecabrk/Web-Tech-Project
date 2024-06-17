<?php 

function getXML($user_id){

    $data = [
        "user_id" => $user_id
    ];

    $url = 'http://localhost/Web-Tech-Project/services/xml/xml-request';

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
    $xml = json_decode($response, true);

    return $xml;
}