<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['id'])) {
    header("Location: dashboard.php");
    exit();
}

require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $confirm_password = $_POST["confirm_password"];

    if ($confirm_password != $password) {
        echo "Passwords do not match";
        exit();
    }

    // Check if the username or email already exists in the database
    $check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $num_rows = mysqli_stmt_num_rows($stmt);
    mysqli_stmt_close($stmt);

    if ($num_rows > 0) {
        echo "Username or email already exists";
        exit();
    }

    // Insert the new user into the database
    $insert_query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_close($stmt);
        header("Location: login.html");
        exit();
    } else {
        echo "Oops! Something went wrong. Please try again later.";
        exit();
    }
} else {
    header("Location: register.html");
    exit();
}
?>
