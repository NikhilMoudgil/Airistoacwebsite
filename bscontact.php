<?php
include('header.php');
include('connection.php');
?>
<?php
if(isset($_POST['submit']))
{  
 $name = $_POST['name']; 
 $email = $_POST['email']; 
 $ph= $_POST['phone']; 
 $loc= $_POST['location']; 
 $cm= $_POST['contactmethod'];
 $ct= $_POST['contacttime'];  
 $msg= $_POST['message']; 
 if($name!="" && $email!="" && $ph!="" && $loc!="" && $cm!=""&& $ct!=""&& $msg!="") 
 { 
 $query= "INSERT INTO contactform  VALUES('$name','$email','$ph','$loc','$cm','$ct','$msg')"; 
 $data= mysqli_query($conn,$query); 
 { 
    echo"Data inserted"; 
   } 
   } 
   else{ 
    echo"All fields are required"; 
   } 
   } 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Airisto AC Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin : 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .wrapper {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
           font-style: italic;
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 18px;
            color: #555;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="tel"]
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-repeat: no-repeat;
            background-position: right 10px center;
            padding-right: 30px;
        }

        textarea {
            height: 150px;
            resize: vertical;
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

        .contact-details {
            margin-top: 30px;
            
        }

        .contact-details h3 {
            font-size: 20px;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-details p {
            font-size: 16px;
            color: #555;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Contact Us - Airisto AC Service</h2>
        <form action="" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
            
            <label for="location">Location:</label>
            <select id="location" name="location">
                <option>Mohali</option>
                <option>Chandigarh</option>
                <option>Kharar</option>
                <option>New Chandigarh</option>
                <option>Panchkula</option>
            </select>
            
            <label for="contactmethod">Preferred Contact Method:</label>
            <select id="contactmethod" name="contactmethod">
                <option>Email</option>
                <option>Phone No.</option>
                <option>Whatsapp</option>
            </select>
            
            <label for="contacttime">Preferred Contact Time:</label>
            <select id="contacttime" name="contacttime">
                <option>Morning (9:00am - 11:30am)</option>
                <option>Afternoon (1:00pm - 4:00pm)</option>
                <option>Evening (5:00pm - 8:00pm)</option>
            </select>
            
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            
            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
    </div>
    
    <div class="wrapper contact-details">
        <h3>Contact Details</h3>
        <p><strong>Location:</strong> Mohali and Chandigarh</p>
        <p><strong>Email:</strong> info@airistoacservice.com</p>
        <p><strong>Phone:</strong> +91 9914078878</p>
    </div>
</body>
</html>

<?php
include('footer.php');
?>