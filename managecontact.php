<?php
include('admindashboard.php')
?>


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

// Check if form submitted for deletion
if(isset($_POST['delete_phone'])) {
    $delete_phone = $_POST['delete_phone'];
    
    // SQL query to delete row where phone equals $delete_phone
    $sql_delete = "DELETE FROM contactform WHERE phone = '$delete_phone'";
    if ($conn->query($sql_delete) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// SQL query to fetch all contact details from the contactform table
$sql = "SELECT * FROM contactform";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='responsive-table'>";
    echo "<tr><th>Name</th><th>Email</th><th>Phone</th><th>Location</th><th>Contact Method</th><th>Contact Time</th><th>Message</th><th>Remove</th></tr>";
    // Output data of each row
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["contactmethod"] . "</td>";
        echo "<td>" . $row["contacttime"] . "</td>";
        echo "<td>" . $row["message"] . "</td>";
        // Add remove button with contact ID as parameter
        echo "<td><form action='' method='post'><input type='hidden' name='delete_phone' value='" . $row["phone"] . "'><input type='submit' value='Remove'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

// Close connection
$conn->close();
?>

<style>
    /* Responsive Table Styles */
    .responsive-table {
        width: 80%;
        border-collapse: collapse;
        border: 1px solid #ddd;
        margin-top: 20px;
        margin-left: 10%;
        margin-right: 10%;
    }

    .responsive-table th, .responsive-table td {
        padding: 8px;
        border: 1px solid #ddd;
    }

    .responsive-table th {
        background-color: #f2f2f2;
    }

    /* Responsive adjustments */
    @media screen and (max-width: 767px) {
        /* Smartphone */
        .responsive-table td, .responsive-table th {
            display: block;
            text-align: center;
        }

        .responsive-table td:first-child {
            border-top: 1px solid #ddd;
        }

        .responsive-table td:last-child {
            border-bottom: 1px solid #ddd;
        }
    }

    @media screen and (min-width: 768px) and (max-width: 991px) {
        /* Tablets */
        .responsive-table td, .responsive-table th {
            padding: 12px;
        }
    }

    @media screen and (min-width: 992px) and (max-width: 1199px) {
        /* Laptops */
        .responsive-table td, .responsive-table th {
            padding: 16px;
        }
    }

    @media screen and (min-width: 1200px) {
        /* Desktops */
        .responsive-table td, .responsive-table th {
            padding: 20px;
        }
    }
</style>
