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