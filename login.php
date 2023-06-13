<?php
session_start();
require "config.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Prepare the query with placeholders to prevent SQL injection
    $login_query = "SELECT username, password FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($login_query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Store user data in session variables
        $_SESSION['username'] = $user['username'];

        // Redirect to the dashboard
        header("Location: dashboard.php");
        exit(); // Terminate the script after redirection
    } else {
        // Invalid login, redirect back to the login page
        header("Location: login.html");
        exit(); // Terminate the script after redirection
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirect to the login page if accessed directly without a POST request
    header("Location: login.html");
    exit(); // Terminate the script after redirection
}
?>
