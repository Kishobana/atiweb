<?php
// dashboard.php
// Check if the lecturer is logged in and display the dashboard

// Start the session
session_start();

// Check if the lecturer is not logged in, redirect to login.php
if (!isset($_SESSION['email'])) {
    header("Location: login 1.php");
    exit();
}

// Display dashboard with lecturer details
?>

<html>
<head>
  
</head>
<body>
    <h2>Lecturer Dashboard </h2>
    <br>
    <h1>Welcome, <?php echo $_SESSION['email']; ?>!</h1>
    <!-- Add other dashboard content here -->
<p>
<a href="logout.php">Logout</a>

</body>
</html>


