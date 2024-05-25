<?php
require_once "common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Rewards</title>
    <style>
        
        body {
            margin: 0;
			padding: 0;

    background: url(
'Untitled design.jpg'
				);
                background-attachment: fixed;
                background-size: cover;
        }
        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        .balance {
            font-size: 24px;
            color: #007bff;
            margin-bottom: 20px;
        }
        .cart {
            font-size: 20px;
            color: #555;
            margin-bottom: 20px;
        }
        .cart-button {
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-bottom: 20px;
        }
        .cart-button:hover {
            background: #0056b3;
        }
        .items, .cart-items, .thank-you {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .item, .cart-item {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 200px;
        }
        .item img, .cart-item img {
            max-width: 100%;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .item h2, .cart-item h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }
        .item p, .cart-item p {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
        }
        .item button, .cart-item button {
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        .item button:hover, .cart-item button:hover {
            background: #0056b3;
        }
        .prompt {
            font-size: 18px;
            color: red;
            margin-top: 20px;
        }
        .hidden {
            display: none;
        }

        .thank-you h2 {
            width: 100%;
            font-size: 24px;
            color: #28a745;
            margin-bottom: 20px;
        }
        .thank-you .summary {
            width: 100%;
            font-size: 20px;
            color: #333;
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
        if(isset($_SESSION["username"]))
        {
            $name = $_SESSION["username"];
            echo"<a href=profile.php>Profile ({$name})</a>";
        }
        else{
            echo"<a href=login.php>Login</a>";
        }
        ?>
        <a href="index.php?test=1">Logout</a>
    </nav>
    <div class="container">
        <h1>Your Rewards</h1>
        <div class="balance">Initial Balance: <span id="initial-balance">1500</span> Points</div>
        <div class="balance">Current Balance: <span id="balance">1500</span> Points</div>
        <div class="cart">Cart: <span id="cart-count">0</span> items</div>
        <button class="cart-button" onclick="viewCart()">View Cart</button>
        <div class="items">
            <div class="item">
                <img src="simplygo.png" alt="Item 1" height="60" width="220">
                <h2>$2 SimplyGo Credit</h2>
                <p>Price: 300 Points</p>
                <button onclick="addToCart('$2 SimplyGo Credit', 300)">Redeem</button>
            </div>
            <div class="item">
                <img src="guardian.png" alt="Item 2" height="60" width="220">
                <h2>$3 Guardian Voucher</h2>
                <p>Price: 450 Points</p>
                <button onclick="addToCart('$3 Guardian Voucher', 450)">Redeem</button>
            </div>
            <div class="item">
                <img src="simplygo.png" alt="Item 3" height="60" width="220">
                <h2>$5 SimplyGo Credit</h2>
                <p>Price: 500 Points</p>
                <button onclick="addToCart('$5 SimplyGo Credit', 500)">Redeem</button>
            </div>
            <div class="item">
                <img src="fairprice.png" alt="Item 4" height="72" width="220">
                <h2>$5 Fairprice Voucher</h2>
                <p>Price: 600 Points</p>
                <button onclick="addToCart('$5 Fairprice Voucher', 600)">Redeem</button>
            </div>
            <div class="item">
                <img src="guardian.png" alt="Item 5" height="60" width="220">
                <h2>$7 Guardian Voucher</h2>
                <p>Price: 750 Points</p>
                <button onclick="addToCart('$7 Guardian Voucher', 750)">Redeem</button>
            </div>
            <div class="item">
                <img src="fairprice.png" alt="Item 6" height="72" width="220">
                <h2>$10 Fairprice Voucher</h2>
                <p>Price: 1000 Points</p>
                <button onclick="addToCart('$10 Fairprice Voucher', 1000)">Redeem</button>
            </div>
        </div>
        <div class="cart-items hidden">
            <!-- Cart items will be dynamically inserted here -->
        </div>
        <div class="thank-you hidden">
            <h2>Thank You for Your Redemption!</h2>
            <div class="summary">
                <!-- Summary of redeemed items will be dynamically inserted here -->
            </div>
        </div>
        <br>
        <button class="cart-button hidden" onclick="backToRewards()">Back to Rewards</button>
        <button class="cart-button hidden" onclick="confirmCart()">Confirm Cart</button>
        <div class="prompt" id="prompt"></div>
    </div>

    <script>
        let initialBalance = 1500;
        let balance = initialBalance;
        let cartCount = 0;
        let cart = [];

        function addToCart(itemName, price) {
            const prompt = document.getElementById('prompt');
            if (balance >= price) {
                balance -= price;
                cartCount++;
                cart.push({ name: itemName, price: price });
                document.getElementById('balance').textContent = balance;
                document.getElementById('cart-count').textContent = cartCount;
                prompt.textContent = '';
            } else {
                prompt.textContent = 'Insufficient balance to redeem this item.';
            }
        }

        function viewCart() {
            document.querySelector('.items').classList.add('hidden');
            document.querySelector('.cart-items').classList.remove('hidden');
            document.querySelector('.thank-you').classList.add('hidden');
            document.querySelector('.cart-button[onclick="viewCart()"]').classList.add('hidden');
            document.querySelector('.cart-button[onclick="backToRewards()"]').classList.remove('hidden');
            document.querySelector('.cart-button[onclick="confirmCart()"]').classList.remove('hidden');
            renderCartItems();
        }

        function backToRewards() {
            document.querySelector('.items').classList.remove('hidden');
            document.querySelector('.cart-items').classList.add('hidden');
            document.querySelector('.thank-you').classList.add('hidden');
            document.querySelector('.cart-button[onclick="viewCart()"]').classList.remove('hidden');
            document.querySelector('.cart-button[onclick="backToRewards()"]').classList.add('hidden');
            document.querySelector('.cart-button[onclick="confirmCart()"]').classList.add('hidden');
        }

        function renderCartItems() {
            const cartItemsContainer = document.querySelector('.cart-items');
            cartItemsContainer.innerHTML = '';
            cart.forEach((item, index) => {
                const cartItem = document.createElement('div');
                cartItem.className = 'cart-item';
                cartItem.innerHTML = `
                    <h2>${item.name}</h2>
                    <p>Price: ${item.price} Points</p>
                    <button onclick="removeFromCart(${index})">Remove</button>
                `;
                cartItemsContainer.appendChild(cartItem);
            });
        }

        function removeFromCart(index) {
            const item = cart[index];
            balance += item.price;
            cartCount--;
            cart.splice(index, 1);
            document.getElementById('balance').textContent = balance;
            document.getElementById('cart-count').textContent = cartCount;
            renderCartItems();
        }

        function confirmCart() {
            document.querySelector('.cart-items').classList.add('hidden');
            document.querySelector('.thank-you').classList.remove('hidden');
            document.querySelector('.cart-button[onclick="backToRewards()"]').classList.add('hidden');
            document.querySelector('.cart-button[onclick="confirmCart()"]').classList.add('hidden');
            displaySummary();
        }

        function displaySummary() {
            const summaryContainer = document.querySelector('.thank-you .summary');
            summaryContainer.innerHTML = '';
            const totalSpent = initialBalance - balance;
            summaryContainer.innerHTML = `
                <p>Initial Balance: ${initialBalance} Points</p>
                <p>Total Spent: ${totalSpent} Points</p>
                <p>Final Balance: ${balance} Points</p>
                <p><b>Items Redeemed:</b></p>
            `;
            cart.forEach(item => {
                summaryContainer.innerHTML += `<p>${item.name} - ${item.price} Points</p>`;
            });
        }
    </script>
</body>
</html>
