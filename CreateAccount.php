<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Create Account Page</title>
    <link href="css/CreateAccount.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="background">
        <div class="wrapper">
            <form action="process.php" method="get">
                <h1>Create Account</h1>
                <hr>
                <div class="column-container input-box">
                    <i class='bx bx-user-circle'></i>
                    <input type="text" id="first_name" name="user_first_name" placeholder="First Name" required />
                    <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" required />
                </div>
                <div class="input-box">
                    <i class='bx bx-envelope'></i>
                    <input type="email" id="mail" name="user_mail" placeholder="Email" required />
                </div>
                <div class="column-container input-box">
                    <i class='bx bx-lock-alt'></i>
                    <input type="password" id="password" name="user_password" placeholder="Password" required />
                    <input type="password" id="password_repeat" name="user_password_repeat" placeholder="Repeat P." required />
                </div>
                <hr>
                <div class="button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <div id="text">
            One step closer to building your child's bright future!
        </div>
    </div>
</body>

</html>