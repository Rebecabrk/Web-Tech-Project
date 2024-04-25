<!DOCTYPE html>
<html>

<head>
    <style>
    html {
        <?php echo $backgroundStyle;
        ?>;
    }
    </style>
    <meta charset="utf-8">
    <title>Journal Page</title>
    <link href="../view/css/TextEditor.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="journal_container">
        <form>
            <div class="journal_title">
                <input type="text" id="title" name="title" placeholder="Your Title" />
            </div>
            <div class="journal_text">
                <textarea type="text" id="text" name="text" rows="5" cols="40" placeholder="Your Thoughts"></textarea>
            </div>
        </form>
    </div>
</body>

</html>