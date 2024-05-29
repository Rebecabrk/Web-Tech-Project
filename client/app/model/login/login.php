<?php

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function login($mysqli) {
    $is_invalid = false;

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $user_mail = validate($_POST["user_mail"]);
        $user_password = validate($_POST["user_password"]);

        $stmt = $mysqli->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $user_mail);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        $stmt->close();

        if ($user && password_verify($user_password, $user["password_hash"])) {
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

            header("Location: HomePage.php");
            exit;
        } else {
            $is_invalid = true;
        }
    }

    return $is_invalid;
}