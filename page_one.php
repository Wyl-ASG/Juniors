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
  .table-event
  {
    min-width: 700px;
    text-align: center
  }
  .large-text {
    font-size: 20px;
    
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
        <h1>Volunteer Opportunities</h1>
        <p>We are organizing a community cleanup event at the local park and we need volunteers to help with various tasks including picking up trash, planting trees, and maintaining garden beds. This is a great opportunity to give back to the community and make our park a better place for everyone.</p>
        <table>
            <tr>
                <td>
                <div class="event-details">
  
  <table border=1 class="table-event" >
    <tr>
        <td colspan="7"><h1>Event Details</h1></td>
    </tr>
    <tr class="large-text">
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
        <th>coordinator</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Sign up</th>
    </tr>
    <tr>
        <th>June 15, 2024</th>
        <th>9:00 AM - 12:00 PM</th>
        <th>Central Park, Main Entrance</th>
        <th>John Doe</th>
        <th>555-123-4567</th>
        <th>john.doe@example.com</th>
        <th><input type="checkbox" name=opp[] value = 1></th>
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
        
        <h2>How to Volunteer:</h2>
        <p>If you're interested in volunteering for this event, please fill out the form below:</p>
        
            <label for="message">Message (optional):</label><br>
            <textarea id="message" name="message" rows="4" cols="50"></textarea><br>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
