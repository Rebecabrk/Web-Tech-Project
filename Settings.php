<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Settings Page</title>
    <link href="css/Settings.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="pages">
        <div id="first_screen" class="full_screen padding">
            <div class="card-container">
                <div class="left-side">
                    <a href="#" class="card content">
                        <i class='bx bx-cog'></i>
                        <h1>Basic Settings</h1>
                    </a>
                    <a href="Profile.php" class="card content">
                        <i class="bx bx-user"></i>
                        <h1>Profile Settings</h1>
                    </a>
                </div>
                <div class="right-side">
                    <a href="#" class="card content">
                        <i class='bx bx-envelope'></i>
                        <h1>Email Notifications</h1>
                    </a>
                    <a href="#" class="card content">
                        <i class='bx bx-message-add'></i>
                        <h1>Feedback</h1>
                    </a>
                </div>
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
            <li>
                <a href="About.php">
                    <i class='bx bx-smile'></i>
                    <span class="links_name">About Us</span>
                </a>
                <span class="tooltip">About Us</span>
            </li>
            <li>
                <a href="Documentation.php">
                    <i class='bx bxs-file-doc'></i>
                    <span class="links_name">Documentation</span>
                </a>
                <span class="tooltip">Documentation</span>
            </li>
        </ul>
    </div>

    <script src="components\SideNavBar\SideNavBar.js"></script>
</body>

</html>