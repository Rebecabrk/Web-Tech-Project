<!DOCTYPE html>

<html>

<head>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="..\view\components\Children_Popup\Children_Popup.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="..\view\components\Children_Popup\Children_Popup.js"></script>
</head>

<body>
    <section class="popup card" id="popup">
        <form method="POST" class="input-container" action="process-child-picker.php">
            <h2>Add your <br> child's data</h2>
            <input class="input-card" name="name_input" id="name_input" type="text" placeholder="Name of your child"
                required />
            <input class="input-card" name="birth_date_input" id="birth_date_input" type="text"
                placeholder="Birth D. (YYYY-MM-DD)" required />
            <input class="input-card" name="email_input" id="email_input" type="text"
                placeholder="Your child'd email" />
            <input class="input-card" type="hidden" name="uid" type="text" id="uid" />
            <div class="buttons-container">
                <input type="submit" class="submit-btn" value="Add">
                <a class="close-btn" onClick="closePopup();"> Close </a>
            </div>
        </form>
    </section>
</body>

</html>