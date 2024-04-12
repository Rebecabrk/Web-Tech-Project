<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Profile Page</title>
    <link href="css/Profile.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="pages">
        <div id="first_screen" class="full_screen padding">
            <div class="wrapper">
                <form action="process.php" method="get">
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
        </div>

        <div id="second_screen" class="full_screen padding">
            <div class="wrapper">
                <form action="process.php" method="get">
                    <h1>First Child Data</h1>
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
        </div>
    </div>


    <div class="sidebar" id="sidebar">
        <div class="logo-details">
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="HomePage.php">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="Dashboard.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="Profile.php">
                    <i class="bx bx-user"></i>
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="Journal.php">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="links_name">Journal</span>
                </a>
                <span class="tooltip">Journal</span>
            </li>
            <li>
                <a href="Journey.php">
                    <i class="bx bx-heart"></i>
                    <span class="links_name">The Journey</span>
                </a>
                <span class="tooltip">The Journey</span>
            </li>
            <li>
                <a href="Settings.php">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
        </ul>
    </div>

    <script src="components\SideNavBar\SideNavBar.js"></script>
</body>

</html>