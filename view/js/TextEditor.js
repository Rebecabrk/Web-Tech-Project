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
const isCoreMemory = document.getElementById('coreMemoryCheckbox');
var urlParams = new URLSearchParams(window.location.search);
var id_memory = urlParams.get('memoryId');

document.getElementById('doneButton').addEventListener('click', function () {
    if (filename.value) {
        if (id_memory == null) {
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '../model/TextEditor_model.php?function=insertMemory';

            var input_text = document.createElement('input');
            input_text.type = 'hidden';
            input_text.name = 'text';
            input_text.value = content.innerHTML;

            var input_title = document.createElement('input');
            input_title.type = 'hidden';
            input_title.name = 'title';
            input_title.value = filename.value;

            var input_pattern = document.createElement('input');
            input_pattern.type = 'hidden';
            input_pattern.name = 'pattern';
            input_pattern.value = backgroundPattern;

            var input_core_memory = document.createElement('input');
            input_core_memory.type = 'hidden';
            input_core_memory.name = 'isCoreMemory';
            input_core_memory.value = Number(isCoreMemory.checked);

            form.appendChild(input_title);
            form.appendChild(input_text);
            form.appendChild(input_pattern);
            form.appendChild(input_core_memory);
            document.body.appendChild(form);

            form.submit();
        }else{
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = '../model/TextEditor_model.php?function=alterMemory&memoryId=' + id_memory;

            var input_text = document.createElement('input');
            input_text.type = 'hidden';
            input_text.name = 'text';
            input_text.value = content.innerHTML;

            var input_core_memory = document.createElement('input');
            input_core_memory.type = 'hidden';
            input_core_memory.name = 'isCoreMemory';
            input_core_memory.value = Number(isCoreMemory.checked);

            form.appendChild(input_text);
            form.appendChild(input_core_memory);
            document.body.appendChild(form);

            form.submit();
        }
    } else {
        alert("Please give a title to your thoughts.");
    }
});

document.getElementById('deleteButton').addEventListener('click', function () {
    var answer = confirm("Are you sure you want to delete this memory? This action cannot be undone.");
    if (answer == true) {

        fetch('../model/TextEditor_model.php?function=deleteMemory&memoryId=' + id_memory)
            .then(response => {
                if (response.status === 200) {
                    return response.text();
                } else {
                    throw new Error("Empty response or non-200 status");
                }
            })
            .then(data => {
                console.log('Received data:', data);
                window.location.href = 'Journal.php';
            })
            .catch(error => console.error('Error:', error));
    }
});

function isMemory() {

    if (id_memory != null)
        fetch('../model/TextEditor_model.php?function=isMemory&memoryId=' + id_memory)
            .then(response => response.json())
            .then(data => {
                console.log('Received data:', data);
                content.innerHTML = data.text;
                filename.value = data.title;
                filename.disabled = true;
                if (data.isCoreMemory == 1) {
                    isCoreMemory.checked = true;
                }
            })
            .catch(error => console.error('Error:', error));
}

const inputMultimedia = document.getElementById("input-file");
inputMultimedia.onchange = function () {
    // var picture = document.createElement('img');
    // picture.src = URL.createObjectURL(inputMultimedia.files[0]);
    // content.appendChild(picture);
    let file = inputMultimedia.files[0];
    let img = new Image();
    img.onload = function () {
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

