<!-- This allows me to create a session based on a session identifier passed via a GET or POST request -->
<?php
	session_start();
?>

<!-- This is an instruction for the web browser about what version of HTML the page is written in and can decide what language the website will be displayed in aswell -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
<!-- Title defines the documents title that is shown in the web browser  -->
<!-- The stylesheet allows me to put all the css code in one separate file which can be called later if you want a webpage to look a specifc way -->
		<title>Computer Science Revision Website</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="assets/css/main.css">
	</head>
	<body>

<!-- This is the code for the navigation system and is used in a div class wrapper which allows me to link other webpages within the website to be called upon -->

		<nav>
			<div class="wrapper">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="topics.php">Topics</a></li>
					<li><a href="tests.php">Tests</a></li>

<!-- This code basically is used to see if the user is signed in, thus having their 'useruid' and if so they'll have the logout button in the nav bar 
and if not they'll have the sign up and login buttons instead -->

					<?php
						if(isset($_SESSION["useruid"])) {
							echo "<li><a href='includes/logout.inc.php'>Logout</a></li>";
						}
						else {
							echo "<li><a href='signup.php'>Sign Up</a></li>";
							echo "<li><a href='login.php'>Log In</a></li>";
						}
					?>
				</ul>
			</div>
		</nav>
	</body>