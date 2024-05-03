<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Settings Page</title>
    <link href="../view/css/Settings.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="full_screen padding">
            <div class="card-container">
                <div class="left-side">
                    <a href="Settings2.php?setting=basic" class="card content">
                        <i class='bx bx-cog'></i>
                        <h1>Basic Settings</h1>
                    </a>
                    <a href="Profile.php" class="card content">
                        <i class="bx bx-user"></i>
                        <h1>Profile Settings</h1>
                    </a>
                </div>
                <div class="right-side">
                    <a href="Settings2.php?setting=email" class="card content">
                        <i class='bx bx-envelope'></i>
                        <h1>Email Notifications</h1>
                    </a>
                    <a href="Settings2.php?setting=feedback" class="card content">
                        <i class='bx bx-message-add'></i>
                        <h1>Feedback</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>