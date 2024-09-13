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

if(isset($_POST['srno']) && !empty($_POST['srno'])) { // Corrected the variable name '$srno' to 'srno'
    // Prepare and bind the SQL statement with a parameter
    $sql = "DELETE FROM addproduct WHERE srno = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $srno); // Assuming srno is an integer, use "i" for integer, "s" for string

    // Set parameter values and execute the statement
    $srno = $_POST['srno'];
    if ($stmt->execute()) {
        echo "<script>alert('Product removed successfully'); 
        window.location.href='removeproduct.php';
        </script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
