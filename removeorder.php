<?php
include('admindashboard.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Orders Dashboard</title>
<style>
/* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff; /* Light sky blue background color */
    margin: 0;
    padding: 0;
}

.wrapper {
    max-width: 1200px;
    margin: 50px auto;
    padding: 20px;
}

table {
    width: 100%;
    border-collapse: collapse;
}

table th, table td {
    border: 1px solid #ddd; /* Light gray border */
    padding: 10px;
    text-align: left;
}

table th {
    background-color: #1474f0; /* Sky blue header background color */
    color: #fff; /* White text color */
}

table td {
    background-color: #fff; /* White cell background color */
    color: #333; /* Dark gray text color */
}

table tr:nth-child(even) td {
    background-color: #f9f9f9; /* Light gray background for even rows */
}

table tr:hover td {
    background-color: #def2ff; /* Light blue background on hover */
}

.remove-btn {
    background-color: #ff6363; /* Red button background color */
    border: none;
    color: #fff; /* White text color */
    padding: 8px 16px;
    font-size: 14px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.remove-btn:hover {
    background-color: #ff4646; /* Darker red on hover */
}
</style>
</head>
<body>

<div class="wrapper">
    <?php
    // Database connection parameters
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

    // Fetch data from the orders table
    $select_query = "SELECT srno, contact_number, email, order_id , order_date FROM orders";
    $result = $conn->query($select_query);

    if ($result->num_rows > 0) {
        // Output data of each row
        echo "<table>
        <tr>
        <th>Sr. No.</th>
        <th>Order ID</th>
        <th>Contact Number</th>
        <th>Email</th>
        <th>Order Date</th>
        <th>Action</th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
            <td>".$row["srno"]."</td>
            <td>".$row["order_id"]."</td>
            <td>".$row["contact_number"]."</td>
            <td>".$row["email"]."</td>
            <td>".$row["order_date"]."</td>
            <td>
                <form action='removeorderserever.php' method='post'>
                    <input type='hidden' name='srno' value='" . $row["srno"] . "'>
                    <input type='submit' class='remove-btn' value='Remove'>
                </form>
            </td>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No orders found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

</body>
</html>
