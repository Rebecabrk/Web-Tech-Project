<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Documentation Page</title>
    <link href="..\view\css\Documentation.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div class="pages">
        <div id="first_screen" class="padding">
            <h1>ChiM (Childcare Manager) Documentation</h1>

            <section id="introduction">
                <h2>1. Introduction</h2>
                <h3>1.1) Purpose</h3>
                <p>This documentation is made to describe the functionalities of the ChiM project (Childcare
                    Manager).</p>

                <h3>1.2) Product Scope</h3>
                <p>Keeping track of all the needs of a child can be a tough job; especially when you have many other
                    tasks and deadlines to meet. Because this is a true problem that needs to be addressed, we
                    created ChiM (Childcare Manager). ChiM is a platform that offers efficient management of
                    childcare resources (e.g., feeding schedule, sleep hours, medical history, etc.). The platform
                    allows users to enter data about their children and provides multiple calendars (daily, weekly,
                    yearly) for efficient visualization of the mentioned schedules. ChiM is the perfect place where
                    busy parents can make sure to have all the childcare resources organized in one place. Our hope
                    is that through ChiM parents will have an easier time and a clearer vision regarding the needs
                    of the child.</p>
            </section>

            <section id="overall-description">
                <h2>2.Overall Description</h2>

                <h3>2.1) Product Functions</h3>
                <ul>
                    <li>Organizing food/sleep/medication/school schedules using calendars</li>
                    <li>Recording information about accidents/allergies/diseases</li>
                    <li>Organizing and collecting thoughts in the journal</li>
                    <li>Visual timeline of the most important events in the development of the child</li>
                </ul>

                <h3>2.2) User Classes</h3>
                <p>The website will have only one user class, that is the parent. The parent will have full access
                    to the manipulation of all information regarding the child.</p>

                <h3>2.3) Operating Environment</h3>
                <p>ChiM is created to work on every browser or device (it is a responsive website).</p>
            </section>

            <section id="external-interface">
                <h2>3. External Interface Requirements</h2>

                <h3>3.1) User Interfaces</h3>
                <p>The user will first interact with the HomePage which includes general information about the
                    platform and about the importance of the well development of children (babies to teens).</p>
                <img src="../view/css/screenshots/home.png" alt="HomePage">
                <img src="../view/css/screenshots/theManager.png" alt="TheManager">
                <img src="../view/css/screenshots/info.png" alt="Info">
                <p>The user will then be able to create an account to start their journey with the management of the
                    childcare resources.</p>
                <img src="../view/css/screenshots/createAcc.png" alt="SignUp">
                <p>After LogIn/SignUp, the navbar offers the possibility to get to all the pages of the platform:
                    dashboard, profile, journal, journey, settings.</p>
                <img src="../view/css/screenshots/settings.png" alt="Settings">
            </section>

            <section id="system-features">
                <h2>4. System Features</h2>

                <h3>4.1) Setting Up Your Profile</h3>
                <p>On the profile page, the user edits and updates data regarding the account – email, password,
                    name, etc. – and data about childcare – schedules, medical records, etc.</p>
                <img src="../view/css/screenshots/profile.png" alt="Profile">
                <img src="../view/css/screenshots/profile2.png" alt="Profile2">

                <h3>4.2) Interactive Dashboard</h3>
                <p>The platform will provide the user a visual representation of all the current schedules, medical
                    records, and memories: basically everything that the parent entered on the profile. We are
                    currently working on making this page interactive, such that the user will be able to edit and
                    update data also from this page (not only in the profile), as it is easier to do it having the
                    visual representation.</p>
                    <img src="../view/css/screenshots/dashboard.png" alt="Dashboard">

                <h3>4.3) Journaling</h3>
                <p>A great way of remembering all the beautiful memories that the journey of raising a child
                    provides is by keeping a journal. Here, the parent can express all the feelings they felt during
                    each episode from the development of their child. We will incorporate a toolbar where the text
                    font, color, size (and all other settings a normal document has) can be changed, to increase the
                    creativity of the ways of storing memories. Not to mention that here, the user will be able to
                    upload photos and video clips.</p>
                <img src="../view/css/screenshots/journal.png" alt="Journal">
                <img src="../view/css/screenshots/journal2.png" alt="Journal2">

                <h3>4.4) Timeline</h3>
                <p>The best way to relive all the stages of the development of your child is by pinpointing the most
                    important events the family has gone through: ChiM will, thus, provide a pretty timeline that
                    will include information from the journal and some of the medical interventions. Each memory can
                    have a title, a description, and a photo/video based on what the user introduced in the journal.
                </p>
                <img src="../view/css/screenshots/journey.png" alt="Journey">
            </section>

            <section id="resources">
                <h2>5. Resources</h2>

                <h3>5.1) Photos</h3>
                <a href="https://www.pexels.com/">link 5.1</a>

                <h3>5.2) Code development</h3>
                <a href="https://profs.info.uaic.ro/andrei.panu/courses/web/lab/">link 5.2.1</a>
                <br>
                <a href="https://developer.mozilla.org/en-US/docs/Web">link 5.2.2</a>
                
                <h3>5.2) Documentation</h3>
                <a href="https://github.com/rick4470/IEEE-SRS-Tempate#readme">link 5.3</a>
            </section>
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

    <script src="components\SideNavBar\SideNavBar.js"></script>
</body>

</html>