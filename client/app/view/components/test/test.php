<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide to Interaction</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .todo-container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 50px 0;
        }
        .header h1 {
            font-size: 3em;
            color: #333;
        }
        .todo-card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px 0;
            padding: 20px;
            transition: transform 0.2s;
        }
        .todo-card:hover {
            transform: scale(1.05);
        }
        .todo-card h2 {
            font-size: 2em;
            color: #007bff;
        }
        .todo-card p {
            font-size: 1.2em;
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="todo-container">
        <div class="header">
            <h1>What can you do here?</h1>
        </div>
        <div class="todo-card">
            <h2>Dashboard</h2>
            <p>Go insert all the data of your child selected from the navbar to help us make your job much easier!</p>
        </div>
        <div class="todo-card">
            <h2>Journal</h2>
            <p>Write your latest thoughts about your family.</p>
        </div>
        <div class="todo-card">
            <h2>The Journey</h2>
            <p>After you insert some data of each child, we're going to make you a really nice timeline of your family.</p>
        </div>
    </div>
</body>
</html>
