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
                            <?php if ($element->multimedia_element->type != "none"): {?>
                                <div class="timeline-content timeline-card">
                                    <div class="timeline-img-header">
                                        <h2><?= htmlspecialchars($element->title) ?></h2>
                                        <?php if($element->multimedia_element->type == 'photo'):?>
                                        <img class="image" src="<?= htmlspecialchars($element->multimedia_element->path) ?>" alt="Image description" />
                                            <?php else: ?>
                                        <video controls class="video" src="<?= htmlspecialchars($element->multimedia_element->path) ?>" alt="Video description" > </video>
                                            <?php endif ?>
                                    </div>
                                    <div class="date"><?= htmlspecialchars($element->creation_date) ?></div>
                                    <p><?= htmlspecialchars($element->description) ?></p>
                                    <a href="<?= htmlspecialchars($element->link) ?>">More</a>
                                </div>
                            <?php }else: {?>
                                <div class="timeline-content">
                                    <h2><?= htmlspecialchars($element->title) ?></h2>
                                    <div class="date"><?= htmlspecialchars($element->creation_date) ?></div>
                                    <p><?= htmlspecialchars(mb_strimwidth(strip_tags($element->text), 0, 70)) . '...' ?></p>
                                    <a>More</a>
                                    <!-- onclick="callTextEditorService(<?= $element->id ?>, '<?= $element->pattern ?>');" -->
                                </div>

                            <?php }endif; ?>
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
                <?php if ($xml !== false) { ?>
                </section>
            <?php }?>
        </div>
    </div>
</body>

</html>