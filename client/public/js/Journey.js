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

function postXMLRequestForExport() {
    // $.ajax({
    //     url: 'http://localhost/Web-Tech-Project/services/xml/xml-request', 
    //     type: 'POST', 
    //     data: { 
    //         'user_id': '1'
    //     },
    //     success: function(response) { 
    //         console.log(response);
    //     },
    //     error: function(jqXHR, textStatus, errorThrown) { 
    //         console.error(textStatus, errorThrown);
    //     }
    // });
    // nush dc nu recunoaste $.ajax
    let cookie_user_id = getCookie('In_God_We_Trust');

    fetch('http://localhost/Web-Tech-Project/services/xml/xml-request', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'user_id': cookie_user_id
        })
    })
        .then(response => response.text())
        .then(data => {
            // console.log(data);
            let parser = new DOMParser();
            let xmlDoc = parser.parseFromString(data, "application/xml");
            console.log(xmlDoc);
        })
        .catch((error) => console.error('Error:', error));

}