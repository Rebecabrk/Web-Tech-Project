<?php

// function getChecked() {
//     return isset($_SESSION['emailOptIn']) && $_SESSION['emailOptIn'];
// }
// function getCheckedForChild() {
//     return isset($_SESSION['emailOptInForChild']) && $_SESSION['emailOptInForChild'];
// }

function getChecked() {
    return isset($_POST['emailSwitch']) && $_POST['emailSwitch'];
}
function getCheckedForChild() {
    return isset($_POST['emailOptInForChild']) && $_POST['emailOptInForChild'];
}
?>


    <!-- 
    <?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION['emailOptIn'] = isset($_POST['emailSwitch']);
        $_SESSION['emailOptInForChild'] = isset($_POST['emailSwitchForChild']);
    }

    $isChecked = isset($_SESSION['emailOptIn']) && $_SESSION['emailOptIn'];
    $isCheckedForChild = isset($_SESSION['emailOptInForChild']) && $_SESSION['emailOptInForChild'];
    ?>
    -->