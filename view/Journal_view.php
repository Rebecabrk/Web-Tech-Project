<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Journal Page</title>
    <link href="../view/css/Journal.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="../view/js/Journal.js" defer></script> -->
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="full_screen">
            <div class="padding">
                <div class="center_wrapper">
                    <h1> Choose Template for Today's Thoughts: </h1>
                    <div class="wrapper">
                        <a href="TextEditor.php?pattern=pattern3">
                            <div class="item item3"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern5">
                            <div class="item item5"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern4">
                            <div class="item item4"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern7">
                            <div class="item item7"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern6">
                            <div class="item item6"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern8">
                            <div class="item item8"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern13">
                            <div class="item item13"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern9">
                            <div class="item item9"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern10">
                            <div class="item item10"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern2">
                            <div class="item item2"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern11">
                            <div class="item item11"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern12">
                            <div class="item item12"></div>
                        </a>
                        <a href="TextEditor.php?pattern=pattern1">
                            <div class="item item1"></div>
                        </a>
                    </div>
                </div>

                <hr>

                <div class="entry-div">
                    <h1>Your Entries:</h1>
                    <div id="recentEntries">
                        <?php foreach ($allMemories as $item): ?>
                            <div class="entry">
                                <a
                                    href="TextEditor.php?pattern=<?= htmlspecialchars($item['pattern']) ?>&memoryId=<?= htmlspecialchars($item['id']) ?>">
                                    <div class="entry_title"><?= htmlspecialchars($item['title']) ?></div>
                                    <div class="entry_content"><?= htmlspecialchars(substr($item['text'], 0, 70)) ?>...
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="buttons-container">
                <nav>
                    <ul>
                        <a href="TextEditor.php" class="ne_btn">
                            <li>
                                + New Entry
                                <span></span><span></span><span></span><span></span>
                            </li>
                        </a>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</body>

</html>