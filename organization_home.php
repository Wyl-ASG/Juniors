<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer Homepage</title>
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
            max-width: 800px;
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
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            max-width: 200px;
            height: auto;
        }
        .details {
            margin-bottom: 20px;
        }
        .details label {
            font-weight: bold;
            color: #555;
        }
        .update-btn {
            text-align: center;
            margin-bottom: 20px;
        }
        .update-btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .update-btn a:hover {
            background-color: #0056b3;
        }
        .create-btn {
            text-align: center;
            margin-bottom: 20px;
        }
        .create-btn a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .create-btn a:hover {
            background-color: #0056b3;
        }
        .event-box {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .event-box h2 {
            margin-bottom: 5px;
        }
        .event-details {
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Welcome <?= $_POST['username']?></h1>

    <div class="logo">
        <img src='PA Logo 2015 (PNG).png' alt="Organization Logo">
    </div>

    <div class="details">
        <center>


        <label for="org-username">Organization Username:</label>
        <div id="org-username">PA</div>
        <br>

        <label for="org-email">Email:</label>
        <div id="org-email">pa.123@gmail.com</div>
        <br>

        <label for="org-desc">About Us:</label>
        <div id="org-desc"></div>
        </center>
        <!-- Add other details as needed -->
    </div>

    <div class="update-btn">
        <a href="update.html">Update Details</a>
    </div>

    <div class="create-btn">
        <a href="create_event.html">Create Event</a>
    </div>

    <h2>Active Events</h2>
    <!-- Active Events Section -->
    <div class="event-box">
        <h2>Event Name</h2>
        <div class="event-details">
            <p>Event ID: Event ID Value</p>
            <p>Location: Event Location Value</p>
            <p>Date: Event Date Value</p>
            <p>Start Time: Event Start Time Value</p>
            <p>End Time: Event End Time Value</p>
            <p>Capacity: Event Capacity Value</p>
            <p>Description: Event Description Value</p>
        </div>
    </div>
    <?php
    if(isset($_POST['create_event']))
    {
        echo "
        <div class=event-box>
        <h2>{$_POST['event_name']}</h2>
        <div class=event-details>
            <p>Event ID: {$_POST['event_id']}</p>
            <p>Location: {$_POST['location']}</p>
            <p>Date: {$_POST['date']}</p>
            <p>Start Time: {$_POST['start_time']}</p>
            <p>End Time: {$_POST['end_time']}</p>
            <p>Capacity: {$_POST['capacity']}</p>
            <p>Description: {$_POST['description']}</p>
        </div>
    </div>
        ";
    }
    ?>
    <!-- End of Active Events Section -->

    <h2>Past Events</h2>
    <!-- Past Events Section -->
    <div class="event-box">
        <h2>Event Name</h2>
        <div class="event-details">
            <p>Event ID: Event ID Value</p>
            <p>Location: Event Location Value</p>
            <p>Date: Event Date Value</p>
            <p>Start Time: Event Start Time Value</p>
            <p>End Time: Event End Time Value</p>
            <p>Capacity: Event Capacity Value</p>
            <p>Description: Event Description Value</p>
        </div>
    </div>
</div>

</body>
</html>