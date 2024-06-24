<?php
$mysqli = require ("..\..\database\database.php");

function sendEmailNotification($to, $subject, $message) {
    $headers = "From: no-reply@example.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if(mail($to, $subject, $message, $headers)) {
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uid = isset($_COOKIE['In_God_We_Trust']) ? $mysqli->real_escape_string($_COOKIE['In_God_We_Trust']) : null;
    $cid = isset($_COOKIE['Child_Picker']) ? $mysqli->real_escape_string($_COOKIE['Child_Picker']) : null;
    
    if ($uid) {
        $emailSwitch = isset($_POST['emailSwitch']) ? 1 : 0;
        $sql = "UPDATE users SET email_notification = ? WHERE uid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("is", $emailSwitch, $uid);
        $stmt->execute();

        // Send email notification to user
        if ($emailSwitch) {
            $userEmail = "marius.alexandru.olaru@gmail.com"; // Retrieve user email from database
            $subject = "Email Notifications Enabled";
            $message = "<p>You have enabled email notifications.</p>";
            sendEmailNotification($userEmail, $subject, $message);
        } else {
            $userEmail = "marius.alexandru.olaru@gmail.com"; // Retrieve user email from database
            $subject = "Email Notifications Disabled";
            $message = "<p>You have disabled email notifications.</p>";
            sendEmailNotification($userEmail, $subject, $message);
        }
    }

    if ($cid) {
        $emailSwitchForChild = isset($_POST['emailSwitchForChild']) ? 1 : 0;
        $sql = "UPDATE children SET email_notification = ? WHERE cid = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("is", $emailSwitchForChild, $cid);
        $stmt->execute();

        // Send email notification to parent about child
        if ($emailSwitchForChild) {
            $parentEmail = "parent@example.com"; // Retrieve parent email from database
            $subject = "Child Email Notifications Enabled";
            $message = "<p>You have enabled email notifications for your child.</p>";
            sendEmailNotification($parentEmail, $subject, $message);
        } else {
            $parentEmail = "parent@example.com"; // Retrieve parent email from database
            $subject = "Child Email Notifications Disabled";
            $message = "<p>You have disabled email notifications for your child.</p>";
            sendEmailNotification($parentEmail, $subject, $message);
        }
    }

    header("Location: ../../../controller/Settings.php");
}
?>
