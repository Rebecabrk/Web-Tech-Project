<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="../view/css/Profile.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="full_screen padding">
            <div class="wrapper">
                <div class="image image1"></div>
                <form action="process.php" method="POST">
                    <h1>Your Data</h1>
                    <hr>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="first_name" name="user_first_name" placeholder="First Name" required />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" required />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-envelope'></i>
                        <input type="email" id="mail" name="user_mail" placeholder="Email" required />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-lock-alt'></i>
                        <input type="password" id="password" name="user_password" placeholder="Password" required />
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
                <form action="process.php" method="POST">
                    <div class="image image2"></div>
                    <h1>First Child Data</h1>
                    <hr>
                    <div class="input-box">
                        <i class='bx bx-user-circle'></i>
                        <input type="text" id="last_name" name="user_last_name" placeholder="Last Name" required />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-timer'></i>
                        <input type="text" id="schedules" name="user_schedules" placeholder="Schedules" required />
                    </div>
                    <div class="input-box">
                        <i class='bx bx-plus-medical'></i>
                        <input type="text" id="medical-record" name="user_mr" placeholder="New Medical Record"
                            required />
                    </div>
                    <hr>
                    <div class="button">
                        <button type="submit">Update</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="third_screen" class="full_screen padding">
            <div class="pie-chart-container">
                Do you have another child?
            </div>
        </div>
    </div>
</body>

</html>