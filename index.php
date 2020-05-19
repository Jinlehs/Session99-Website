


<!--add a scroll feature and add insta icon and  comment section and location of events-->

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Session 99</title>
	<link rel="stylesheet" type="text/css" href="CSS/main.css"><!--linking the css-->

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
    	


	</style>

</head>
<!--Title and logo-->
<body id = "title">

	<div class = "navigation-container">
		<img class = "logo-img" src = "images/logo.png" width ="200" height="140" alt="Website logo">
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="#eventscal">Events</a></li>
				<li><a href="team.html">Our Team</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
	</div>

	<br>
	<br>
	<div class = "home_container"> 
		
		<img class = "homeimage1" src = "images/session99.jpg"  width = 100%, height = "900px" >
		<div class = "box">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>


	<br> 
	<br>
	<br>
	<br>
	<br> 
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<div id = "eventscal">
		<div class = "calbox">
			<div class = "cal-col">
				<h1><u>Calender</u></h1>
				<iframe id = "googlecal" src="https://calendar.google.com/calendar/embed?src=4ok3k8k72r58gap6e35sqcveos%40group.calendar.google.com&ctz=America%2FEdmonton" style="border: 0" width="500" height="450" frameborder="0" scrolling="no"></iframe>
			</div>
			<br>
			
			<div class = "text-col">
				<h1>   <u>Upcoming Events</u></h1>
				<br>
				<h3>   1. Annual Session 99 Bboy Event </h3>
				<h3>   2. General Meeting </h3>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>


	<div class ="subscribe">
		<br>
		<br>
		<h1>Subscribe</h1>

		<p>Register in our email list to get our latest updates.</p>

<!--add announcements & about statement & picture-->
	
		<form action="includes/signup.inc.php" method = "POST">
		<input type = "text" name = "first" placeholder="Firstname">
		<br>
		<input type = "text" name = "last" placeholder="Lastname">
		<br>
		<input type = "text" name = "email" placeholder="E-mail">
		<br>
		<input type = "text" name = "uid" placeholder="Username">
		<br>
		<input type = "text" name = "pwd" placeholder="Password">
		<br>
		<button type = "submit" name="submit"> Sign Up </button>

		</form>
		<br>
		<br>
	</div>




<?php 
	$sql = "SELECT * FROM users;";
	$results = mysqli_query($conn, $sql);

?>


</body>
</html>