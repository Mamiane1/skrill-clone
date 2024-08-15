<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_email']) || !isset($_SESSION['user_password'])) {
    // Redirect to login page if not logged in
    header('Location: index.html');
    exit();
}

// Store user data in variables
$user_email = htmlspecialchars($_SESSION['user_email']);
$user_password = htmlspecialchars($_SESSION['user_password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Dashboard</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    <div class="sidebar">
        <h2>Skrill Dashboard</h2>
		  <!-- Add your logo image here -->
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Transactions</a>
        <a href="#">Settings</a>
        <a href="index.html">Log Out</a>
    </div>
    <div class="main-content">
        <div class="welcome-container">
            <h2>Welcome!</h2>
            <p>Email: <?php echo $user_email; ?></p>
            <p>Password: <?php echo $user_password; ?></p>
        </div>
    </div>
</body>
</html>



