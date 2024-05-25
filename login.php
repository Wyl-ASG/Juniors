<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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
            background: url(
'Untitled design.jpg'
				);
                background-attachment: fixed;
                background-size: cover;
        }
        .container {
            display: flex;
            justify-content: space-between;
            background: #fff;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 90%;
            max-width: 1200px;

        }
        .login-section {
            width: 45%;
            background: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
            border: 2px solid black;
            margin: 0 20px;
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
        .register-link {
            text-align: center;
            margin-top: 10px;
            color: #007bff;
        }
        .register-link a {
            color: #007bff;
            text-decoration: none;
        }
        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-section">
        <h1>Volunteer Login</h1>
        <form action="tester.php" method="post">
            <label for="volunteer-username">Username:</label>
            <input type="text" id="volunteer-username" name="username" required>

            <label for="volunteer-password">Password:</label>
            <input type="password" id="volunteer-password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Not a member? <a href="volunteer_register.php">Register</a></p>
        </div>
    </div>
    <div class="login-section">
        <h1>Organization Login</h1>
        <form action="organization_home.php" method="post">
            <label for="org-username">Username:</label>
            <input type="text" id="org-username" name="username" required>

            <label for="org-password">Password:</label>
            <input type="password" id="org-password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="register-link">
            <p>Not a member? <a href="organization_register.php">Register</a></p>
        </div>
    </div>
</div>

</body>
</html>