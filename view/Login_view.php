<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <link href="../view/css/Login.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="background">
        <div class="overlay">
            <div class="wrapper">
                <form method="POST">
                    <h1>Connect</h1>
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