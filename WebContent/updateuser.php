<?php

include "include/dbconfig2.php";


session_start();

if(!isset($_POST["firstname"]) && isset($_POST["username"])){
$username = $_POST["username"];
//this session used for the first searched username.
$_SESSION["usernameupdate"]=$username;

        $sql = "select * from users where username = '" . $username."'";
        //echo $sql;
        
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1){ 

             $row = $result->fetch_assoc();

header('Content-Type: text/xml');
                $product = new \stdClass();
                $product->firstname = $row["firstname"];
		$product->lastname = $row["lastname"];
		$product->username=$row["username"];
		$product->password = $row["password"];
                $product->role = $row["role"];
                $product->birthDate = $row["birthDate"];
                $product->joinDate = $row["joinDate"];
                $product->contact = $row["contact"];
                
		
		$product_json = json_encode($product);
		echo $product_json;
        }
       else{ 
           header('Content-Type: text/xml');
           echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
            echo"<message>This UserName does not exsit</message>";
        }
}

else{
    header('Content-Type: text/xml');
    echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$firstname = $_POST["firstname"];

$lastname = $_POST["lastname"];

$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$birth_date = $_POST["birth_date"];
$join_date = $_POST["join_date"];
$contact = $_POST["contact"];



if($username != $_SESSION["usernameupdate"]){
$sql = "select * from users where username = '" . $username."'";


$result = $conn->query($sql);
if ($result->num_rows == 1) {
    echo "<response>";
    echo"<message>This username already exists.</message>";
    echo "<code>-1</code>";
    echo "</response>";
} 
else {
    
$sql = "UPDATE users SET firstname='".$firstname."',lastname='".$lastname."',username='".$username."',password='".$password."',birthDate='".$birth_date."',contact='".$contact."' WHERE username='".$_SESSION["usernameupdate"]."';" ;

echo "<response>";
 if (mysqli_query($conn, $sql)) {
    echo "<message>Record updated successfully</message>";
     echo "<code>1</code>";
} else {
    echo "<message>Error updating record: " . mysqli_error($conn)."</message>";
    echo "<code>-1</code>";
}
 echo "</response>";
}
}

else{
    $sql = "UPDATE users SET firstname='".$firstname."',lastname='".$lastname."',username='".$username."',password='".$password."',birthDate='".$birth_date."',contact='".$contact."' WHERE username='".$_SESSION["usernameupdate"]."';" ;
 
    echo "<response>";
 if (mysqli_query($conn, $sql)) {
    echo "<message>Record updated successfully</message>";
     echo "<code>1</code>";
} else {
    echo "<message>Error updating record: " . mysqli_error($conn)."</message>";
    echo "<code>-1</code>";
}
 echo "</response>";
    
}
}
?>
