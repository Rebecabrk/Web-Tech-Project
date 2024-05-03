<!DOCTYPE html>
<html>

<head>
    <title>Home Page</title>
    <link href="../view/css/HomePage.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="light-mode">
    <div class="pages">
        <div id="first_screen" class="full_screen">
            <div class="wrapper">
                <div class="hello_msg">
                    <!-- <?php
                    if ($connected_user)
                        echo "You are connected with " . $user["email"] . " email!";
                    else
                        echo "You are not connected!";
                    ?> -->
                    <?php if ($connected_user): ?>
                    <p class="tracking-in-expand">Hello <?= htmlspecialchars($user["last_name"]) ?></p>
                    <?php endif; ?>
                </div>
                <h1 class="tracking-in-expand">
                    Your child's growth
                </h1>
                <div class="buttons-container">
                    <?php if ($connected_user): ?>
                    <nav>
                        <ul>
                            <a href="#second_screen" class="lm_btn">
                                <li>
                                    Let's explore!
                                    <span></span><span></span><span></span><span></span>
                                </li>
                            </a>
                        </ul>
                    </nav>
                    <?php else: ?>
                    <nav>
                        <ul>
                            <a href="#second_screen" class="lm_btn">
                                <li>
                                    Learn more
                                    <span></span><span></span><span></span><span></span>
                                </li>
                            </a>
                        </ul>
                    </nav>
                    <nav>
                        <ul>
                            <a href="SignUp.php" class="ca_btn">
                                <li>
                                    Create account
                                    <span></span><span></span><span></span><span></span>
                                </li>
                            </a>
                        </ul>
                    </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div id="second_screen" class="full_screen padding">
            <div class="row">
                <div class="title-container">
                    <h1>The manager</h1>
                    <p>
                        Empowering Parents. Nurturing Children. </br> Collecting Memories. Building Futures.
                    </p>
                </div>
                <div class="card-container">
                    <div class="card card1">
                        <h3>Empowering Parents</h3>
                        <p>Helping parents keep track of food and sleep schedules of their children through just a
                            click.</p>
                    </div>
                    <div class="card card2">
                        <h3>Nurturing Children</h3>
                        <p>The children will benefit from the parents' better organization, because this way parents
                            will have
                            more
                            time for family time.</p>
                    </div>
                    <div class="card card3">
                        <h3>Collecting Memories</h3>
                        <p>A great way to store and visualize all beautiful memories made throughout the children's
                            development
                            process.</p>
                    </div>
                    <div class="card card4">
                        <h3>Building Futures</h3>
                        <p>Creating an organized way of keeping track of all the information about the children,
                            such that ...</p>
                    </div>
                </div>
            </div>

            <div class="arrow">
                <span></span>
            </div>
        </div>

        <div id="third_screen" class="full_screen padding">
            <div class="third_screen_container">
                <div class="center_element">
                    <div class="wrapper2">
                        <p class="content_paragraph">Early childhood, from birth to age 5, is a critical period for
                            brain
                            development.
                            Stimulating environments and nurturing interactions during this time can have a
                            significant impact on a
                            child's cognitive, social, and emotional development.</p>
                        <div class="card card5"></div>
                    </div>

                    <div class="wrapper2">
                        <div class="card card6"></div>
                        <p class="content_paragraph">Play is essential for children's learning and development. It
                            helps them
                            develop
                            important skills such as problem-solving, creativity, communication, and socialization.
                            Through play,
                            children explore the world around them and make sense of their experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <a class="theme_btn_container" id="theme_btn"> LightMode </a>
    <script src="../view/components/ThemeButton/ThemeButton.js"></script>



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
                <?php
                    if ($connected_user)
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
                    if ($connected_user)
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
                    if ($connected_user)
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
                    if ($connected_user)
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
                    if ($connected_user)
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
                    if ($connected_user)
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
                    if ($connected_user)
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
    <script src="../view/components/SideNavBar/SideNavBar.js"></script>

</body>

</html>