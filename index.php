<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
	<style>
		/* Styling the body */
		body {
			margin: 0;
			padding: 0;

    background: url(
'Untitled design.jpg'
				);
                background-attachment: fixed;
                background-size: cover;
		}

		/* Styling section, giving background
			image and dimensions */
		section {
			width: 100%;
			height: 100vh;

		}

		/* Styling the left floating section */
		section .leftBox {
			width: 100%;

			padding: 50px;
			box-sizing: border-box;
		}

		/* Styling the background of 
			left floating section */
		section .leftBox .content {
			color: #fff;
			background: rgba(0, 0, 0, 0.5);
			padding: 40px;
			transition: .5s;
		}

		/* Styling the hover effect 
			of left floating section */
		section .leftBox .content:hover {
			background: #e91e63;
		}

		/* Styling the header of left 
			floating section */
		section .leftBox .content h1 {
			margin: 0;
			padding: 0;
			font-size: 50px;
			text-transform: uppercase;
		}

		/* Styling the paragraph of 
			left floating section */
		section .leftBox .content p {
			margin: 10px 0 0;
			padding: 0;
		}

		/* Styling the three events section */
		section .events {
			position: relative;

			height: 80%;
			background: rgba(0, 0, 0, 0.5);
			box-sizing: border-box;
		}

		/* Styling the links of 
		the events section */
		section .events ul {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			margin: 0;
			padding: 40px;
			box-sizing: border-box;
		}

		/* Styling the lists of the event section */
		section .events ul li {
			list-style: none;
			background: #fff;
			box-sizing: border-box;
			height: 200px;
			margin: 15px 0;
		}

		/* Styling the time class of events section */
		section .events ul li .time {
			position: relative;
			padding: 20px;
			background: white;
			box-sizing: border-box;
			width: 30%;
			height: 100%;
			float: left;
			text-align: center;
			transition: .5s;
			border: 3px solid black
		}
		section .events ul li .time img {
			height: 100%;
  			width: 100%;
		}
		/* Styling the hover effect
			of events section */
		section .events ul li:hover .time {
			background: #e91e63;
		}

		/* Styling the header of time 
			class of events section */
		section .events ul li .time h2 {
			position: absolute;
			margin: 0;
			padding: 0;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color: #fff;
			font-size: 60px;
			line-height: 30px;
		}

		/* Styling the texts of time 
		class of events section */
		section .events ul li .time h2 span {
			font-size: 30px;
		}

		/* Styling the details 
		class of events section */
		section .events ul li .details {
			padding: 20px;
			background: #fff;
			box-sizing: border-box;
			width: 70%;
			height: 100%;
			float: left;
		}

		/* Styling the header of the 
		details class of events section */
		section .events ul li .details h3 {
			position: relative;
			margin: 0;
			padding: 0;
			font-size: 22px;
		}

		/* Styling the lists of details 
		class of events section */
		section .events ul li .details p {
			position: relative;
			margin: 10px 0 0;
			padding: 0;
			font-size: 16px;
		}

		/* Styling the links of details
		class of events section */
		section .events ul li .details a {
			display: inline-block;
			text-decoration: none;
			padding: 10px 15px;
			border: 1.5px solid #262626;
			margin-top: 8px;
			font-size: 18px;
			transition: .5s;
		}

		/* Styling the details class's hover effect */
		section .events ul li .details a:hover {
			background: #e91e63;
			color: #fff;
			border-color: #e91e63;
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
            max-width: 1200px;
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
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .center{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width:  500px;
    height: 500px;
    padding: 20px 0
        }
        .search-container {
            position: relative;
            width: 300px;
            margin: 20px;
        }

        .search-box {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .dropdown {
            position: absolute;
            width: 100%;
            max-height: 200px;
            overflow-y: auto;
            background: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: none;
            z-index: 1;
        }

        .dropdown li {
            padding: 10px;
            cursor: pointer;
        }

        .dropdown li:hover {
            background: #f4f4f4;
        }
        .search-box {
            margin: 20px;
            padding: 10px;
            width: 300px;
        }

        .events ul {
            list-style-type: none;
            padding: 0;
        }

        .events li {
            padding: 10px;
            background: #f4f4f4;
            margin: 10px 0;
            border-radius: 5px;
        }
        .event-title {
            font-weight: bold;
            font-size: 30px;
        }
        .event-block {
            padding: 10px;
            background: #f4f4f4;
            margin: 10px 0;
            border-radius: 5px;
        }
	</style>
</head>

<body>

<header>
        <h1>Volunteering Opportunities</h1>
    </header>
    <nav>
        <a href="index.php">Home</a>
        <a href="#">About</a>
        <a href="rewards.php">Rewards</a>
        <a href="#">Contact</a>
        <?php
		if(isset($_GET['test']))
		{
			$_SESSION = [];
		}
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
		<a href="index.php?test=1">Logout</a>
    </nav>
	<section>
        
		<div class="leftBox">
			<div class="content">
				<h1>
					Volunteering organisation
				</h1>
				<p>
					With the idea of imparting programming
					knowledge, Mr. Sandeep Jain, an IIT
					Roorkee alumnus started a dream,
					GeeksforGeeks. Whether programming
					excites you or you feel stifled,
					wondering how to prepare for
					interview questions or
					how to ace data structures and
					algorithms, GeeksforGeeks is a
					one-stop solution. With every
					tick of time, we are adding arrows
					in our quiver. From articles on
					various computer science subjects
					to programming problems for practice,
					from basic to premium courses, from
					technologies to entrance examinations,
					we have been building ample content
					with superior quality. In a short
					span, we have built a community of
					1 Million+ Geeks around the world, 20,000+
					Contributors and 500+ Campus Ambassadors
					in various colleges across the nation.
					Our success stories include a lot of
					students who benefitted in their
					placements and landed jobs at tech
					giants. Our vision is to build a gigantic
					network of geeks and we are only a
					fraction of it yet.
				</p>
			</div>
            

            
		</div>
        <input type="text" id="searchBox" class="search-box" placeholder="Search events...">
        
        <div class="events" id="eventList">
			<ul>
				<li>
					<div class="time">
						<h2>
							<img src=Unknown.jpeg width="100%" height="100%">
						</h2>
					</div>
					<div class="details">
                    <div class="event-title">
							NKF
                    </div>
						<p>
							With the idea of imparting programming
							knowledge, Mr. Sandeep Jain, an IIT
							Roorkee alumnus started a dream,
							GeeksforGeeks. Whether programming
							excites you or you feel stifled,
							how to ace data structures and
							algorithms, GeeksforGeeks is a
							one-stop solution.
						</p>
						<a href="page_one.php">View Details</a>
					</div>
					<div style="clear: both;"></div>
				</li>
				<li>
					<div class="time">
						<h2>
                        <img src=Unknown.jpeg>
						</h2>
					</div>
					<div class="details">
                    <div class="event-title">
							Willing hearts
                    </div>
						<p>
							With the idea of imparting programming
							knowledge, Mr. Sandeep Jain, an IIT
							Roorkee alumnus started a dream,
							GeeksforGeeks. Whether programming
							excites you or you feel stifled,
							how to ace data structures and
							algorithms, GeeksforGeeks is a
							one-stop solution.
						</p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
				<li>
					<div class="time">
						<h2>
                        <img src=Unknown.jpeg>
						</h2>
					</div>
					<div class="details">
                    <div class="event-title">
							Red Cross
                    </div>  
						<p>
							With the idea of imparting programming
							knowledge, Mr. Sandeep Jain, an IIT
							Roorkee alumnus started a dream,
							GeeksforGeeks. Whether programming
							excites you or you feel stifled,
							how to ace data structures and
							algorithms, GeeksforGeeks is a
							one-stop solution.
						</p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
                <li>
					<div class="time">
						<h2>
                        <img src=Unknown.jpeg>
						</h2>
					</div>
					<div class="details">
                    <div class="event-title">
							SPCA
                    </div>  
						<p>
							With the idea of imparting programming
							knowledge, Mr. Sandeep Jain, an IIT
							Roorkee alumnus started a dream,
							GeeksforGeeks. Whether programming
							excites you or you feel stifled,
							how to ace data structures and
							algorithms, GeeksforGeeks is a
							one-stop solution.
						</p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
			</ul>
		</div>

<script>
    // JavaScript to filter the event list
    document.getElementById('searchBox').addEventListener('keyup', function() {
        let filter = this.value.toUpperCase();
        let ul = document.getElementById("eventList");
        let li = ul.getElementsByTagName('li');

        for (let i = 0; i < li.length; i++) {
            let text = li[i].textContent || li[i].innerText;
            if (text.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    });
</script>
		
	</section>

</body>

</html>
