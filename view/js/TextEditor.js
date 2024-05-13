/* function resposible with the majority of buttons from toolbar */
function formatDoc(cmd, value = null) {
    if (value) {
        document.execCommand(cmd, false, value);
    } else {
        document.execCommand(cmd);
    }
}

/* function responsible with adding a link */
function addLink() {
    const url = prompt('Insert url');
    formatDoc('createLink', url);
}

/* function responsible with actually using the link */
const content = document.getElementById('content');
content.addEventListener('mouseenter', function () {
    const a = content.querySelectorAll('a');
    a.forEach(item => {
        item.addEventListener('mouseenter', function () {
            content.setAttribute('contenteditable', false);
            item.target = '_blank';
        })
        item.addEventListener('mouseleave', function () {
            content.setAttribute('contenteditable', true);
        })
    })
})

/* function responsible with the last button from toolbar (showCode) */
const showCode = document.getElementById('show-code');
let active = false;
showCode.addEventListener('click', function () {
    showCode.dataset.active = !active;
    active = !active;

    if (active) {
        content.textContent = content.innerHTML;
        content.setAttribute('contenteditable', false);
    } else {
        content.innerHTML = content.textContent;
        content.setAttribute('contenteditable', true);
    }
})

/* function responsible with saving the text (txt/pdf) */
const filename = document.getElementById('filename');
function fileHandle(value) {
    if (value === 'new') {
        content.innerHTML = '';
    } else if (value === 'txt') {
        const blob = new Blob([content.innerText]);
        const url = URL.createObjectURL(blob);
        const link = document.createElement('a');
        link.href = url;
        link.download = `${filename.value}.txt`;
        link.click();
    } else if (value === 'pdf') {
        html2pdf(content).save(filename.value);
    }
}


document.getElementById('doneButton').addEventListener('click', function () {
    if (filename.value) {
        const key = backgroundPattern + filename.value;
        localStorage.setItem(key, content.innerHTML);
        window.location.href = 'Journal.php';
    } else {
        alert("Please give a title to your thoughts. The title cannot be changed later!");
    }
});

document.getElementById('deleteButton').addEventListener('click', function () {
    var answer = confirm("Are you sure you want to delete this memory? This action cannot be undone.");
    if (answer == true) {
        const key = backgroundPattern + filename.value;
        if (localStorage.getItem(key) !== null) {
            localStorage.removeItem(key);
        }
        window.location.href = 'Journal.php';
    }
});

function isMemory() {
    if (memoryTitle !== 'none') {
        const title = memoryTitle.replace(/pattern\d{1,2}/, '');
        const text = localStorage.getItem(memoryTitle);

        content.innerHTML = text;
        filename.value = title;
        filename.disabled = true;
    }
}