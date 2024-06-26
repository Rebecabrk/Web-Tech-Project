<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="../../public/css/Profile.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onLoad="document.getElementById('go_back_btn').classList.add('hidden_btn');">
    <div class="pages" >
        <div id="first_screen" class="full_screen padding">
            <a href="Logout.php" class="fixed-button">Log Out</a>
            <a href="DeleteAccount.php" class="fixed-button another">Delete Account</a>

            <div class="wrapper">
                <div class="image image1"></div>
                <form method="POST" action="../model/process/process-profile-edit.php">
                    <h1>Your Data</h1>
                    <hr>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="first_name" name="user_first_name" placeholder="First Name" />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="user_mail" placeholder="Email" />
                    </div>
                    <hr>
                    <div class="button">
                        <button type="submit">Update</button>
                    </div>
                </form>
            </div>
            <div class="arrow">
                <span></span>
            </div>
        </div>

        <div id="second_screen" class="full_screen padding">
            <div class="wrapper">
                <form action="../model/process/process-child-profile-edit.php" method="POST">
                    <div class="image image2"></div>
                    <h1>Your Child Data</h1>
                    <hr>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="first_name" name="child_first_name" placeholder="First Name" />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="child_mail" placeholder="Email" />
                    </div>
                    <hr>
                    <div class="button">
                        <button type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>