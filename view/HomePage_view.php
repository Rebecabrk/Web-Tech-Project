<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Home Page</title>
    <link href="../view/css/HomePage.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


<body class="light-mode">
    <div class="pages">
        <div id="first_screen" class="full_screen">
            <div class="wrapper">
                <div class="hello_msg">
                    <?php if ($connected_user) {?>
                    <h3 class="tracking-in-expand">Hello <?= htmlspecialchars($user["last_name"]) ?></h3>
                    <?php if ($_COOKIE["Child_Picker"]==="nothing") {?>
                    <p class="tracking-in-expand"> Add Your Children
                        <button class="add-btn transparent" onClick="openPopup();">here</button>
                    </p>
                    <?php } else {?>
                    <p class="tracking-in-expand"> </p>
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
                <div class="arrow">
                    <span></span>
                </div>
            </div>
        </div>

        <div id="second_screen" class="full_screen padding">
            <h1>Some relevant news</h1>
            <div class="rss-container">
                <div class="rss-card">
                    <h2>Mental Health Topic</h2>
                    <?php
                    define ('FEED1', 'https://pregnantchicken.com/mental-health/rss/'); 
                    define ('XPATH', '/rss/channel/item');  

                    try {
                    $dom = new DomDocument();
                    $dom->load (FEED1); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPATH);
                    foreach ($items as $news) {
                        // preluăm titlul fiecărei știri
                        echo '<br> <p><a href=' . $news->getElementsByTagname('link')->item(0)->nodeValue . '>' .
                        $news->getElementsByTagname('title')->item(0)->nodeValue . 
                        '</a></p> <br>';
                    } 
                    }
                    catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                    }
                    ?>
                </div>
                <br>
                <br>
                <div class="rss-card">
                    <h2>Sleep Topic</h2>
                    <?php
                    define ('FEED2', 'https://pregnantchicken.com/sleep/rss/'); 
                    define ('XPAT2', '/rss/channel/item');  

                    try {
                    $dom = new DomDocument();
                    $dom->load (FEED2); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPAT2);
                    foreach ($items as $news) {
                        // preluăm titlul fiecărei știri
                        echo '<br> <p><a href=' . $news->getElementsByTagname('link')->item(0)->nodeValue . '>' .
                        $news->getElementsByTagname('title')->item(0)->nodeValue . 
                        '</a></p> <br>';
                    }
                    }
                    catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                    }
                    ?>
                </div>
                <br>
                <br>
                <div class="rss-card">
                    <h2>Symptoms And Aliments</h2>
                    <?php
                    define ('FEED3', 'https://pregnantchicken.com/symptoms-and-ailments/rss/'); 
                    define ('XPAT3', '/rss/channel/item');  

                    try {
                    $dom = new DomDocument();
                    $dom->load (FEED3); // încărcăm documentul XML
                    $xpath = new DOMXpath($dom);
                    // baleiăm însemnările (aici, elementele <item>) 
                    $items = $xpath->query (XPAT3);
                    foreach ($items as $news) {
                        // preluăm titlul fiecărei știri
                        echo '<br> <p><a href=' . $news->getElementsByTagname('link')->item(0)->nodeValue . '>' .
                        $news->getElementsByTagname('title')->item(0)->nodeValue . '</a></p> <br>';
                    }
                    }
                    catch (RuntimeException $e) { 
                    echo $e->getMessage (); 
                    }
                    ?>
                </div>
            </div>
        </div>

        <div id="third_screen" class="full_screen padding">

        </div>
    </div>

    <a class="theme_btn_container" id="theme_btn"> LightMode </a>
    <script src="../view/components/ThemeButton/ThemeButton.js"></script>
</body>

</html>