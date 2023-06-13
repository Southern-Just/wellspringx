<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$servername = "localhost";
$username = "root";
$password = "sajoh";
$dbname = "wellspringx";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO messages (name, email, message) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    header("Location:index.php");
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
