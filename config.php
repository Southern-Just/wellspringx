<?php
$servername = "localhost";
$username = "root";
$password = "sajoh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, "wellspringx");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?> 