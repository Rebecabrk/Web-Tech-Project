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
                        <button class="add-btn" id="accident-btn" onClick="openPopup(); $DATA='Accident'">
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
                        <button class="add-btn" id="alergy-btn" onClick="openPopup(); $DATA='Alergy'">
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
                        <button class="add-btn" id="disare-btn" onClick="document.getElementById('popup_title').innerHTML='Add Disare'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <section class="card popup" id="popup">
                    <div>
                        <h1 id="popup_title"></h1>
                        <form method="POST" class="input-container">
                            <input class="input-card" name="name" type="text" placeholder="Name of incident"/>
                            <input class="input-card" name="date" type="text" placeholder="Date of incident"/>
                            <input class="input-card" name="location" type="text" placeholder="Location of incident"/>
                            <input class="input-card" name="type" type="text"/>
                            <!-- <select  class="input-card">
                                <option>Accident</option>
                                <option>Alergy</option>
                                <option>Diseare</option>
                            </select> -->
                            <div class="buttons-container">
                                <a class="submit-btn" href="">
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