// const recentEntries = document.getElementById('recentEntries');
// window.onload = function () {

//     fetch('../model/Journal_model.php')
//         .then(response => response.json())
//         .then(data => {
//             data.forEach(function (item, index) {
//                 let entryDiv = document.createElement('div');
//                 entryDiv.classList.add('entry');

//                 let entryTitleDiv = document.createElement('div');
//                 entryTitleDiv.classList.add('entry_title');
//                 entryTitleDiv.innerHTML = item.title;
//                 entryTitleDiv.style.color = 'black';
//                 entryTitleDiv.style.padding = '2% 0% 1.5% 0%';

//                 let entryContentDiv = document.createElement('div');
//                 entryContentDiv.classList.add('entry_content');
//                 entryContentDiv.innerHTML = item.text.substring(0, 70) + '...';
//                 entryContentDiv.style.color = 'black';
//                 entryContentDiv.style.padding = "0.5% 0% 2% 0%"

//                 let newAnchor = document.createElement('a');
//                 newAnchor.href = 'TextEditor.php?pattern=' + item.pattern + '&memoryId=' + item.id;

//                 newAnchor.appendChild(entryTitleDiv);
//                 newAnchor.appendChild(entryContentDiv);
//                 entryDiv.appendChild(newAnchor);
//                 recentEntries.appendChild(entryDiv);
//             });
//         })
//         .catch(error => console.error('Error:', error));

//     document.getElementById('sidebar').classList.add('hidden_sidenavbar');
// }

function callTextEditorService(id, pattern){
    let url = 'http://localhost/Web-Tech-Project/services/TextEditor/memories/' + id;
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
        let next_url = "TextEditor.php?pattern=" + pattern + "&memoryId=" + id;
        window.location.href = next_url;
    })
    .catch(error => {
        console.error('There has been a problem with your fetch operation:', error);
    });
}