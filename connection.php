<?php
 $servername = "localhost"; 
 $uname = "root"; 
 $password = ""; 
 $dbname = "airisto"; 
 // Database connection
 $conn = mysqli_connect($servername,$uname,$password,$dbname); 
 if($conn) 
{ 
 } 
else
{ 
 die("connection failed because".mysqli_connect_error()); 
} 
?>

