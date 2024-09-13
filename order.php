
<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Your order processing code here (same as before)
    // ...
} else {
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

    // Retrieve product details based on srno
    if(isset($_GET['srno'])) {
        $srno = $_GET['srno'];
        $query = "SELECT * FROM addproduct WHERE srno = '$srno'";
        $result = mysqli_query($conn, $query);

        // Check if product exists
        if (mysqli_num_rows($result) > 0) {
            // Fetch product details
            $row = mysqli_fetch_assoc($result);
            $product_name = $row["name"];
            $product_price = $row["price"];
            // Close the connection
            mysqli_close($conn);
        } else {
            echo "Product not found";
            exit();
        }
    } else {
        echo "Product serial number is not provided";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .product-details h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }

        .product-details p {
            font-size: 18px;
            color: #555;
            margin-bottom: 20px;
        }

        .order-form h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .order-form form {
            margin-top: 10px;
        }

        label {
            display: block;
            font-size: 18px;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            width:fit-content;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #1a9349;
            border: none;
            color: #fff;
            padding: 12px 24px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #147437;
        }
    </style>
    <title>Order Form</title>
</head>
<body>
    <div class="container">
    <!-- Display product details -->
    <div class="product-details">
        <h2><?php echo $product_name; ?></h2>
        <p>Price: $<?php echo $product_price; ?></p>
        <!-- You can display other product details here -->
    </div>

    <!-- Display order form -->
    <div class="order-form">
        <form action="order_process.php" method="post">
            <input type="hidden" name="srno" value="<?php echo $srno; ?>">
            <label for="contact_number">Contact Number:</label><br>
            <input type="text" id="contact_number" name="contact_number" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>
            <input type="submit"  href="marketplace.php" name="submit" value="Submit Order">
        </form>
    </div>
</div>
</body>
</html>