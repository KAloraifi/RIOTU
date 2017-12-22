<?php

include "include/dbconfig2.php";
session_start();

if(!isset($_POST["shortDescription"]) && isset($_POST["title"])){
$title = $_POST["title"];

$_SESSION["titleNewsUpdate"]=$title;

$sql = "select * from news where title = '" . $title."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows == 1){ 
            $row = $result->fetch_assoc();
            
            header('Content-Type: text/xml');
                $product = new \stdClass();
                $product->title = $row["title"];
		$product->shortDescription = $row["shortDescription"];
		$product->longDescription=$row["longDescription"];
		$product->date = $row["date"];
                $product->picture1 = $row["picture1"];
                $product->picture2 = $row["picture2"];
                $product->picture3 = $row["picture3"];
                $product->picture4 = $row["picture4"];
                
		
		$product_json = json_encode($product);
		echo $product_json;
        }      else{ 
           header('Content-Type: text/xml');
           echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
            echo"<message>This News does not exsit</message>";
        }
}else{
    
     header('Content-Type: text/xml');
    echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
    
$title = $_POST["title"];
$shortDescription = $_POST["shortDescription"];
$longDescription = $_POST["longDescription"];
$date = $_POST["date"];
$picture1 = $_POST["picture1"];
$picture2 = $_POST["picture2"];
$picture3 = $_POST["picture3"];
$picture4 = $_POST["picture4"];

if($title != $_SESSION["titleNewsUpdate"]){
$sql = "select * from news where title = '" . $title."'";

$result = $conn->query($sql);
echo "<response>";
if ($result->num_rows == 1) {
    echo"<message>This title already exists.</message>";
    echo "<code>-1</code>";
} else {
    $sql = "UPDATE news SET title='".$title."',shortDescription='".$shortDescription."',longDescription='".$longDescription."',date='".$date."',picture1='".$picture1."',picture2='".$picture2."',picture3='".$picture3."',picture4='".$picture4."' WHERE title='".$_SESSION["titleNewsUpdate"]."';" ;

 if (mysqli_query($conn, $sql)) {
    echo "<message>Record updated successfully</message>";
     echo "<code>1</code>";
} else {
    echo "<message>Error updating record: " . mysqli_error($conn)."</message>";
    echo "<code>-1</code>";
}
 
}
echo "</response>";
}
else{
        $sql = "UPDATE news SET title='".$title."',shortDescription='".$shortDescription."',longDescription='".$longDescription."',date='".$date."',picture1='".$picture1."',picture2='".$picture2."',picture3='".$picture3."',picture4='".$picture4."' WHERE title='".$_SESSION["titleNewsUpdate"]."';" ;
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
