<!DOCTYPE html>

<html>

<head>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="..\view\components\Dashborad_Popup\Dashborad_Popup.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="..\view\components\Dashborad_Popup\Dashborad_Popup.js" defer></script>
</head>

<body>
    <section class="card popup" id="popup">
        <div>
            <h1 id="popup_title"></h1>
            <form method="POST" class="input-container" action="..\model\process\process-med-rec.php">
                <input class="input-card" name="name_input" id="name_input" type="text" placeholder="Name of incident"
                    required />
                <input class="input-card" name="date_input" id="date_input" type="text" placeholder="Date (YYYY-MM-DD)"
                    required />
                <input class="input-card" name="location_input" id="location_input" type="text"
                    placeholder="Location of incident" />
                <input class="input-card" type="hidden" name="type_input" type="text" id="popup_type" />
                <div class="buttons-container">
                    <input type="submit" class="submit-btn" value="Add">
                    <a class="close-btn" onClick="closePopup();"> Close </a>
                </div>
            </form>
        </div>
    </section>
</body>

</html>