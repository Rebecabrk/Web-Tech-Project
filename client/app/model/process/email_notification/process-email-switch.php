<?php

function getChecked() {
    return isset($_POST['emailSwitch']) && $_POST['emailSwitch'];
}
function getCheckedForChild() {
    return isset($_POST['emailOptInForChild']) && $_POST['emailOptInForChild'];
}
?>