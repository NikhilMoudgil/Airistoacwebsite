<?php
include('admindashboard.php');
include('connection.php');
?>
<?php
if(isset($_POST['submit'])) {  
    $name = $_POST['name'];
    $type = $_POST['type']; 
    $size = $_POST['size']; 
    $brand = $_POST['brand']; 
    $description = $_POST['description'];
    $price = $_POST['price'];  
    $srno = $_POST['srno'];

    // Check if image is uploaded
    if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] === UPLOAD_ERR_OK) {
        $name = $_POST['name'];
        $type = $_POST['type'];
        $size = $_POST['size'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $srno = $_POST['srno'];
    
        $pimage = $_FILES['pimage']['name'];
        $tempname = $_FILES['pimage']['tmp_name'];
        $folder = "uploads/" . $pimage;
    
        if ($name != "" && $pimage != '' && $type != "" && $size != "" && $brand != "" && $description != "" && $price != "" && $srno != '') {
            // Extract file extension
            $fileExtension = strtolower(pathinfo($pimage, PATHINFO_EXTENSION));
    
            // Validate file extension
            $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
    
            // Generate a unique filename
            $newFileName = uniqid("IMG-", true) . '.' . $fileExtension;
    
            // Directory for uploads
            $uploadDirectory = "uploads/";
            $uploadPath = $uploadDirectory . $newFileName;
    
            // Move the uploaded file to the upload directory
            if (move_uploaded_file($tempname, $uploadPath)) {
                // Image uploaded successfully, now insert data into database
                $query = "INSERT INTO addproduct VALUES('$name','$newFileName','$type','$size','$brand','$description','$price','$srno')";
                $data = mysqli_query($conn, $query);
                if ($data) {
                    echo "Data inserted";
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else {
            echo "All fields are required";
        }
    } else {
        echo "Please upload an image";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refurbished AC Inventory</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container-fluid {
            margin: 0 auto;
            max-width: 800px;
            padding: 20px;
        }

        .form-container {
            border: 1px solid #333;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-container h2 {
            margin-top: 0;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="file"] {
            width: calc(100% - 22px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="form-container">
        <h2>Refurbished AC Inventory</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Product Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" id="type" name="type" required>
            </div>
            <div class="form-group">
                <label for="size">Size Of Air Conditioner:</label>
                <input type="text" id="size" name="size" required>
            </div>
            <div class="form-group">
                <label for="brand">Brand:</label>
                <input type="text" id="brand" name="brand" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="5" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="srno">Product Serial No.:</label>
                <input type="text" id="srno" name="srno" required>
            </div>
            <div class="form-group">
                <label for="pimage">Product Image:</label>
                <input type="file" id="pimage" name="pimage" accept="image/*">
            </div>
            <input type="submit" class="btn-primary" name="submit" id="submit" value="Submit">
        </form>
    </div>
</div>

</body>
</html>
