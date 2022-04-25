<!-- This is the home page of the website and is used to display information about the website to attract potential users to the website -->
<?php
	include_once 'header.php';
?>

<header>
  <h1>A-Level Computer Science Revision Website</h1>
</header>
		
		<section class="index-intro">
			<?php
				if (isset($_SESSION["useruid"])) {
				echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
				}
			?>
			
			<h1>A-Level Computer Science</h1>

			<p>This website is an A-Level Computer Science Revision Website, created by an A-Level Computer Science student who knows how hard it is to revise for the various challenging Computer Science Topics and I have decided to create this website to allow others to reuse the notes that have helped me learn about the different Computer Science topics.
			Within this website, I have created an account system for users to create their profiles to keep track of their revision and to help them on what they need to revise next. Within this website, I have set out a simple yet effective navigation system located at the top of the website which allows you to easily navigate between your account and the other webpages. I have then created a topics page where you can go chapter by chapter to see what Computer Science topics you need to revise and then I have created a tests web page which allows the user to have a quick test to test your knowledge of what you have learned in each of the sections. </p>
			</section>	

<?php
	include_once 'footer.php';
?>