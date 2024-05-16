<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Account Page</title>
    <link href="../view/css/GeneralLayout.css" rel="stylesheet">
    <link href="../view/css/SignUp.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body onLoad="document.getElementById('go_back_btn').classList.add('hidden_btn');">
    <div class="background">
        <div class="overlay">
            <div class="wrapper_form" id="max_height_signup">
                <form action="..\model\process\process-signup.php" method="POST">
                    <h2>Create Account</h2>
                    <hr>
                    <div class="column-container input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="first_name" name="user_first_name" placeholder="First Name" required />
                        <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" required />
                    </div>
                    <div class="column-container input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="user_mail" placeholder="Email" required />
                    </div>
                    <div class="column-container input-box">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" id="password" name="user_password" placeholder="Password" required />
                        <input type="password" id="password_repeat" name="user_password_repeat" placeholder="Repeat P."
                            required />
                    </div>
                    <hr>
                    <a class="button" href="..\model\process\process-signup.php" name="signup_btn">
                        <button type="submit">Submit</button>
                    </a>
                </form>
            </div>
            <h3>
                Already have an account?
                <a href="Login.php">Login</a>
            </h3>
        </div>
        <div id="text">
            One step closer to building your child's bright future!
        </div>
    </div>
</body>

</html>