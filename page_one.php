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

    background: url(
'Untitled design.jpg'
				);
                background-attachment: fixed;
                background-size: cover;
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
            max-width: 1300px;
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
        .center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width:  500px;
    height: 500px;
        }
        .event-details {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 50px;
    min-width: 600px;
    margin: 0 auto;
  }

  .event-details h2 {
    color: #333;
    margin-top: 0;
  }

  .event-details p {
    margin: 10px 0;
  }

  .contact-info {
    margin-top: 20px;
  }

  .contact-info p {
    margin-bottom: 5px;
  }

  .contact-info p span {
    font-weight: bold;
  }
        /* Style for the table */
        .table-event {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border: 2px solid #007bff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            font-family: Arial, sans-serif;
        }

        /* Style for the table header */
        .table-event th {
            background-color: #a6ccff;
            color: white;
            padding: 10px;
            text-align: left;
        }

        /* Style for the table cells */
        .table-event td {
            padding: 10px;
            text-align: left;
        }

        /* Alternate row colors */
        .table-event tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        .table-event tr:nth-child(even) {
            background-color: #ffffff;
        }

        /* Header row */
        .table-event .event-header {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        /* Large text for headers */
        .table-event .large-text {
            font-size: 1.1em;
            
        }

        /* Style for input checkbox */
        .table-event input[type="checkbox"] {
            transform: scale(1.5);
            margin: 0;
        }
    </style>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form action="confirm.php" method="post">
<header>
        <h1>NKF</h1>
    </header>
    <nav>
        <a href="tester.php">Home</a>
        <a href="#">About</a>
        <a href="rewards.html">Rewards</a>
        <a href="#">Contact</a>
        
        <?php
        if(isset($_POST["username"]))
        {
            $name = $_POST["username"];
            echo"<a href=login.php>Profile ({$name})</a>";
        }
        else{
            echo"<a href=login.php>Login</a>";
        }
        ?>
    </nav>
    <div class="container">
        <h1>Volunteer Opportunities</h1>
        <p>We are organizing a community cleanup event at the local park and we need volunteers to help with various tasks including picking up trash, planting trees, and maintaining garden beds. This is a great opportunity to give back to the community and make our park a better place for everyone.</p>
        <table>
            <tr>
                <td>
                <div class="event-details">
  
                <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylized Table</title>
    <style>

        .large-text th {
            font-size: 20px;
        }
    </style>
</head>
<body>
<table border="1" class="table-event">
        <tr>
            <td colspan="7" class="event-header"><h2>Event Details</h2></td>
        </tr>
        <tr class="large-text" >
            <th style="color:black;">Date</th>
            <th style="color:black;">Time</th>
            <th style="color:black;">Location</th>
            <th style="color:black;">Coordinator</th>
            <th style="color:black;">Phone</th>
            <th style="color:black;">Email</th>
            <th style="color:black;">Sign Up</th>
        </tr>
        <tr>
            <td>June 15, 2024</td>
            <td>9:00 AM - 12:00 PM</td>
            <td>Central Park, Main Entrance</td>
            <td>John Doe</td>
            <td>555-123-4567</td>
            <td>john.doe@example.com</td>
            <td><input type="checkbox" name="opp[]" value="1"></td>
        </tr>
        <tr>
            <td>July 20, 2024</td>
            <td>10:00 AM - 1:00 PM</td>
            <td>Riverside Park, South Entrance</td>
            <td>Jane Smith</td>
            <td>555-987-6543</td>
            <td>jane.smith@example.com</td>
            <td><input type="checkbox" name="opp[]" value="2"></td>
        </tr>
    </table>

  </div>
</div>

                </td>
                <td>
                    <img src="Unknown.jpeg" class = "center">
                </td>

            </tr>

        </table>
        
        <h3>Slots left: 7</h3>
        <!-- <span style="color: #949494"> -->
        Your friend <b>Shao Yeap</b> and <b>Kyle</b> has signed up for this event!</span>

        <h2>How to Volunteer:</h2>

        <p>If you're interested in volunteering for this event, please fill out the form below:</p>
        
            <label for="message">Message (optional):</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
