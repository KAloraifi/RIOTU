<?php

include "include/dbconfig2.php";

header('Content-Type: text/xml');
echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');


$username = $_POST["username"];




$sql = "select * from user where username = '" . $username."'";
 $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            
            $sql = "DELETE FROM user WHERE username = '".$username."'";



if ($conn->query($sql) === TRUE) {
    echo "<message>Record deleted successfully</message>";
} else {
    echo "<message>Error deleting record: " . $conn->error."</message>";
}
            
        }
        
        else{
            echo"<message>This UserName  does not exsit</message>";
        }


?>