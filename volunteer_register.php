<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volunteer Registration</title>
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
            width: 50%;
            background: #fff;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-right: auto;
            margin-left: auto;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
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
        input, button {
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input:focus {
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
    <h1>Volunteer Registration</h1>
    <form action="/volunteer_register" method="post">
        <label for="volunteer-name">Full Name:</label>
        <input type="text" id="volunteer-name" name="name" required>

        <label for="volunteer-email">Email:</label>
        <input type="email" id="volunteer-email" name="email" required>

        <label for="volunteer-password">Password:</label>
        <input type="password" id="volunteer-password" name="password" required>

        <label for="volunteer-confirm-password">Confirm Password:</label>
        <input type="password" id="volunteer-confirm-password" name="confirm_password" required>

        <label for="volunteer-phone">Phone Number:</label>
        <input type="tel" id="volunteer-phone" name="phone" required>

        <label for="volunteer-address">Address:</label>
        <input type="text" id="volunteer-address" name="address" required>

        <button type="submit">Register</button>
    </form>
</div>

</body>
</html>