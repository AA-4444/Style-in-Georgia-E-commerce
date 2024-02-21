<?php
session_start(); // Always start the session

// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: php/user_profile.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <!-- Link to your CSS file -->
</head>
<body>
    <div class="profile-container">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['first_name']); ?>!</h1>
        <p>Name: <?php echo htmlspecialchars($_SESSION['first_name']) . ' ' . htmlspecialchars($_SESSION['last_name']); ?></p>
        <!-- You can display more user information here -->
        <a href="../logout.php">Logout</a>

    </div>
</body>
</html>
