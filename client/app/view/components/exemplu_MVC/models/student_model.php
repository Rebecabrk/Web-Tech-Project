<?php

function getAcountsList(){
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
    
    $output = array();
    while ($inreg = $rez->fetch_assoc()) {
        $output[] =  $inreg;
    }
    
    $mysql->close();
    return $output;
}