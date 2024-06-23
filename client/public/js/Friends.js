document.addEventListener('DOMContentLoaded', function() {
    const uploadInput = document.getElementById('upload-image');
    const profileImage = document.getElementById('profile-image');
    const descriptionTextarea = document.getElementById('profile-description');
    const saveButton = document.getElementById('save-description');

    // Load profile picture from file input
    uploadInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    // Save description to server (PHP)
    saveButton.addEventListener('click', function() {
        const description = descriptionTextarea.value;
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'save-description.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log('Description saved successfully.');
            }
        };
        xhr.send('description=' + encodeURIComponent(description));
    });
});
