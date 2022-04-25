<?php
  session_start();
?>

<head>
  	<link rel="stylesheet" href="/website/assets/css/main.css">
</head>

<header>
  <h2>Section 12 - Algorithms Quiz</h2>
</header>

<?php
	if (!empty($_POST)) {
		$ans1 = $_POST['ans1'];
		$ans2 = $_POST['ans2'];
		$ans3 = $_POST['ans3'];
		$ans4 = $_POST['ans4'];
		$ans5 = $_POST['ans5'];
		$correct = 0;
			if ($ans1 == 'method for finding an element within a list') {
				$correct++;	
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans2 == 'in-place sorting algorithm') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans3 == 'sequences data by continuously merging items in the list') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans4 == 'basic algorithm for arranging a string of numbers or other elements in the correct order') {
				$correct++;				
			} else {
				echo "<p>You are wrong</p>";
			}
			if ($ans5 == 'sorting algorithm in which the elements are transferred one at a time to the right position') {
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
	<form action="test12.php" method="post">
		<p>What is a linear search?</p>
		<input type="varchar" name="ans1">
		<p>What is a quick sort?</p>
		<input type="varchar" name="ans2">
		<p>What is a merge sort?</p>
		<input type="varchar" name="ans3">
		<p>What is a bubble sort?</p>
		<input type="varchar" name="ans4">
		<p>What is a insertion sort?</p>
		<input type="varchar" name="ans5">
		<input type="submit">
	</form>