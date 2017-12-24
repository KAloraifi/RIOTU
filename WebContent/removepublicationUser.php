<?php

include "include/dbconfig2.php";
session_start();
header('Content-Type: text/xml');
echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');


$title = $_POST["title"];

$sql = "select * from publication where title ='".$title."'and author='". $_SESSION["firstname"].$_SESSION["lastname"]."'";

$result = $conn->query($sql);
 
if ($result->num_rows == 1) {
     $sql = "DELETE FROM publication WHERE title = '".$title."'";
     
    if ($conn->query($sql) === TRUE) {
    echo "<message>Record deleted successfully</message>";
} else {
    echo "<message>Error deleting record: " . $conn->error."</message>";
}
            
        }
        
        else{
            echo"<message>This Title does not exsit or you are not authorized to delete it</message>";
        }

 

?>

