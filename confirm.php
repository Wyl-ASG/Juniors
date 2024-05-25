<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Participation Confirmation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 50%;
            background: #fff;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }
        .event-details {
            text-align: left;
            margin: 20px 0;
        }
        .event-details h2 {
            color: #007bff;
            margin-bottom: 10px;
        }
        .event-details p {
            color: #333;
            margin: 5px 0;
        }
        button {
            padding: 12px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        button:hover {
            background: #0056b3;
        }
        .confirmation-message {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Confirmation Section -->
        <div class="confirmation-section">
            <h1>Confirm Your Attendance</h1>
            <p>Are you sure you want to participate in the event?</p>
            <button onclick="confirmAttendance()">Confirm Attendance</button>
        </div>

        <!-- Confirmation Message Section -->
        <div class="confirmation-message">
            <h1>Thank You for Your Interest!</h1>
            <p>We have received your request to participate in the event. Here are the details:</p>
            <div class="event-details">
                <h2>Event Name: Charity Run 2024</h2>
                <p><strong>Date:</strong> June 20, 2024</p>
                <p><strong>Time:</strong> 8:00 AM - 12:00 PM</p>
                <p><strong>Location:</strong> Central Park, New York</p>
            </div>
            <p>If you have any questions, please contact us at <a href="mailto:info@example.com">info@example.com</a>.</p>
            <button onclick="window.location.href='test.html'">Back to Home</button>
        </div>
    </div>

    <script>
        function confirmAttendance() {
            document.querySelector('.confirmation-section').style.display = 'none';
            document.querySelector('.confirmation-message').style.display = 'block';
        }
    </script>
</body>
</html>
