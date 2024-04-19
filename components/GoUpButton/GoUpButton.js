  window.addEventListener('scroll', function() {
    var btn = document.getElementById('go_up_btn');
    var second_screen = document.getElementById('second_screen');
    
    if (window.scrollY < second_screen.offsetTop) {
      btn.classList.remove('hidden_btn');
    } else {
      btn.classList.add('hidden_btn');
    }
  });
