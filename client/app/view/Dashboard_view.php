<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Page</title>
    <link href="../../public/css/Dashboard.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../view/components/Popup/Popup.js"></script>
</head>

<body onLoad="document.getElementById('sidebar').classList.add('hidden_sidenavbar');">
    <div class="pages" id="second_screen">
        <div id="first_screen" class="padding">
            <h1>Medical records</h1>
            <div class="card-container">

                <div class="big-card">
                    <div class="card-content">
                        <h1> Accidents </h1>
                        <?php $xml = simplexml_load_string($MRecordXMLAccident);
                        $children = $xml->children();
                        for ($i = 0; $i < 3; $i++) {
                            $element = $children[$i];  
                            if( $element->name != "nothing here..."){
                                echo '<div class="record-input-align">';
                                echo '<div class="input-card">' . $element->name . '</div>';
                                echo '<form method="POST" action="../model/process/process-delete_mrecord.php" style="display:inline;">';
                                echo '<input type="hidden" name="type" value="' . htmlspecialchars($element->type) . '">';
                                echo '<input type="hidden" name="name" value="' . htmlspecialchars($element->name) . '">';
                                echo '<button type="submit" class="delete-btn another-dbtn"> <i class=\'bx bx-trash\'></i></button>';
                                echo '</form>';
                                echo '</div>';
                            } else {
                                echo '<div class="input-card">';
                                echo $element->name . '</div>';
                            }
                        }
                        ?>
                        <button class="add-btn" id="accident-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Accident'; document.getElementById('popup_type').value='Accident'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <div class="big-card">
                    <div class="card-content">
                        <h1> Alergies </h1>
                        <?php $xml = simplexml_load_string($MRecordXMLAllergy);
                        $children = $xml->children();
                        for ($i = 0; $i < 3; $i++) {
                            $element = $children[$i];  
                            if( $element->name != "nothing here..."){
                                echo '<div class="record-input-align">';
                                echo '<div class="input-card">' . $element->name . '</div>';
                                echo '<form method="POST" action="../model/process/process-delete_mrecord.php" style="display:inline;">';
                                echo '<input type="hidden" name="type" value="' . htmlspecialchars($element->type) . '">';
                                echo '<input type="hidden" name="name" value="' . htmlspecialchars($element->name) . '">';
                                echo '<button type="submit" class="delete-btn another-dbtn"> <i class=\'bx bx-trash\'></i></button>';
                                echo '</form>';
                                echo '</div>';
                            } else {
                                echo '<div class="input-card">';
                                echo $element->name . '</div>';
                            }
                        }
                        ?>
                        <button class="add-btn" id="alergy-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Alergy'; document.getElementById('popup_type').value='Alergy'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <div class="big-card">
                    <div class="card-content">
                        <h1> Diseases </h1>
                        <?php $xml = simplexml_load_string($MRecordXMLDesire);
                        $children = $xml->children();
                        for ($i = 0; $i < 3; $i++) {
                            $element = $children[$i];  
                            if( $element->name != "nothing here..."){
                                echo '<div class="record-input-align">';
                                echo '<div class="input-card">' . $element->name . '</div>';
                                echo '<form method="POST" action="../model/process/process-delete_mrecord.php" style="display:inline;">';
                                echo '<input type="hidden" name="type" value="' . htmlspecialchars($element->type) . '">';
                                echo '<input type="hidden" name="name" value="' . htmlspecialchars($element->name) . '">';
                                echo '<button type="submit" class="delete-btn another-dbtn"> <i class=\'bx bx-trash\'></i></button>';
                                echo '</form>';
                                echo '</div>';
                            } else {
                                echo '<div class="input-card">';
                                echo $element->name . '</div>';
                            }
                        }
                        ?>
                        <button class="add-btn" id="disare-btn"
                            onClick="document.getElementById('popup_title').innerHTML='Add Disease'; document.getElementById('popup_type').value='Desire'; openPopup();">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>
            </div>

            <hr>

            <h1>Schedules/Calendar</h1>
            <h3>Feel free to populate the calendar with precise data/tasks like medication/food/sleep/school
                schedules!</h3>
            <div class="center">
                <?php include("../view/components/Dynamic_Event_Calendar/Dynamic_Event_Calendar.php"); ?>
            </div>
        </div>
    </div>
</body>

</html>