<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';


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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Retrieve form data
    $srno = $_POST['srno'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];

    // Insert the order details into the database
    $insert_query = "INSERT INTO orders (srno, contact_number, email) VALUES ('$srno', '$contact_number', '$email')";
    if ($conn->query($insert_query) === TRUE) {
        
        // Send confirmation message to the user using PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'airistoservices@gmail.com';                     // SMTP username
            $mail->Password   = 'fklc adkz isjv oews';                         // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('airistoservices@gmail.com'); // Replace with your email address
            $mail->addAddress($email); // Add recipient

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = 'Order Confirmation';
            $mail->Body    = 'Your order has been placed successfully. We will contact  you for further details';
            
            $mail->send();
            echo "<script>alert('Order Successful'); 
        window.location.href='removeorder.php';
        </script>";
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Error: " . $insert_query . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
