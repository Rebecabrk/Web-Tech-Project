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


document.addEventListener('DOMContentLoaded', function () {
    const uploadInput = document.getElementById('upload-image');
    const profileImage = document.getElementById('profile-image');
    const descriptionTextarea = document.getElementById('content');
    const saveButton = document.getElementById('save-description');
    const addCardButton = document.getElementById("addCard");
    const profileCardsDiv = document.getElementById("profile-cards");
    const profileCardTemplate = document.getElementById("profileCardTemplate").content;
    const name = document.getElementById("content-name");

    function scrollToBottom() {
        window.scrollTo({
            top: document.body.scrollHeight,
            behavior: 'smooth' // This makes the scroll smooth
        });
    }
    


    uploadInput.addEventListener('change', function () {
        const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    const base64String = e.target.result;
                    
                    // Display the image
                    const profileImage = document.getElementById('profile-image');
                    profileImage.src = base64String;
                    profileImage.style.display = 'block';

                    // Display the base64 string
                    const base64Output = document.getElementById('base64Output');
                    base64Output.textContent = base64String;
                };
                reader.readAsDataURL(file);
    }
});

    let cookie_user_id = getCookie('In_God_We_Trust');
    
    saveButton.addEventListener('click', function () {
        let data = {
            user_id: cookie_user_id,
            name: name.innerHTML,                //!!!!!!!de adaugat nume
            photo_path: profileImage.src, //!!!!!!!de verificat acest src
            description: descriptionTextarea.innerHTML
        };

        console.log(data);

        let id;

        fetch('http://localhost/Web-Tech-Project/services/ProfileFriends/friends', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                id = data.message;
                alert("Profile succesfully created!");
                location.reload();
            })
            .catch(err => console.error('An error occurred:', err));

            const profileCard = this.closest('.profile-card');
            profileCard.setAttribute('title', id);

            const newProfileCard = profileCardTemplate.cloneNode(true);
            profileCardsDiv.appendChild(newProfileCard);
            scrollToBottom();


    });

});

function deleteButton(friend_id){
    var answer = confirm("Are you sure you want to delete this firend? This action cannot be undone.");
    if (answer == true) {
        fetch('http://localhost/Web-Tech-Project/services/ProfileFriends/friends/' + friend_id, {
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
                    alert('Delete successful');
                    location.reload();
                }
            })
            .catch(error => {
                console.error('There has been a problem with your fetch operation:', error);
            });

    }
}

function deleteProfileCard(button) {
    const card = button.closest('.profile-card');
    if (card) {
        card.remove();
    }
}
