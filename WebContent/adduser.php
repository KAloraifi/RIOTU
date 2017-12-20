<?php

include "include/dbconfig2.php";

header('Content-Type: text/xml');
echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$firstname = $_POST["firstname"];

$lastname = $_POST["lastname"];


$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$birth_date = $_POST["birth_date"];



        $sql = "select * from user where username = '" . $username."'";
        // echo $sql;
        
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            echo"<message>This UserName is already exsit</message>";
        }
        else{
            
            $sql1="INSERT INTO user (firstname, lastname, username, password, role, birth_date) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$role."', '".$birth_date."')";
            $conn->query($sql1);
            echo"<message>Added</message>";
        }


?>
