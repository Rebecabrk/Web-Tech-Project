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
        <button class="fixed-button" onclick="">Add profile card</button>
        <h1>Track your child's friends and relationships!</h1>
        <div id="profile-cards">
            <div class="profile-card">
                <h2>Name</h2>
                <div class="profile-content">
                <div class="profile-picture">
                    <img id="profile-image" src="../../public/images/avatars/profile.png" alt="Profile Picture">
                    <label for="upload-image">Upload image</label>
                    <input type="file" id="upload-image" accept="image/*">
                </div>
                <div class="profile-info">
                    <!-- <textarea id="profile-description" placeholder="Enter your description..."></textarea> -->
                    <!-- <button id="save-description">Save Description</button> -->
                    <div id="content" contenteditable="true" spellcheck="false">
                        Add description...
                    </div>
                    <label for="save-description">Save profile info</label>
                </div>
                </div>
            </div>
            <div class="profile-card">
                <h2>Name</h2>
                <div class="profile-content">
                <div class="profile-picture">
                    <img id="profile-image" src="../../public/images/avatars/profile.png" alt="Profile Picture">
                    <label for="upload-image">Upload image</label>
                    <input type="file" id="upload-image" accept="image/*">
                </div>
                <div class="profile-info">
                    <!-- <textarea id="profile-description" placeholder="Enter your description..."></textarea> -->
                    <!-- <button id="save-description">Save Description</button> -->
                    <div id="content" contenteditable="true" spellcheck="false">
                        Add description...
                    </div>
                    <label for="save-description">Save profile info</label>
                </div>
                </div>
            </div>
            <div class="profile-card">
                <h2>Name</h2>
                <div class="profile-content">
                <div class="profile-picture">
                    <img id="profile-image" src="../../public/images/avatars/profile.png" alt="Profile Picture">
                    <label for="upload-image">Upload image</label>
                    <input type="file" id="upload-image" accept="image/*">
                </div>
                <div class="profile-info">
                    <!-- <textarea id="profile-description" placeholder="Enter your description..."></textarea> -->
                    <!-- <button id="save-description">Save Description</button> -->
                    <div id="content" contenteditable="true" spellcheck="false">
                        Add description...
                    </div>
                    <label for="save-description">Save profile info</label>
                </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../public/js/Friends.js"></script>
</body>

</html>