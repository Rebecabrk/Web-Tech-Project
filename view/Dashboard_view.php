<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Dashboard Page</title>
    <link href="../view/css/Dashboard.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="components\SideNavBar\SideNavBar.js"></script>
    <script src="components\Popup\Popup.js"></script>
</head>

<body>
    <div class="pages">
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
                        <button class="add-btn" id="add-btn">
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
                        <button class="add-btn" id="add-btn">
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
                        <button class="add-btn" id="add-btn">
                            <i class='bx bx-add-to-queue'></i>
                        </button>
                    </div>
                </div>

                <section class="card popup" id="popup">
                    <div>
                        <h1>Add <br> Data</h1>
                        <form>
                            <input class="input-card" type="text" placeholder="Type of accident" />
                            <input class="input-card" type="text" placeholder="Date of accident" />
                            <input class="input-card" type="text" placeholder="Location of accident" />
                            <input class="input-card" type="text" placeholder="Severity of accident" />
                            <div class="buttons-container">
                                <button class="submit-btn" id="submit-btn" href="process.php">
                                    Add
                                </button>
                                <button class="close-btn" id="close-btn">
                                    Close
                                </button>
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

    <div class="sidebar" id="sidebar">
        <div class="logo-details">
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class="bx bx-search"></i>
                <input type="text" placeholder="Search..." />
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="HomePage.php">
                    <i class='bx bx-home'></i>
                    <span class="links_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li>
                <a href="Dashboard.php">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="Journal.php">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="links_name">Journal</span>
                </a>
                <span class="tooltip">Journal</span>
            </li>
            <li>
                <a href="Journey.php">
                    <i class="bx bx-heart"></i>
                    <span class="links_name">The Journey</span>
                </a>
                <span class="tooltip">The Journey</span>
            </li>
            <li>
                <a href="Settings.php">
                    <i class="bx bx-cog"></i>
                    <span class="links_name">Settings</span>
                </a>
                <span class="tooltip">Settings</span>
            </li>
            <li>
                <a href="About.php">
                    <i class='bx bx-smile'></i>
                    <span class="links_name">About Us</span>
                </a>
                <span class="tooltip">About Us</span>
            </li>
            <li>
                <a href="Documentation.php">
                    <i class='bx bxs-file-doc'></i>
                    <span class="links_name">Documentation</span>
                </a>
                <span class="tooltip">Documentation</span>
            </li>
        </ul>
    </div>
</body>

</html>