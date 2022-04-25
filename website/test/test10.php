<?php
  session_start();
?>

<head>
  	<link rel="stylesheet" href="/website/assets/css/main.css">
</head>

<header>
  <h2>Section 10 - Computational Thinking Quiz</h2>
</header>
	
<?php
	if (!empty($_POST)) {
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$ans5 = $_POST['ans5'];
		$correct = 0;
			if ($ans1 == 'involves taking that complex problem and breaking it down into a series of smaller, more manageable problems') {
				$correct++;	
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans2 == 'by creating a model about the problem') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans3 == 'you look at potential problems that the project may have') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans4 == 'use a procedure to carry out a squence of steps') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans5 == 'identify where decisions need to be made') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			echo "<p>You got $correct correct!</p>";
			$grade = ($correct / 5) * 100;
			if ($correct == 0) {
				echo"<p>You got 0/5!</p>";
			} elseif ($correct == 1) {
				echo "<p>You got 1/5!</p>";
			} elseif ($correct == 2) {
				echo "<p>You got 2/5!</p>";
			} elseif ($correct == 3) {
				echo "<p>You got 3/5!</p>";
			} elseif ($correct == 4) {
				echo "<p>You got 4/5!</p>";
			} else {
				echo "<p>Great job! You aced it! 5/5</p>";
			}
		}

?>
	<form action="test10.php" method="post">
		<p>What is computational thinking?</p>
		<input type="varchar" name="ans1">
		<p>How do you think abstractly?</p>
		<input type="varchar" name="ans2">
		<p>How do you think ahead?</p>
		<input type="varchar" name="ans3">
		<p>How do you think procedurally?</p>
		<input type="varchar" name="ans4">
		<p>How do you think logically?</p>
		<input type="varchar" name="ans5">
		<input type="submit">
	</form>