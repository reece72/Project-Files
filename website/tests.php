<?php
	include_once 'header.php';
?>

<?php

  // Connects to the database
  require_once 'includes/dbh.inc.php';

  //Set the SQL from tests database
  $sql = 'Select * from tests';

  //Gets the result from the database
  $result = $conn->query($sql);

  //Then it loops and displays the information
  while($row = $result->fetch_assoc()) {
    '<div class="dropbtn">';
    "<br>". $row["name"]."";
    '</div>';
  }
?>

<!-- This is another dropdown menu for the test section of the website -->
<div class="dropdown">
  <button class="dropbtntests">Section 1 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=1"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests">Section 2 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=2"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests">Section 3 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=3"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests">Section 4 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=4"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests">Section 5 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=5"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests">Section 6 Topic Quiz</button>
  <div class="dropdown-content">
  <a href="/website/testtopics.php?id=6"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests7">Section 7 Topic Quiz</button>
  <div class="dropdown-content7">
  <a href="/website/testtopics.php?id=7"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests8">Section 8 Topic Quiz</button>
  <div class="dropdown-content8">
  <a href="/website/testtopics.php?id=8"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests9">Section 9 Topic Quiz</button>
  <div class="dropdown-content9">
  <a href="/website/testtopics.php?id=9"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests10">Section 10 Topic Quiz</button>
  <div class="dropdown-content10">
  <a href="/website/testtopics.php?id=10"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests11">Section 11 Topic Quiz</button>
  <div class="dropdown-content11">
  <a href="/website/testtopics.php?id=11"..>Take the Test</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntests12">Section 12 Topic Quiz</button>
  <div class="dropdown-content12">
  <a href="/website/testtopics.php?id=12"..>Take the Test</a>
  </div>
</div>