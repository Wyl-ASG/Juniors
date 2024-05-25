<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Organization Details</title>
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
            margin: 50px auto;
            background: #fff;
            padding: 20px 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
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
        .file-input {
            padding: 0;
        }
        .file-input label {
            display: block;
            padding: 12px;
            background: #f8f9fa;
            border: 1px dashed #ccc;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .file-input label:hover {
            background: #e2e6ea;
        }
        .file-input input {
            display: none;
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
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="rewards.php">Rewards</a>
        <a href="#">Contact</a>
        
        <?php
        session_start();
        if(isset($_POST["username"]))
        {
            $name = $_POST["username"];
			$_SESSION['username'] = $_POST["username"];
            echo"<a href=profile.php>Profile ({$name})</a>";
        }
		else if(isset($_SESSION["username"]))
        {
            $name = $_SESSION['username'];
            echo"<a href=profile.php>Profile ({$name})</a>";
        }
        else{
            echo"<a href=login.php>Login</a>";
        }
        ?>
    </nav>
<div class="container">
    <h1>Update Organization Details</h1>
    <form action="/update_organization" method="post" enctype="multipart/form-data">
        <label for="org-name">Organization Name:</label>
        <input type="text" id="org-name" name="org_name" value="Current Organization Name" required>

        <label for="org-username">Organization Username:</label>
        <input type="text" id="org-username" name="org_username" value="Current Organization Username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="Current Email" required>

        <label for="contact-number">Contact Number:</label>
        <input type="tel" id="contact-number" name="contact_number" value="Current Contact Number" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="Current Address" required>

        <label for="website">Website:</label>
        <input type="url" id="website" name="website" value="Current Website">

        <label for="poc-name">POC Name:</label>
        <input type="text" id="poc-name" name="poc_name" value="Current POC Name" required>

        <label for="poc-number">POC Number:</label>
        <input type="tel" id="poc-number" name="poc_number" value="Current POC Number" required>

        <label for="logo">Upload Logo:</label>
        <div class="file-input">
            <input type="file" id="logo" name="logo" accept="image/*">
            <label for="logo">Choose file</label>
        </div>

        <button type="submit">Update</button>
    </form>
</div>

</body>
</html>