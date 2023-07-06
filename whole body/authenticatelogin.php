<?php
session_start();

// Simulate user credentials
$validUsername = "admin";
$validPassword = "password";

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Validate user credentials
if ($username === $validUsername && $password === $validPassword) {
    // Authentication successful
    $_SESSION['username'] = $username;
    header("Location: homelogin.php"); // Redirect to home page
    exit();
} else {
    // Authentication failed
    header("Location: login.php?error=1"); // Redirect back to login with error flag
    exit();
}
?>