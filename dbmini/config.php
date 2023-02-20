<?php
$servername = "localhost";
$username = "s642021130";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,'db642021130');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8");
//echo "Connected successfully";
?>