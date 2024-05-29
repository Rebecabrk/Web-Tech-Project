let sidebar = document.querySelector(".sidebar");
let closeBtn = document.getElementById("button");
let searchBtn = document.querySelector(".bx-search");
var BTN_Global = true;

function slideNavBar() {
  closeBtn = document.getElementById("button");
  // sidebar.classList.add("open");
  // document.querySelector('.full_screen').classList.toggle('blur');
  // menuBtnChange(); //calling the function(optional)
  if (BTN_Global) {
    closeBtn.style.width = "20%";
    BTN_Global = false;
  } else {
    sidebar.style.width = "78px";
    BTN_Global = true;
  }
}

function slideSearch() {
  // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
}

// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
  }
}

window.addEventListener("scroll", function () {
  var sidebar = document.getElementById("sidebar");
  var second_screen = document.getElementById("second_screen");

  if (second_screen) {
    if (window.scrollY < second_screen.offsetTop) {
      sidebar.classList.remove("hidden_sidenavbar");
    } else {
      sidebar.classList.add("hidden_sidenavbar");
    }
  } else sidebar.classList.remove("hidden_sidenavbar");
});

function createCookie(name,value,days) {
  if (days) {
      var date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 *1000));
      var expires = "; expires=" + date.toGMTString();
  } else {
      var expires = "";
  }
  document.cookie = name + "=" + value + expires + "; path=/";
}

function OnSelectionChange() {
  if (document.querySelector("select").value == "add") {
    createCookie("Child_Picker", "nothing", 30);
    window.location.href = "HomePage.php";
  } else {
    // setcookie("Child_Picker", document.querySelector("select").value, time() + (30 * 24 * 60 * 60), '/');
    createCookie("Child_Picker", document.querySelector("select").value, 30);
    window.location.reload();
  }
}
