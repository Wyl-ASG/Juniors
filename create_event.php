<?php
require_once "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

    background: url(
'Untitled design.jpg'
				);
                background-attachment: fixed;
                background-size: cover;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input, select, button {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus, select:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
        button {
            background: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
            font-size: 18px;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #0056b3;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            width: 100%;
        }
        nav {
            background-color: #666;
            padding: 10px 0;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1></h1>
    </header>
    <nav>
        <a href="tester.php">Home</a>
        <a href="#">About</a>
        <a href="rewards.php">Rewards</a>
        <a href="#">Contact</a>
        
        <?php
        if(isset($_SESSION["name"]))
        {
            $name = $_SESSION["name"];
            echo$name;
        }
        else{
            echo"<a href=login.php>Login</a>";
        }
        ?>
    </nav>
<div class="container">
    <h1>Create Event</h1>
    <form action="organization_home.php" method="post">
        <label for="event-id">Event ID:</label>
        <input type="text" id="event-id" name="event_id" required>

        <label for="event-name">Event Name:</label>
        <input type="text" id="event-name" name="event_name" required>

        <label for="organiser-id">Organiser ID:</label>
        <input type="text" id="organiser-id" name="organiser_id" required>

        <label for="location">Location:</label>
        <select id="location" name="location" required>
            <option value="">Select Location</option>
            <option value="North">North</option>
            <option value="South">South</option>
            <option value="East">East</option>
            <option value="West">West</option>
            <option value="Central">Central</option>
        </select>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="start-time">Start Time:</label>
        <input type="time" id="start-time" name="start_time" required>

        <label for="end-time">End Time:</label>
        <input type="time" id="end-time" name="end_time" required>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="5" required></textarea>
        <br>
        <button type="submit" name = create_event>Create Event</button>
    </form>
</div>

</body>
</html>