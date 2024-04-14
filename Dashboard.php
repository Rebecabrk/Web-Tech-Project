<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Page</title>
    <link href="css/Dashboard.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="pages">
        <div id="first_screen" class="padding">
            <h1>Schedules</h1>
            <div class="card-container">
                <div class="card card1">
                    <h1 class="gradient-text">
                        Mediaction
                    </h1>
                </div>
                <div class="card card2">
                    <h1 class="gradient-text">
                        Food
                    </h1>
                </div>
                <div class="card card3">
                    <h1 class="gradient-text">
                        Sleep
                    </h1>
                </div>
                <div class="card card5">
                    <h1 class="gradient-text">
                        School
                    </h1>
                </div>
            </div>

            <hr>

            <h1>Medical records</h1>
            <div class="card-container">
                <div class="card card1">
                    <h1 class="gradient-text">
                        Accidents
                    </h1>
                </div>
                <div class="card card2">
                    <h1 class="gradient-text">
                        Alergies
                    </h1>
                </div>
                <div class="card card1">
                    <h1 class="gradient-text">
                        Diseares
                    </h1>
                </div>
            </div>

            <hr>
            
            <h1>Activities/Memories</h1>
            <div class="card-container">
                <div class="big_card card4">
                    <h1 class="gradient-text">
                        Everything
                    </h1>
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