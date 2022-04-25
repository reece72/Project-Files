<!-- This bit of code basically allows me to reuse the header.php file and gain access to the css files without having to put the same code in repeateadly -->
<?php
	include_once 'header.php';
?>

<?php
  //This code allows me to connect to database
  require_once 'includes/dbh.inc.php';

  //This command sets the SQL and allows me to select information from the topics database
  $sql = 'Select * from topics';

  //This code gets the topics SQL
  $result = $conn->query($sql);

  //This code then loops the result from the database and can echo them out
  while($row = $result->fetch_assoc()) {
    '<div class="dropbtn">';
    "<br>". $row["name"]."";
    '</div>';
  }
?>

<!-- This div class allows me to create a dropdown menu where I can store multiple links to other webpages that the user can click on -->
<div class="dropdown">
  <button class="dropbtntopics">Section 1 - Components of a Computer</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=1"..> Chapter 1 - Processor Components </a>
  <a href="/website/chapter.php?chapterID=2"..> Chapter 2 - Processor Performance</a>
  <a href="/website/chapter.php?chapterID=3"..> Chapter 3 - Types of Processors</a>
  <a href="/website/chapter.php?chapterID=4"..> Chapter 4 - Input Devices</a>
  <a href="/website/chapter.php?chapterID=5"..> Chapter 5 - Output Devices</a>
  <a href="/website/chapter.php?chapterID=6"..> Chapter 6 - Storage Devices</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics">Section 2 - Systems Software</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=7"..> Chapter 7 - Functions of an Operating System</a>
  <a href="/website/chapter.php?chapterID=8"..> Chapter 8 - Types of Operating Systems</a>
  <a href="/website/chapter.php?chapterID=9"..> Chapter 9 - The nature of applications</a>
  <a href="/website/chapter.php?chapterID=10"..> Chapter 10 - Programming Language Translators</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics">Section 3 - Software Development</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=11"..> Chapter 11 - Systems Analysis Methods</a>
  <a href="/website/chapter.php?chapterID=12"..> Chapter 12 - Writing and Following Methods</a>
  <a href="/website/chapter.php?chapterID=13"..> Chapter 13 - Programming Paradigms</a>
  <a href="/website/chapter.php?chapterID=14"..> Chapter 14 - Assembly Language</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics">Section 4 - Exchanging Data</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=15"..> Chapter 15 - Compression, Encryption and Hashing</a>
  <a href="/website/chapter.php?chapterID=16"..> Chapter 16 - Database Concepts</a>
  <a href="/website/chapter.php?chapterID=17"..> Chapter 17 - Relational Databases and Normalisation</a>
  <a href="/website/chapter.php?chapterID=18"..> Chapter 18 - Introduction to SQL</a>
  <a href="/website/chapter.php?chapterID=19"..> Chapter 19 - Defining and Updating tables using SQL</a>
  <a href="/website/chapter.php?chapterID=20"..> Chapter 20 - Transaction Processing</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics">Section 5 - Network and Web Technologies</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=21"..> Chapter 21 - Structure of the Internet</a>
  <a href="/website/chapter.php?chapterID=22"..> Chapter 22 - Internet Communication</a>
  <a href="/website/chapter.php?chapterID=23"..> Chapter 23 - Network Security and Threats</a>
  <a href="/website/chapter.php?chapterID=24"..> Chapter 24 - HTML and CSS</a>
  <a href="/website/chapter.php?chapterID=25"..> Chapter 25 - Web Forms and JavaScript</a>
  <a href="/website/chapter.php?chapterID=26"..> Chapter 26 - Search Engine Indexing</a>
  <a href="/website/chapter.php?chapterID=27"..> Chapter 27 - Client-Server and Peer-to-Peer</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics">Section 6 - Data Types</button>
  <div class="dropdown-content">
  <a href="/website/chapter.php?chapterID=28"..> Chapter 28 - Primitive Data Types, Binary and Hexadecimal</a>
  <a href="/website/chapter.php?chapterID=29"..> Chapter 29 - ASCII and Unicode</a>
  <a href="/website/chapter.php?chapterID=30"..> Chapter 30 - Binary Arithmetic</a>
  <a href="/website/chapter.php?chapterID=31"..> Chapter 31 - Floating Point Arithmetic</a>
  <a href="/website/chapter.php?chapterID=32"..> Chapter 32 - Bitwise Manipulation and Masks</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics7">Section 7 - Data Structures</button>
  <div class="dropdown-content7">
  <a href="/website/chapter.php?chapterID=33"..> Chapter 33 - Arrays, Tuples and Records</a>
  <a href="/website/chapter.php?chapterID=34"..> Chapter 34 - Queues</a>
  <a href="/website/chapter.php?chapterID=35"..> Chapter 35 - Lists and Linked Lists</a>
  <a href="/website/chapter.php?chapterID=36"..> Chapter 36 - Stacks</a>
  <a href="/website/chapter.php?chapterID=37"..> Chapter 37 - Hash Tables</a>
  <a href="/website/chapter.php?chapterID=38"..> Chapter 38 - Graphs</a>
  <a href="/website/chapter.php?chapterID=39"..> Chapter 39 - Trees</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics8">Section 8 - Boolean Algebra</button>
  <div class="dropdown-content8">
  <a href="/website/chapter.php?chapterID=40"..> Chapter 40 - Logic Gates and Truth Tables</a>
  <a href="/website/chapter.php?chapterID=41"..> Chapter 41 - Simplifying Boolean Expressions</a>
  <a href="/website/chapter.php?chapterID=42"..> Chapter 42 - Karnaugh Maps</a>
  <a href="/website/chapter.php?chapterID=43"..> Chapter 43 - Adders and D-type flip-flops</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics9">Section 9 - Legal, Moral, Ethical and Cultural Issues</button>
  <div class="dropdown-content9">
  <a href="/website/chapter.php?chapterID=44"..> Chapter 44 - Computing Related Legislation</a>
  <a href="/website/chapter.php?chapterID=45"..> Chapter 45 - Ethical, Moral and Cultural Issues</a>
  <a href="/website/chapter.php?chapterID=46"..> Chapter 46 - Privacy and Censorship</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics10">Section 10 - Computational Thinking</button>
  <div class="dropdown-content10">
  <a href="/website/chapter.php?chapterID=47"..> Chapter 47 - Thinking Abstractly</a>
  <a href="/website/chapter.php?chapterID=48"..> Chapter 48 - Thinking Ahead</a>
  <a href="/website/chapter.php?chapterID=49"..> Chapter 49 - Thinking Procedurally</a>
  <a href="/website/chapter.php?chapterID=50"..> Chapter 50 - Thinking Logically, Thinking Concurrently</a>
  <a href="/website/chapter.php?chapterID=51"..> Chapter 51 - Problem Recognition</a>
  <a href="/website/chapter.php?chapterID=52"..> Chapter 52 - Problem Solving</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics11">Section 11 - Programming Techniques</button>
  <div class="dropdown-content11">
  <a href="/website/chapter.php?chapterID=53"..> Chapter 53 - Programming Basics</a>
  <a href="/website/chapter.php?chapterID=54"..> Chapter 54 - Selection</a>
  <a href="/website/chapter.php?chapterID=55"..> Chapter 55 - Iteration</a>
  <a href="/website/chapter.php?chapterID=56"..> Chapter 56 - Subroutines and Recurison</a>
  <a href="/website/chapter.php?chapterID=57"..> Chapter 57 - Use of an IDE</a>
  <a href="/website/chapter.php?chapterID=58"..> Chapter 58 - Use of Object-Oriented Techniques</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtntopics12">Section 12 - Algorithms</button>
  <div class="dropdown-content12">
  <a href="/website/chapter.php?chapterID=59"..> Chapter 59 - Analysis and Design of Algorithms</a>
  <a href="/website/chapter.php?chapterID=60"..> Chapter 60 - Searching Algorithms</a>
  <a href="/website/chapter.php?chapterID=61"..> Chapter 61 - Bubble Sort and Insertion Sort</a>
  <a href="/website/chapter.php?chapterID=62"..> Chapter 62 - Merge Sort and Quick Sort</a>
  <a href="/website/chapter.php?chapterID=63"..> Chapter 63 - Graph Traversal ALgorithms</a>
  <a href="/website/chapter.php?chapterID=64"..> Chapter 64 - Optimisation Algorithms</a>
  </div>
</div>


<?php
	include_once 'footer.php';
?>