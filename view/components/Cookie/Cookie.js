var cookie = getElementById('cookie-container');

function show_cookie() {
    if (!isset($_COOKIE['In_God_We_Trust']))
        cookie.classList.add('show-cookie');
    else
        cookie.classList.remove('show-cookie');
}