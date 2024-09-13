<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airisto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve adminname and password from the form
$adminname = $_POST['adminname'];
$password = $_POST['password'];

// SQL query to check if adminname and password match
$sql = "SELECT * FROM admin WHERE adminname='$adminname' AND password_1='$password'";
$result = $conn->query($sql);

// Check if there is a match
if ($result->num_rows > 0) {
    // Login successful
    header("location: admindashboard.php");
    exit(); // It's a good practice to exit after redirection
} else {
    // Login failed
    echo "Error: Invalid adminname or password.";
}

$conn->close();
?>
