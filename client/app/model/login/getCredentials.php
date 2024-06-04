<?php

function getCredentials()
{
    if (isset($_POST['username']) && isset($_POST['password'])) {
        return [$_POST['username'], $_POST['password']];
    }
    return null; 
}
