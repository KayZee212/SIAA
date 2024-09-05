<?php

$host = 'localhost'; 
$user = 'u524404949_rubbyroast'; 
$pass = "RabirowRadaRada@123"; 
$database = 'u524404949_verify_db'; 

 $conn = mysqli_connect($host,$user,$pass,$database); 
 if (!$conn) { 
 die("Connection failed: " . mysqli_connect_error()); 
 }
?>