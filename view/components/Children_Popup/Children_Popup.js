function openPopup() {
    var popup = document.getElementById("popup");
    popup.classList.add("open");
}

function closePopup() {
    var popup = document.getElementById("popup");
    popup.classList.remove("open");

    document.getElementById('name_input').value='';
    document.getElementById('date_input').value='';
    document.getElementById('location_input').value='';
}