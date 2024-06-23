<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Friends Page</title>
    <link href="../../public/css/Friends.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages">
        <button id="addCard" class="fixed-button" onclick="">Add profile card</button>
        <h1>Track your child's friends and relationships!</h1>
        <div id="profile-cards">
        <div class="profile-card" id="new-profile-card">
            <div class="name-and-delete-button">
                <div id="content-name" contenteditable="true" spellcheck="false">
                                Name
                </div>
            </div>
                    <div class="profile-content">
                        <div class="profile-picture">
                            <img id="profile-image" src="../../public/images/avatars/profile.png" alt="Profile Picture">
                            <label for="upload-image">Upload image</label>
                            <input type="file" id="upload-image" accept="image/*">
                        </div>
                        <div class="profile-info">
                            <div id="content" contenteditable="true" spellcheck="false">
                                Add description...
                            </div>
                            <label id="save-description" for="save-description">Save profile info</label>
                        </div>
                    </div>
                </div>
        </div>
        <!-- <?php foreach ($allMemories as $item): ?>
                            <div class="entry">
                                <button onclick="callTextEditorService(<?= $item['id'] ?>, '<?= $item['pattern'] ?>');">
                                    <div class="entry_title"><?= htmlspecialchars($item['title']) ?></div>
                                    <div class="entry_content">
                                        <?= mb_strimwidth(strip_tags(htmlspecialchars_decode($item['text'])), 0, 70) . '...' ?>
                                    </div>
                                </button>
                            </div>
                        <?php endforeach; ?> -->
            <template id="profileCardTemplate">
                <div class="profile-card" >
                <div id="content-name" contenteditable="true" spellcheck="false">
                                Name
                </div>
                    <div class="profile-content">
                        <div class="profile-picture">
                            <img id="profile-image" src="../../public/images/avatars/profile.png" alt="Profile Picture">
                            <label for="upload-image">Upload image</label>
                            <input type="file" id="upload-image" accept="image/*">
                        </div>
                        <div class="profile-info">
                            <div id="content" contenteditable="true" spellcheck="false">
                                Add description...
                            </div>
                            <label for="save-description">Save profile info</label>
                        </div>
                    </div>
                </div>
            </template>
    </div>
    <script src="../../public/js/Friends.js"></script>
</body>

</html>