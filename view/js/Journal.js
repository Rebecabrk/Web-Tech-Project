const recentEntries = document.getElementById('recentEntries');
window.onload = function() {
    for (let i = 0; i < localStorage.length; i++) {
        let key = localStorage.key(i);
        if (key.includes('pattern')) {
            let value = localStorage.getItem(key);
            let pattern = key.match(/pattern\d{1,2}/);
            let new_key = key.replace(/pattern\d{1,2}/, '');

            let entryDiv = document.createElement('div');
            entryDiv.classList.add('entry');

            let entryTitleDiv = document.createElement('div');
            entryTitleDiv.classList.add('entry_title');
            entryTitleDiv.innerHTML = new_key;
            entryTitleDiv.style.color = 'black';
            entryTitleDiv.style.padding = '2% 0% 1.5% 0%';

            let entryContentDiv = document.createElement('div');
            entryContentDiv.classList.add('entry_content');
            entryContentDiv.innerHTML = value.substring(0, 70) + '...';
            entryContentDiv.style.color = 'black';
            entryContentDiv.style.padding = "0.5% 0% 2% 0%"

            let newAnchor = document.createElement('a');
            newAnchor.href = 'TextEditor.php?pattern=' + pattern + '&text=' + key; 

            newAnchor.appendChild(entryTitleDiv);
            newAnchor.appendChild(entryContentDiv);
            entryDiv.appendChild(newAnchor);
            recentEntries.appendChild(entryDiv);
        }
    }
    document.getElementById('sidebar').classList.add('hidden_sidenavbar');
}