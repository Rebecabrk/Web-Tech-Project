<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Card with Popup</title>
<style>
  .card {
    width: 300px;
    height: 200px;
    background-color: #f0f0f0;
    border-radius: 10px;
    padding: 20px;
    position: relative;
  }
  
  .card-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .popup {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.9);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  .overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
  }
</style>
</head>
<body>

<div class="card">
  <h2>This is a card</h2>
  <button class="card-button">Open Popup</button>
  <div class="popup">
    <h3>Popup Content</h3>
    <p>This is some popup content.</p>
    <button class="close-button">Close</button>
  </div>
</div>

<div class="overlay"></div>

<script>
  const cardButton = document.querySelector('.card-button');
  const popup = document.querySelector('.popup');
  const overlay = document.querySelector('.overlay');
  const closeButton = document.querySelector('.close-button');
  
  cardButton.addEventListener('click', () => {
    popup.style.display = 'block';
    overlay.style.display = 'block';
  });
  
  closeButton.addEventListener('click', () => {
    popup.style.display = 'none';
    overlay.style.display = 'none';
  });
</script>

</body>
</html>
