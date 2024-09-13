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


// Get the srno of the product from the form submission
$srno = $_POST['srno'];

// SQL query to delete the product from the addproduct table based on srno
$sql = "DELETE FROM contactform
 WHERE srno = $srno";

if ($conn->query($sql) === TRUE) {
    echo "Product removed successfully";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>
