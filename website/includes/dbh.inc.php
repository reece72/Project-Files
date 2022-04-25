<!-- This code allows me to link to the database and pull external data and code into the website -->

<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpwebsite";


$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}