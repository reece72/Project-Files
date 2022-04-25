<?php
	include_once 'header.php';
?>

<header>
  <h1>Log in to your Account</h1>
</header>

<!-- This code is a signup-form and allows the user to login to their account by having placeholders to type the specific information in like username and password -->
		<section class="signup-form">
			<h1>Log In</h1>
			<form action="includes/login.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username/Email...">
				<input type="password" name="pwd" placeholder="Password...">
				<button type="submit" name="submit">Log In - Please enter all your details!</button>
			</form>
		</section>

<!-- This code checks if there is any error with the information and then displays it with an error message -->
		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if ($_GET["error"] == "wronglogin") {
					echo "<p>Incorrect login, please try again!</p>";
				}
			}
		?>

<?php
	include_once 'footer.php';
?>