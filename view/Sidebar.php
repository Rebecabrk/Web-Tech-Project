<?php
function Sidebar() {
 echo "<div class="sidebar" id="sidebar">
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
            <a href="Profile.php">
                <i class="bx bx-user"></i>
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
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
</div>"
}