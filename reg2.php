<?php

// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "ATIWEBs";

// Create a connection to the database
$conn = mysqli_connect( $hostname = 'localhost', $username = 'root', $password = ' ', $database = 'ATIWEBS')
//("localhost", "$root", " ", "ATIWEBS");

// Check the connection
//if (!$conn) {
    //die("Connection failed: " . mysqli_connect_error());
//}
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$courseID = $_POST['course'];
$gender = $_POST['gender'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert data into the Lecturer table
$sql = "INSERT INTO Lecturer (Name, Email, Designation, CourseID, Gender, Password) 
        VALUES ('$name', '$email', '$designation', '$courseID', '$gender', '$password')";

// Execute the SQL query (Add your error handling)
$result = mysqli_query($conn, $sql);

// Redirect to login.php after successful registration
if ($result) {
    header("Location: login 1.php");
    exit();
} else {
    echo "Registration failed!";
}

// Close the database connection
mysqli_close($conn);
?>
