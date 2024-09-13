<?php
include ('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Place</title>
    <style>
        /* General styles */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            /* Light sky blue background color */
        }

        .wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .product-card {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 30px;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            text-align: left;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            border-radius: 8px;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .product-card p {
            margin: 5px 0;
            color: #333333;
            /* Darker gray text color */
        }

        .product-card h2 {
            margin: 10px 0;
            color: #1474f0;
            /* Sky blue heading color */
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            /* Semi-transparent black overlay */
        }

        .modal-content {
            background-color: #ffffff;
            margin: 10% auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 90%;
            position: relative;
            transition: all 0.3s ease;
        }

        .close {
            color: #888888;
            /* Light gray close button color */
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            cursor: pointer;
        }

        .close:hover {
            color: #555555;
            /* Darker gray close button color on hover */
        }

        .modal-content img {
            border-radius: 8px;
            width: 100%;
            height: auto;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .modal-content p {
            margin: 10px 0;
            font-size: 16px;
            color: #333333;
            /* Darker gray text color */
        }

        .modal-content .product-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #1474f0;
            /* Sky blue product name color */
        }

        .modal-content .price {
            font-size: 20px;
            font-weight: bold;
            color: #1a9349;
            /* Dark green price color */
            margin-top: 15px;
        }

        .modal-content .buy-button {
            background-color: #1474f0;
            /* Sky blue button background color */
            border: none;
            color: #ffffff;
            /* White button text color */
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: block;
            width: fit-content;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
            margin-top: 20px;text-align:center; border:20px ;

        }

        .modal-content .buy-button:hover {
            background-color: #1252a2;

        }

        /* hero Css */
        .hero {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            margin-top: 60px;
            border: solid 1px #333333;
        }

        .hero h1 {
            max-width: 60%;
            font-family: 'Roboto', sans-serif;
            font-size: 54px;
            /* Increased font size */
            font-weight: bolder;
            color: #333;
            overflow: hidden;
            /* Ensure text doesn't overflow */
            white-space: nowrap;
            /* Prevent wrapping */
            animation: type 5s steps(50) infinite, fade-in 2s, typing 5s steps(50) infinite;
            /* Added typing animation */
            /* Added darker colors representing sea wave or cool breeze */
            background: linear-gradient(to right, #1e4269, #3f88c5, #69a9d2, #a2c1d8, #7fb9d1, #4e9bb8, #1e4269);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
        }




        @keyframes typing {
            from {
                width: 0;
            }

            to {
                width: 100%;
                /* Typing effect till full width */
            }
        }

        .hero img {
            max-width: 40%;
            height: auto;
        }

        @keyframes type {
            from {
                width: 0;
            }

            to {
                width: 100%;
                /* Typing effect till full width */
            }
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                /* Start with opacity 0 */
            }

            to {
                opacity: 1;
                /* Fade in to full opacity */
            }
        }
    </style>
</head>

<body>
    <div class="hero">
        <h1>Welcome to Airisto MarketPlace.<br>
        </h1>
        <img src="pimages/marketplacehero.jpg">
    </div>
    <!-- Modal HTML structure -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <img id="modalImage" src="" alt="Product Image">
            <div id="productDetails" class="product-details"></div>
            <button class="buy-button" id="buyButton">Buy Now</button> <!-- Buy Now button added to modal -->
        </div>
    </div>

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

        // SQL query to fetch all products from the addproduct table
        $query = "SELECT * FROM addproduct";
        $result = mysqli_query($conn, $query);

        // Check if there are any records
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="product-card"
                    onclick="openModal('<?php echo $row['pimage']; ?>', '<?php echo $row['name']; ?>', '<?php echo $row['type']; ?>', '<?php echo $row['size']; ?>', '<?php echo $row['brand']; ?>', '<?php echo $row['description']; ?>', '<?php echo $row['price']; ?>', '<?php echo $row['srno']; ?>')">
                    <img src="uploads/<?php echo $row["pimage"]; ?>" alt="Product Image">
                    <h2>
                        <?php echo $row["name"]; ?>
                    </h2>
                    <p>Type:
                        <?php echo $row["type"]; ?>
                    </p>
                    <p>Size:
                        <?php echo $row["size"]; ?>
                    </p>
                </div>
                <?php
            }
        } else {
            echo "0 results";
        }

        // Close the connection
        mysqli_close($conn);
        ?>
    </div>

    <script>
        // JavaScript to handle the modal popup
        var modal = document.getElementById("myModal");

        // Function to open modal and populate with product details
        function openModal(image, name, type, size, brand, description, price, srno) {
            var modalContent = document.getElementById("productDetails");
            var modalImage = document.getElementById("modalImage");
            modalImage.src = "uploads/" + image;
            modalContent.innerHTML = `
        <h2 class="product-name">${name}</h2>
        <p>Type: ${type}</p>
        <p>Size: ${size}</p>
        <p>Brand: ${brand}</p>
        <p>Description: ${description}</p>
        <p class='price'>&#8377 ${price}</p>
        <p>Serial No.: ${srno}</p>
    `;
            modal.style.display = "block";
            // Set the "onclick" attribute of the Buy Now button to call the "redirectToOrderForm" function with the product serial number
            document.getElementById("buyButton").setAttribute("onclick", "redirectToOrderForm(" + srno + ")");
        }

        // Function to redirect to order form page with product serial number
        function redirectToOrderForm(srno) {
            window.location.href = "order.php?srno=" + srno;
        }

        // Function to close modal
        function closeModal() {
            modal.style.display = "none";
        }

        // Close the modal when user clicks outside the modal content
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>

</body>

</html>
<?php
include ('footer.php')
    ?>