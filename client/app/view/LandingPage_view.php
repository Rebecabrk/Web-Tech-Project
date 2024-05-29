<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Landing Page</title>
    <link href="../../public/css/LandingPage.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body class="light-mode">
    <div class="pages">
        <div id="first_screen" class="full_screen">
            <div class="wrapper">
                <div class="hello_msg">
                    <?php if ($connected_user) {?>
                    <h2 class="tracking-in-expand">Hello <?= htmlspecialchars($user["last_name"]) ?></h2>
                    <?php if ($_COOKIE["Child_Picker"]==="nothing") {?>
                    <p class="tracking-in-expand"> Add Your Children
                        <button class="add-btn transparent" onClick="openPopup();">here</button>
                    </p>
                    <?php } else {?>
                    <p class="tracking-in-expand">  </p>
                    <?php }?>
                    <?php }?>
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
                        Empowering Parents. Nurturing Children. <br> Collecting Memories. Building Futures.
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
</body>

</html>