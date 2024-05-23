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
            <h1>Medical records</h1>
            <div class="card-container">
                <?php 
                error_reporting(0); // ATENTIE!
                $mysqli = require ("..\model\database\database.php");
                $sql = "SELECT name, date, NVL(location,NULL) FROM medical_records WHERE type='Accident' AND cid = '" . $_COOKIE['Child_Picker'] . "' ORDER BY insertion_date DESC";
                $result = $mysqli->query($sql);
                ?>
                <div class="big-card">
                    <div class="card-content">
                        <h3> Accidents </h3>
                        <?php for($k=1; $k<=3; $k++) {?>
                        <div class="input-card"><?php if ($name = mysqli_fetch_array($result)['name'])
                            echo $name;
                        else
                            echo 'nothing here...'; ?></div>
                        <?php } ?>
                        <button class="add-btn" id="accident-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Accident'; document.getElementById('popup_type').value='Accident'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <?php
                $mysqli = require ("..\model\database\database.php");
                $sql = "SELECT name, date, NVL(location,NULL) FROM medical_records WHERE type='Alergy' AND cid = '" . $_COOKIE['Child_Picker'] . "' ORDER BY insertion_date DESC";
                $result = $mysqli->query($sql);
                ?>
                <div class="big-card">
                    <div class="card-content">
                        <h3> Alergies </h3>
                        <?php for($k=1; $k<=3; $k++) {?>
                        <div class="input-card"><?php if ($name = mysqli_fetch_array($result)['name'])
                            echo $name;
                        else
                            echo 'nothing here...'; ?></div>
                        <?php } ?>
                        <button class="add-btn" id="alergy-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Alergy'; document.getElementById('popup_type').value='Alergy'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <?php
                $mysqli = require ("..\model\database\database.php");
                $sql = "SELECT name, date, NVL(location,NULL) FROM medical_records WHERE type='Desire' AND cid = '" . $_COOKIE['Child_Picker'] . "' ORDER BY insertion_date DESC";
                $result = $mysqli->query($sql);
                ?>
                <div class="big-card">
                    <div class="card-content">
                        <h3> Diseares </h3>
                        <?php for($k=1; $k<=3; $k++) {?>
                        <div class="input-card"><?php if ($name = mysqli_fetch_array($result)['name'])
                            echo $name;
                        else
                            echo 'nothing here...'; ?></div>
                        <?php } ?>
                        <button class="add-btn" id="disare-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Disare'; document.getElementById('popup_type').value='Desire'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h1>Schedules/Calendar</h1>
            <p>Feel free to populate the calendar with precise data/tasks like medication/food/sleep/school schedules!</p>
            <?php include("../view/components/Dynamic_Event_Calendar/Dynamic_Event_Calendar.php"); ?>

            <hr>

            <h1>Psychosomatic Development</h1>
            <div class="card-container">
                <div class="big-card">
                </div>
            </div>
        </div>
    </div>
</body>

</html>