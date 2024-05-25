<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>(the organisation)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
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
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .content {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
        <h1>V(the organisation)</h1>
    </header>
    <nav>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <h1>Volunteer Opportunity: Help Clean the Local Park</h1>
        <p>We are organizing a community cleanup event at the local park and we need volunteers to help with various tasks including picking up trash, planting trees, and maintaining garden beds. This is a great opportunity to give back to the community and make our park a better place for everyone.</p>
        <h2>Event Details:</h2>
        <ul>
            <li><strong>Date:</strong> June 15, 2024</li>
            <li><strong>Time:</strong> 9:00 AM - 12:00 PM</li>
            <li><strong>Location:</strong> Central Park, Main Entrance</li>
            <li><strong>Contact:</strong> John Doe (volunteer coordinator) - email: john.doe@example.com, phone: 555-123-4567</li>
        </ul>
        <h2>How to Volunteer:</h2>
        <p>If you're interested in volunteering for this event, please fill out the form below:</p>
        <form action="volunteer_submission.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone" required><br>
            <label for="message">Message (optional):</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
