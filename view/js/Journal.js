const recentEntries = document.getElementById('recentEntries');
window.onload = function() {
    for (let i = 0; i < localStorage.length; i++) {
        let key = localStorage.key(i);
        if (key.includes('usrtxt')) {
            let value = localStorage.getItem(key);
            let new_key = key.replace('usrtxt', '');
            recentEntries.innerHTML += `${new_key}: ${value}<br>`;
        }
    }
}