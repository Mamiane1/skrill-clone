<?php
session_start(); // Start the session to store user data

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // In this version, we simply accept any login details as correct
    $_SESSION['user_email'] = $email;
    $_SESSION['user_password'] = $password;

    // Redirect to a page where you can access the entered details
    header("Location: welcome.php");
    exit();
}
?>


  
