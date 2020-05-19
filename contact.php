<!DOCTYPE html> 
<html> 
	<head>
		<meta charset="utf-8">
		<title>Contact</title>
		<link rel="stylesheet" type="text/css" href="CSS/contact.css"><!--linking the css-->

		<style>
		nav { 
		background-color: darkslategray;
		list-style-type: none; 
		text-align: center; 
		margin: 0;
		padding: 0;
	
	 	}

		nav ul { 
		margin: 0;
		padding: 20px;
		text-align: right;
	 	}

		nav ul li { 
		display: inline-block;
		font-size: 20px;
		margin: 0 2vw;


		}

		nav ul li a { 
   		color: white;
    	text-decoration: none;
	 	}

		.logo-img { 
		float: left;
    	position: relative;
    	margin: 0px 15px 15px 10px;
    	}

		</style>

	</head>

	<body class = "page">
		<div class = "navigation-container">
			<img class = "logo-img" src = "images/logo.png" width ="200" height="140" alt="Website logo">
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="index.php#eventscal">Events</a></li>
					<li><a href="team.html">Our Team</a></li>
					<li><a href="contact.php">Contact Us</a></li>
				</ul>
			</nav>
		</div>

		<br>
		<br>
		<br>
		<br>

		<main>
			<p>Send E-mail</p>
			<form class = "contact-form" action="contactform.php" method="post">
				<input type="text" name="name" placeholder="Full name">
				<br>
				<input type="text" name="mail" placeholder="Your e-mail">
				<br>
				<input type="text" name="subject" placeholder="Subject">
				<br>
				<textarea name ="message" placeholder="Message"> </textarea>
				<br>
				<button type ="submit" name ="submit">Submit</button>
			</form>
		</main>

		<br>
		<br>
		<br>
		

	</body>

</html>






