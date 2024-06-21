<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>The Journey Page</title>
    <link href="../../public/css/Journey.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../public/js/Journey.js" defer></script>
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <button class="fixed-button" onclick="postXMLRequestForExport();">Export Data</button>
        <div class="container padding">
            <?php if ($xml !== false) { ?>
                <h1>Your family's timeline</h1>
                <section class="timeline">
                    <?php foreach ($xml->children() as $element): ?>
                        <div class="timeline-item">
                            <div class="timeline-img"></div>
                            <?php if ($element->photo != "empty"): ?>
                                <div class="timeline-content timeline-card">
                                    <div class="timeline-img-header">
                                        <h2><?= htmlspecialchars($element->title) ?></h2>
                                        <img class="image" src="<?= htmlspecialchars($element->photo) ?>"  alt="Image description" />
                                    </div>
                                    <div class="date"><?= htmlspecialchars($element->creation_date) ?></div>
                                    <p><?= htmlspecialchars($element->description) ?></p>
                                    <a href="<?= htmlspecialchars($element->link) ?>">More</a>
                                </div>
                                <?php else: ?>
                                    <div class="timeline-content">
                                        <h2><?= htmlspecialchars($element->title) ?></h2>
                                        <div class="date"><?= htmlspecialchars($element->creation_date) ?></div>
                                        <p><?= htmlspecialchars( mb_strimwidth(strip_tags($element->text), 0, 70) ) . '...'?></p>
                                        <a>More</a>
                                        <!-- onclick="callTextEditorService(<?= $element->id ?>, '<?= $element->pattern ?>');" -->
                                    </div>
                                    
                                <?php endif; ?>
                                </div>
                        <?php endforeach; ?>
                    <?php } else { ?>
                        <div class="no-memories">
                            <h1>Your family's timeline</h1>
                            <div class="banner-no-memories">
                                No core memories yet. Go to <a href="Journal.php">Journal</a> to add
                                new memories now!<br> Don't forget to check the core memory checkbox.
                            </div>
                        </div>
                        
                    <?php } ?>


                    <!-- <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <h2>The First Word</h2>
                        <div class="date">13 APRIL 2024</div>
                        <p>Mama</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header img1">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Smiley.svg/640px-Smiley.svg.png"/>
                            <h2>The First Steps</h2>
                        </div>
                        <div class="date">13 APRIL 2024</div>
                        <p>We are the luckiest parents!</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <div class="date">13 APRIL 2024</div>
                        <h2>First Time Eating French Fries</h2>
                        <p>A memory I never want to forget!</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <h2>Walk in the park</h2>
                        <div class="date">13 APRIL 2024</div>
                        <p>We had a great time!</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header img2">
                            <h2>First Day of Kindergarden</h2>
                        </div>
                        <div class="date">13 APRIL 2024</div>
                        <p>It was a perfectly sunny day...</p>
                        <a>More</a>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <div class="date">13 APRIL 2024</div>
                        <h2>The bicycle</h2>
                        <p>Today we bought the first bike for our child.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header img3">
                            <h2>The First Sleepover</h2>
                        </div>
                        <div class="date">30 JULY 2016</div>
                        <p>We organized the first sleepover and we prepared for this event a whole week!</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content timeline-card">
                        <div class="timeline-img-header img4">
                            <h2>First Exam</h2>
                        </div>
                        <div class="date">13 APRIL 2024</div>
                        <p>That's life... What can we do about it?</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <h2>Family Reunion</h2>
                        <div class="date">13 APRIL 2024</div>
                        <p>The sun was just beginning to dip below the horizon, casting a warm golden glow over
                            the beach as our family gathered for their annual reunion. I watched as
                            my cousins constructed a lopsided sandcastle.</p>
                        <a>More</a>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="timeline-content">
                        <h2>Walk in the park</h2>
                        <div class="date">13 APRIL 2024</div>
                        <p>We had a great time!</p>
                        <a>More</a>
                    </div>
                </div> -->
                    <?php if ($xml !== false) { ?>
                </section>
            <?php } ?>
        </div>
    </div>
</body>

</html>