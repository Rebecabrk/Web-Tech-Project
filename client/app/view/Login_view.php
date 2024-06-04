<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="../../public/css/GeneralLayout.css" rel="stylesheet">
    <link href="../../public/css/Login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body onLoad="document.getElementById('go_back_btn').classList.add('hidden_btn');">
    <div class="background">
        <div class="overlay">
            <div class="wrapper_form" id="max_height_login">
                <form method="POST">
                    <h2>Connect</h2>
                    <hr>
                    <div class="column-container input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="user_mail" placeholder="Email" required
                            value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" />
                    </div>
                    <div class="column-container input-box">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" id="password" name="user_password" placeholder="Password" required />
                    </div>
                    <hr>
                    <a class="button">
                        <button type="submit">Login</button>
                    </a>
                </form>
            </div>
            <div>
                <?php if($is_invalid): ?>
                <em class="invalid_msg">Invalid login</em>
                <?php else: ?>
        <?php endif; ?>
            </div>
            <h3>
                Don't have an account?
                <a href="SignUp.php">Signup</a>
            </h3>
        </div>
        <div id="text">
            One step closer to building your child's bright future!
        </div>
    </div>
</body>

</html>