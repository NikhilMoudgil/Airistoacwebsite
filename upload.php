<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Check if file was uploaded without errors
    if (isset($_FILES['pimage']) && $_FILES['pimage']['error'] == 0) {
        $imageFile = $_FILES['pimage'];

        // Check if the file is an image
        $fileType = exif_imagetype($imageFile['tmp_name']);
        if (in_array($fileType, [IMAGETYPE_JPEG, IMAGETYPE_PNG, IMAGETYPE_GIF])) {
            // Assigning variables for file properties
            $fileTempPath = $imageFile['tmp_name'];
            $fileExtension = strtolower(pathinfo($imageFile['name'], PATHINFO_EXTENSION));

            // Generating a unique filename
            $newFileName = uniqid("IMG-", true) . '.' . $fileExtension;

            // Define the upload path
            $uploadDirectory = "uploads/";
            $uploadPath = $uploadDirectory . $newFileName;

            // Create uploads directory if it doesn't exist
            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0777, true);
            }

            // Move the file from temporary directory to target upload directory
            if (move_uploaded_file($fileTempPath, $uploadPath)) {
                echo "File successfully uploaded: " . $newFileName;
            } else {
                echo "Error: There was a problem uploading your file. Please try again.";
            }
        } else {
            echo "Error: Only JPG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Error: File upload error.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
     echo "<td><form action='removeproductserver.php' method='post'><input type='hidden' name='srno' value='" . $row["srno"] . "'><input type='submit' value='Remove'></form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}