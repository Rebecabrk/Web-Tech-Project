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
        console.log(content.textContent);
    } else {
        content.innerHTML = content.textContent;
        content.setAttribute('contenteditable', true);
    }
})

/* function responsible with downloading the text (txt/pdf) */
const filename = document.getElementById('filename');
function fileHandle(value) {
    if (value === 'new') {
        content.innerHTML = '';
    } else if (value === 'txt') {
        if (filename.value) {
            const blob = new Blob([content.innerText]);
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.href = url;
            link.download = `${filename.value}.txt`;
            link.click();
        } else {
            alert("Please give a title for this file!");
        }

    } else if (value === 'pdf') {
        html2pdf(content).save(filename.value);
    }
}

/* function responsible with saving the text (in database) */
document.getElementById('doneButton').addEventListener('click', function () {
    if (filename.value) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '../model/TextEditor_model.php';
        
            var input_text = document.createElement('input');
            input_text.type = 'hidden';
            input_text.name = 'text';
            input_text.value = content.innerHTML;

            var input_title = document.createElement('input');
            input_title.type = 'hidden';
            input_title.name = 'title';
            input_title.value = filename.value;
        
            form.appendChild(input_title);
            form.appendChild(input_text);
            document.body.appendChild(form);

            form.submit();
    } else {
        alert("Please give a title to your thoughts.");
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

// need to rewrite this code for database version
// function isMemory() {
//     if (memoryTitle !== 'none') {
//         const title = memoryTitle.replace(/pattern\d{1,2}/, '');
//         const text = localStorage.getItem(memoryTitle);

//         content.innerHTML = text;
//         filename.value = title;
//         filename.disabled = true;
//     }
// }

const inputMultimedia = document.getElementById("input-file");
inputMultimedia.onchange = function (){
    // var picture = document.createElement('img');
    // picture.src = URL.createObjectURL(inputMultimedia.files[0]);
    // content.appendChild(picture);
    let file = inputMultimedia.files[0];
    let img = new Image();
    img.onload = function() {
        let canvas = document.createElement('canvas');
        let ctx = canvas.getContext('2d');

        // Set the desired width and calculate the height to maintain aspect ratio
        let width = 500;
        let scaleFactor = width / img.width;
        let height = img.height * scaleFactor;

        // Set canvas dimensions
        canvas.width = width;
        canvas.height = height;

        // Draw the scaled image on the canvas
        ctx.drawImage(img, 0, 0, width, height);

        // Create a new image element
        let picture = document.createElement('img');

        // Set the source of the image element to the data URL of the canvas
        picture.src = canvas.toDataURL();

        // Append the new image element to the content
        content.appendChild(picture);
    };

    // Start loading the image
    img.src = URL.createObjectURL(file);
}

