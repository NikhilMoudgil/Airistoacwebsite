<?php
include('admindashboard.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Management</title>
<style>
/* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f8ff; /* Light sky blue background color */
    margin: 0;
    padding: 0;
}

.wrapper {
    max-width: 80%;
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 30px;
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color: #1474f0; /* Sky blue header background color */
    color: #fff; /* White text color */
}

tr:hover {
    background-color: #f5f5f5;
}

img {
    max-width: 100px;
    max-height: 100px;
    vertical-align: middle;
}

.action-column {
    width: 80px;
    text-align: center;
}

.action-column input[type='submit'] {
    background-color: #dc3545; /* Red button color */
    color: #fff;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.action-column input[type='submit']:hover {
    background-color: #c82333;
}

</style>
</head>
<body>

<div class="wrapper">
    <?php
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

    $query = "SELECT * FROM addproduct";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Size</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Serial No.</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["type"] . "</td>";
            echo "<td>" . $row["size"] . "</td>";
            echo "<td>" . $row["brand"] . "</td>";
            echo "<td>" . $row["description"] . "</td>";
            echo "<td>" . $row["price"] . "</td>";
            echo "<td>" . $row["srno"] . "</td>";
            echo '<td><img src="uploads/' . $row["pimage"] . '" alt="Product Image"></td>';
            echo "<td class='action-column'><form action='removeproductserver.php' method='post'>";
            echo "<input type='hidden' name='srno' value='" . $row["srno"] . "'>";
            echo "<input type='submit' value='Remove'></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    // Close the connection
    mysqli_close($conn);
    ?>
</div>

</body>
</html>
