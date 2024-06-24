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
// const showCode = document.getElementById('show-code');
// let active = false;
// showCode.addEventListener('click', function () {
//     showCode.dataset.active = !active;
//     active = !active;

//     if (active) {
//         // content.textContent = content.innerHTML;
//         // content.setAttribute('contenteditable', false);
//         console.log(content.innerHTML);
//     } else {
//         content.innerHTML = content.textContent;
//         content.setAttribute('contenteditable', true);
//     }
// })

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

function getCookie(name) {
    let cookieArr = document.cookie.split(";");

    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].split("=");

        if (name == cookiePair[0].trim()) {
            return decodeURIComponent(cookiePair[1]);
        }
    }
    return null;
}


document.getElementById('doneButton').addEventListener('click', function () {
    if (filename.value) {
        if (id_memory == null) {
            // we insert a memory

            let cookie_user_id = getCookie('In_God_We_Trust');
            if (cookie_user_id == null) { alert('Error at getting user_id from cookie...') }

            console.log(content.innerHTML);

            let data = {
                user_id: cookie_user_id,
                title: filename.value,
                text: content.innerHTML,
                pattern: backgroundPattern,
                is_core_memory: Number(isCoreMemory.checked)
            };

            fetch('http://localhost/Web-Tech-Project/services/TextEditor/memories', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                    console.log(data.message);
                    if (data.message === "Success") {
                        console.log('TextEditor insert API returned Success');
                        window.location.href = '../../app/controller/Journal.php';
                    } else {
                        console.log('API did not return Success');
                        alert('Something went wrong');
                    }
                })
                .catch(err => {
                    console.error('An error occurred:', err)});
        } else {
            //we update/alter a memory

            let data = {
                updated_text: content.innerHTML,
                updated_is_core_memory: Number(isCoreMemory.checked)
            };

            fetch('http://localhost/Web-Tech-Project/services/TextEditor/memories/' + id_memory, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.message == "Success") {
                        console.log('Patch successful', data);
                        window.location.href = '../../app/controller/Journal.php';
                    }
                })
                .catch(error => {
                    console.error('There has been a problem with your fetch operation:', error);
                });
        }
    } else {
        alert("Please give a title to your thoughts.");
    }
});

document.getElementById('deleteButton').addEventListener('click', function () {
    var answer = confirm("Are you sure you want to delete this memory? This action cannot be undone.");
    if (answer == true) {
        fetch('http://localhost/Web-Tech-Project/services/TextEditor/memories/' + id_memory, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if (data.message == "Success") {
                    console.log('Delete successful', data);
                    window.location.href = '../../app/controller/Journal.php';
                }
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });

    }
});

function isMemory() {

    if (id_memory != null) {
        let url = 'http://localhost/Web-Tech-Project/services/TextEditor/memories/' + id_memory;
        fetch(url, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);
                console.log('Received data:', data);
                content.innerHTML = data.message[0].text;
                filename.value = data.message[0].title;
                filename.disabled = true;
                if (data.message[0].isCoreMemory == 1) {
                    isCoreMemory.checked = true;
                }
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });
    }
}

const inputMultimedia = document.getElementById("input-file");
inputMultimedia.onchange = function () {
    let file = inputMultimedia.files[0];
    let fileType = file.type.split('/')[0];

    if (fileType === 'image') {
        let img = new Image();
        img.onload = function () {
            let canvas = document.createElement('canvas');
            let ctx = canvas.getContext('2d');

            let width = 500;
            let scaleFactor = width / img.width;
            let height = img.height * scaleFactor;

            canvas.width = img.width;
            canvas.height = img.height;
            ctx.drawImage(img, 0, 0);

            let picture = document.createElement('img');
            picture.src = canvas.toDataURL();

            content.appendChild(picture);
            console.log(content);
        };
        img.src = URL.createObjectURL(file);
    } else if (fileType === 'video') {
        const reader = new FileReader();
                reader.onload = function (e) {
                    const base64String = e.target.result;

                    // Display the video
                    let canvas = document.createElement('video');
                    canvas.setAttribute('controls', '');
                    canvas.src = base64String;
                    canvas.style.display = 'block';

                    content.appendChild(canvas);
                };
                reader.readAsDataURL(file);
    } else {
        console.log("Unsupported file type");
    }
};

