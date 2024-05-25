<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Opportunity</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 1600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, p {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
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
