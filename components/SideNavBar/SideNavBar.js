  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }

window.addEventListener('scroll', function() {
  var sidebar = document.getElementById('sidebar');
  var second_screen = document.getElementById('second_screen');
  
  sidebar.classList.add('hidden');
  
  // If the user has scrolled back to the first full_screen, hide the sidebar
  if (window.scrollY < second_screen.offsetTop) {
    sidebar.classList.remove('hidden');
  } else {
    sidebar.classList.add('hidden');
  }
});

// document.addEventListener("DOMContentLoaded", function() {
//     const navbar = document.getElementById('sidebar');
//     const pages = document.querySelectorAll('.full_screen');
//     var second_screen = document.getElementById('second_screen');
    
//     window.addEventListener('scroll', function() {
//         if (window.scrollY > second_screen.offsetTop) {
//             navbar.style.transform = 'translateX(0)';
//         } else {
//             navbar.style.transform = 'translateX(-100%)';
//         }

//         pages.forEach(full_screen => {
//             const pageTop = full_screen.offsetTop;
//             const pageBottom = pageTop + full_screen.offsetHeight;
//             const scrollPosition = window.scrollY + navbar.offsetHeight;

//             if (scrollPosition >= pageTop && scrollPosition < pageBottom) {
//                 const currentPageId = full_screen.getAttribute('id');
//                 const currentNavLink = document.querySelector(`#navbar a[href="#${currentPageId}"]`);
//                 document.querySelectorAll('#navbar a').forEach(link => link.classList.remove('active'));
//                 currentNavLink.classList.add('active');
//             }
//         });
//     });
// });
