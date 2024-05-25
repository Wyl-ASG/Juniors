<?php
require_once "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organization Registration</title>
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
            width: 90%;
            max-width: 600px;
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
        .file-input label {
            display: block;
            padding: 12px;
            background: #f8f9fa;
            border: 1px dashed #ccc;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s ease;
            border-radius: 5px;
            font-size: 16px;
            margin-bottom: 20px;
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
    $error = '';
    if(isset($_POST['submit']))
    {
        $dao = new OrgDao();
        $user = new Org($_POST['username'],$_POST['name'],$_POST['contact_number'],$_POST['email'],$_POST['poc_name'],$_POST['poc_number'],$_POST['password'],$_POST['website'],$_POST['org_description'],'img');
        if($dao->registerOrg($user))
        {
            $_SESSION["name"] = $user->getOrg_name();
            header("location:organization_home.php");
            exit;
        }
        else{
            $error= "failed, please try again";
        }

        
    }
    ?>
    </nav>
<div class="container">
    <h1><?php echo$error ?></h1>
    <h1>Organization Registration</h1>
    <form action="organization_register.php" method="post" enctype="multipart/form-data">
        <label for="org-name">Organization Name:</label>
        <input type="text" id="org-name" name="name" required>

        <label for="org-username">Organization Username:</label>
        <input type="text" id="org-username" name="username" required>

        <label for="org-email">Email:</label>
        <input type="email" id="org-email" name="email" required>

        <label for="org-password">Password:</label>
        <input type="password" id="org-password" name="password" required>

        <label for="org-confirm-password">Confirm Password:</label>
        <input type="password" id="org-confirm-password" name="confirm_password" required>

        <label for="org-contact-number">Contact Number:</label>
        <input type="tel" id="org-contact-number" name="contact_number" required>

        <label for="org-address">Address:</label>
        <input type="text" id="org-address" name="address" required>

        <label for="org-website">Website:</label>
        <input type="url" id="org-website" name="website">

        <label for="org-poc-name">POC Name:</label>
        <input type="text" id="org-poc-name" name="poc_name" required>

        <label for="org-poc-number">POC Number:</label>
        <input type="tel" id="org-poc-number" name="poc_number" required>

        <label for="org-description">Description:</label>
        <input type="text" id="org-description" name="org_description" required>

        <div class="file-input">
            <label for="org-logo">Upload Logo:</label>
            <input type="file" id="org-logo" name="logo" accept="image/*" required>
        </div>

        <button name=submit type="submit">Register</button>
    </form>
</div>

</body>
</html>