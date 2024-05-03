<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Page</title>
    <link href="../view/css/Dashboard.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../view/components/Popup/Popup.js"></script>
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="padding">
            <h1>Schedules/Calendar</h1>
            <div class="card-container">
                <div class="card">
                    <div class="card-content">
                        <h1>
                            Mediaction
                        </h1>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h1>
                            Food
                        </h1>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h1>
                            Sleep
                        </h1>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h1>
                            School
                        </h1>
                    </div>
                </div>
            </div>

            <hr>

            <h1>Medical records</h1>
            <div class="card-container">
                <div class="card">
                    <div class="card-content">
                        <h1> Accidents </h1>
                        <div class="input-card">Car accident</div>
                        <div class="input-card">Fall from tree</div>
                        <div class="input-card">9/11</div>
                        <button class="add-btn" onClick="openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h1> Alergies </h1>
                        <div class="input-card">Car accident</div>
                        <div class="input-card">Fall from tree</div>
                        <div class="input-card">9/11</div>
                        <button class="add-btn" onClick="openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h1> Diseares </h1>
                        <div class="input-card">Car accident</div>
                        <div class="input-card">Fall from tree</div>
                        <div class="input-card">9/11</div>
                        <button class="add-btn" onClick="openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <section class="card popup" id="popup">
                    <div>
                        <h1>Add <br> Data</h1>
                        <form method="POST">
                            <input class="input-card" type="text" placeholder="Type of accident" />
                            <input class="input-card" type="text" placeholder="Date of accident" />
                            <input class="input-card" type="text" placeholder="Location of accident" />
                            <input class="input-card" type="text" placeholder="Severity of accident" />
                            <div class="buttons-container">
                                <a class="submit-btn" href="process.php">
                                    Add
                                </a>
                                <a class="close-btn" onClick="closePopup();">
                                    Close
                                </a>
                            </div>
                        </form>
                    </div>
                </section>
            </div>

            <hr>

            <h1>Activities/Memories</h1>
            <div class="card-container">
                <div class="card">
                    <h1>
                        Add Photos
                    </h1>
                </div>
                <div class="card">
                    <h1>
                        Add Videos
                    </h1>
                </div>
            </div>

            <hr>

            <h1>Psychosomatic Development</h1>
            <div class="card-container">
                <div class="big-card">
                    <h1>
                        Everything
                    </h1>
                </div>
            </div>
        </div>
    </div>
</body>

</html>