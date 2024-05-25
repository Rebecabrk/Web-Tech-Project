<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Settings Page</title>
    <link href="../view/css/Settings.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="full_screen padding">
            <div class="card-container">
                <div class="special-btn">
                    <a href="Profile.php" class="smaller-card card content">
                        <i class="bx bx-user"></i>
                        <h1>Profile Settings</h1>
                    </a>
                    <a href="Settings2.php?setting=feedback" class="smaller-card card content">
                        <i class='bx bx-message-add'></i>
                        <h1>Feedback</h1>
                    </a>
                </div>
                <a class="card content">
                    <i class='bx bx-envelope'></i>
                    <h1>Email Notifications</h1>
                    <form class="center" method="POST"
                        action="../model/process/email_notification/process-stored-data.php">
                        <div class="switch-container">
                            <label class="switch">
                                <input type="checkbox" name="emailSwitch" id="emailSwitch"
                                    <?php echo $isChecked ? 'checked' : ''; ?>>
                                <span class="slider"></span>
                            </label>
                            <span class="switch-label">Receive Emails</span>
                        </div>
                        <div class="switch-container">
                            <label class="switch">
                                <input type="checkbox" name="emailSwitchForChild" id="emailSwitchForChild"
                                    <?php echo $isCheckedForChild ? 'checked' : ''; ?>>
                                <span class="slider"></span>
                            </label>
                            <span class="switch-label">Receive Emails <br> To the Current Child</span>
                        </div>
                        <button type="submit" class="submit-btn-email">Submit</button>
                    </form>
                </a>
            </div>
        </div>
    </div>
</body>

</html>