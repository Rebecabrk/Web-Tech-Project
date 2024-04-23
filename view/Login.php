<?php

require __DIR__ . "/user_acces/connected-user.php"; // here we are verifying if the user is connected

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/user_acces/database.php";
    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $mysqli->real_escape_string($_POST["user_mail"]));
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    if($user) {
        if(password_verify($_POST["user_password"], $user["password_hash"])) {

            session_start();

            session_regenerate_id();

            $sql = sprintf("UPDATE user SET session_id = '" . session_id() . "' WHERE email = '" . $_POST["user_mail"] . "'");
            $result = $mysqli->query($sql);

            header("Location: HomePage.php");
            exit;
        }
    }
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="css/Login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="background">
        <div class="overlay">
            <div class="wrapper">
                <form method="post">
                    <h1>Connect</h1>
                    <hr>
                    <div class="column-container input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="user_mail" placeholder="Email" required
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" /> <!--  TODO: SOMETHING WRONG -->
                    </div>
                    <div class="column-container input-box">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" id="password" name="user_password" placeholder="Password" required />
                    </div>
                    <hr>
                    <a class="button" href="process-signup.php">
                        <button type="submit">Login</button>
                    </a>
                </form>
            </div>
            <div>
                <?php if($is_invalid): ?>
                <em class="invalid_msg">Invalid login</em>
                <?php endif; ?>
            </div>
        </div>
        <div id="text">
            One step closer to building your child's bright future!
        </div>
    </div>
</body>

</html>