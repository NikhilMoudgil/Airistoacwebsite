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


$phone = $_POST['phone'];

// SQL query to delete the contact from the contactform table based on ID
$sql = "DELETE FROM contactform WHERE phone = $phone";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Contact removed successfully'); 
    window.location.href='managecontect.php';
    </script>";
} else {
    echo "Error: " . $conn->error;
}

// Close connection
$conn->close();
?>