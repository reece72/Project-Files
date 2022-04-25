<?php
  session_start();
?>

<?php 
    // Connects to the database
    require_once 'includes/dbh.inc.php';

    // This code uses a query to get the id from the tests database
    $testtopics = $_GET['id'];
    $sql = 'Select * from tests where id = '.$testtopics.' limit 1';
    $result = $conn->query($sql);

    // This code then gets the result from the database
    if ($result->num_rows > 0) {
        // Then it outputs and displays the data of each row with the name and content which will be displayed on the webpage
        $row = $result->fetch_assoc();
          echo '<h1>'.$row["name"].'</h1>';
          echo '<h1>'.$row["content"].'</h1>';
        
      } else {
        echo "invalid test";
      }
      $conn->close();

?>

<?php
	include_once 'footer.php';
?>