<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Profile</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .container {
            display: flex;
            flex-direction: row;
            max-width: 1200px;
            width: 100%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .profile-section {
            flex: 2;
            margin-right: 20px;
        }
        .achievements-section {
            flex: 1;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .back-link {
            text-align: left;
            margin-bottom: 20px;
        }
        .back-link a {
            text-decoration: none;
            color: #007bff;
            font-size: 16px;
        }
        .back-link a:hover {
            text-decoration: underline;
        }
        .profile-info, .events-section {
            margin-bottom: 20px;
        }
        .profile-info div, .event-box, .achievement-box {
            margin-bottom: 10px;
        }
        .profile-info label, .event-box label, .achievement-box label {
            font-weight: bold;
            color: #555;
        }
        .event-box, .achievement-box {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            position: relative;
        }
        .cancel-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 5px 10px;
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
        }
        .achievement-box {
            display: flex;
            align-items: center;
        }
        .achievement-box img {
            width: 90px;
            height: 90px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="profile-section">
        <div class="back-link">
            <a href="index.php">&larr; Back to Homepage</a>
        </div>

        <h1>session username<?$_SESSION['username']?></h1>

        <h2>
        <div class="profile-info">
            <div>
                <label for="points">Points:</label>
                <span id="points"><b>1500</b></span>
            </div>
            <div>
                <label for="total-hours">Total Hours:</label>
                <span id="total-hours"><b>50</b></span>
            </div>
        </div>
        </h2>

        <div class="events-section">
            <h3>Upcoming Enrolled Events</h3>
            <!-- Upcoming Events Section -->
            <div class="event-box">
                <button class="cancel-btn">Cancel</button>
                <label>Event Name:</label>
                <span>Beach Cleanup</span><br>
                <label>Date:</label>
                <span>2024-06-01</span><br>
                <label>Location:</label>
                <span>Beach</span><br>
                <label>Hours:</label>
                <span>3</span>
            </div>
            <div class="event-box">
                <button class="cancel-btn">Cancel</button>
                <label>Event Name:</label>
                <span>Tree Planting</span><br>
                <label>Date:</label>
                <span>2024-06-15</span><br>
                <label>Location:</label>
                <span>Park</span><br>
                <label>Hours:</label>
                <span>4</span>
            </div>
            <!-- End of Upcoming Events Section -->

        </div>

        <div class="events-section">
            <h3>Past Volunteered Events</h3>
            <!-- Past Events Section -->
            <div class="event-box">
                <label>Event Name:</label>
                <span>Soup Kitchen</span><br>
                <label>Date:</label>
                <span>2024-05-01</span><br>
                <label>Location:</label>
                <span>Community Center</span><br>
                <label>Hours Volunteered:</label>
                <span>5</span>
            </div>
            <div class="event-box">
                <label>Event Name:</label>
                <span>Fundraiser</span><br>
                <label>Date:</label>
                <span>2024-04-20</span><br>
                <label>Location:</label>
                <span>Town Hall</span><br>
                <label>Hours Volunteered:</label>
                <span>6</span>
            </div>
            <!-- End of Past Events Section -->

        </div>
    </div>

    <div class="achievements-section">
        <h2>Achievements</h2>
        <!-- Achievements Section -->
        <div class="achievement-box">
            <img src="pic2.png" alt="Achievement Icon">
            <div>
                <label>Title:</label>
                <span>Volunteer of the Month</span><br>
                <label>Date:</label>
                <span>May 2024</span>
            </div>
        </div>
        <div class="achievement-box">
            <img src="pic1.png" alt="Achievement Icon">
            <div>
                <label>Title:</label>
                <span>100 Hours of Service</span><br>
                <label>Date:</label>
                <span>April 2024</span>
            </div>
        </div>
        <!-- End of Achievements Section -->

    </div>
</div>

</body>
</html>
