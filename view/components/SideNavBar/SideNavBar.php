<!DOCTYPE html>

<html>

<head>
  <title>Landing Page</title>
  <link rel="stylesheet" href="SideNavBar.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <div class="full_screen" id="first_screen">
    <div class="section section1">
      <h2>First Page</h2>
      <a href="#second_screen">Go to Second Page</a>
    </div>
  </div>

  <div class="full_screen" id="second_screen">
    <div class="section section2">
      <h2>Second Page</h2>
      <a href="#third_screen">Go to Third Page</a>
    </div>
  </div>

  <div class="full_screen" id="third_screen">
    <div class="section section3">
      <h2>Third Page</h2>
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
        <a href="#">
          <i class="bx bx-grid-alt"></i>
          <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-profile"></i>
          <span class="links_name">profile</span>
        </a>
        <span class="tooltip">profile</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-pie-chart-alt-2"></i>
          <span class="links_name">Analytics</span>
        </a>
        <span class="tooltip">Analytics</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-folder"></i>
          <span class="links_name">File Manager</span>
        </a>
        <span class="tooltip">Files</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-heart"></i>
          <span class="links_name">Saved</span>
        </a>
        <span class="tooltip">Saved</span>
      </li>
      <li>
        <a href="#">
          <i class="bx bx-cog"></i>
          <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
    </ul>
  </div>

  <script src="SideNavBar.js"></script>
</body>

</html>