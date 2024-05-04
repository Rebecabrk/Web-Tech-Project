<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="../view/components/SideNavBar/SideNavBar.css" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../view/components/SideNavBar/SideNavBar.js"></script>
</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="logo-details" id="button" onClick="slideNavBar();">
            <i class="bx bx-menu"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search" onClick="slideSearch();"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "HomePage.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "Dashboard.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "Journal.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="links_name">Journal</span>
                </a>
                <span class="tooltip">Journal</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "Journey.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class="bx bx-heart"></i>
                    <span class="links_name">The Journey</span>
                </a>
                <span class="tooltip">The Journey</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "Settings.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "About.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class='bx bx-smile'></i>
                    <span class="links_name">About Us</span>
                </a>
                <span class="tooltip">About Us</span>
            </li>
            <li>
                <?php
                    if (isset($_COOKIE['In_God_We_Trust']))
                        $URL = "Documentation.php";
                    else
                        $URL = "Login.php";
                ?>
                <a href="<?php echo $URL; ?>">
                    <i class='bx bxs-file-doc'></i>
                    <span class="links_name">Documentation</span>
                </a>
                <span class="tooltip">Documentation</span>
            </li>
        </ul>
    </div>
</body>

</html>