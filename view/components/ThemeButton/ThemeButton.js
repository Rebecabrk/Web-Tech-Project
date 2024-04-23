  window.addEventListener('scroll', function() {
    var btn = document.getElementById('theme_btn');
    var second_screen = document.getElementById('second_screen');
    
    if (window.scrollY < second_screen.offsetTop) {
      btn.classList.remove('hidden_btn');
    } else {
      btn.classList.add('hidden_btn');
    }
  });

  const toggle = document.getElementById('theme_btn');
  toggle.addEventListener('click', function(){
    const dmb = document.getElementById('theme_btn');
    const body = document.querySelector('body');
  
    if(dmb.innerHTML === 'LightMode'){
      dmb.innerHTML = 'DarkMode';
      body.classList.add('dark-mode');
    } else {
      dmb.innerHTML = 'LightMode';
      body.classList.remove('dark-mode');
    }
  });
  