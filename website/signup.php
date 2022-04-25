<?php
	include_once 'header.php';
?>

<header>
  <h1>Create your Account</h1>
</header>

<!-- This code is a signup-form and allows the user to create their account by having placeholders to type the specific information in like username and password -->
		<section class="signup-form">
			<h1>Sign Up</h1>
			<form action="includes/signup.inc.php" method="post">
				<input type="text" name="name" placeholder="Full Name...">
				<input type="text" name="email" placeholder="Email...">
				<input type="text" name="uid" placeholder="Username...">
				<input type="password" name="pwd" placeholder="Password...">
				<input type="password" name="pwdrepeat" placeholder="Repeat Password...">
				<button type="submit" name="submit">Sign Up - Please enter all your details!</button>
			</form>
		</section>

<!-- This code checks if there is any error with the information and then displays it with an error message -->
		<?php
			if (isset($_GET["error"])) {
				if ($_GET["error"] == "emptyinput") {
					echo "<p>Fill in all fields!</p>";
				}
				else if ($_GET["error"] == "invaliduid") {
					echo "<p>Choose a proper username!</p>";
				}
				else if ($_GET["error"] == "invalidemail") {
					echo "<p>Choose a proper email!</p>";
				}
				else if ($_GET["error"] == "passwordsdontmatch") {
					echo "<p>Passwords dont match!</p>";
				}
				else if ($_GET["error"] == "stmtfailed") {
					echo "<p>Something went wrong, please try again!</p>";
				}
				else if ($_GET["error"] == "usernameistaken") {
					echo "<p>Username or email is taken, please choose a different one!</p>";
				}
				else if ($_GET["error"] == "none") {
					echo "<p>You have signed up!</p>";
				}
			}
		?>

<?php
	include_once 'footer.php';
?>