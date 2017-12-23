<?php 
$servername = "us-cdbr-sl-dfw-01.cleardb.net";
$username = "bafa2b32948060";
$password = "e2b24cf4";
$dbname = "ibmx_12a479670a1fd4a";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
?>