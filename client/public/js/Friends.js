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
    const descriptionTextarea = document.getElementById('profile-description');
    const saveButton = document.getElementById('save-description');

    // Load profile picture from file input
    uploadInput.addEventListener('change', function () {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    let cookie_user_id = getCookie('In_God_We_Trust');

    saveButton.addEventListener('click', function () {
        let data = {
            user_id: cookie_user_id,
            // name: name,                //!!!!!!!de adaugat nume
            photo_path: profileImage.src, //!!!!!!!de verificat acest src
            description: descriptionTextarea
        };

        fetch('http://localhost/Web-Tech-Project/services/ProfileFriends/friends', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                if (data.message == "Success") {
                    console.log('TextEditor insert API returned Success');
                    window.location.href = '../../app/controller/Journal.php';
                } else {
                    console.log('API did not return Success');
                    alert('Something went wrong');
                }
            })
            .catch(err => console.error('An error occurred:', err));
    });
});
