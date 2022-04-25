<?php
  session_start();
?>

<?php 
    // Connects to the database
    require_once 'includes/dbh.inc.php';

    // It will use a query to get the chapterID from the pages database
    $chapter = $_GET['chapterID'];
    $sql = 'Select * from pages where chapterID = '.$chapter.' limit 1';
    $result = $conn->query($sql);

    // It then retrieves the result from the database
    if ($result->num_rows > 0) {
      
        // Then it outputs the data from each row related to the specific webpage
        $row = $result->fetch_assoc();
          echo '<h1>'.$row["chapterTitle"].'</h1>';
          echo '<p>'.$row["chapterContent"].'</p>';
        
      } else {
        echo "invalid chapter";
      }
      $conn->close();

?>

<?php
	include_once 'footer.php';
?>