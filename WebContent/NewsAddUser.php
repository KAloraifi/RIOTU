<?php
include "include/dbconfig2.php";
session_start();

header('Content-Type: text/xml');
echo('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$title = $_POST["title"];
$shortDescription = $_POST["shortDescription"];
$longDescription = $_POST["longDescription"];
$date = $_POST["date"];
$picture1 = $_POST["picture1"];
$picture2 = $_POST["picture2"];
$picture3 = $_POST["picture3"];
$picture4 = $_POST["picture4"];

//$title = $_GET["title"];
//$shortDescription = $_GET["shortDescription"];
//$longDescription = $_GET["longDescription"];
//$date = $_GET["date"];
//$picture1 = $_GET["picture1"];
//$picture2 = $_GET["picture2"];
//$picture3 = $_GET["picture3"];
//$picture4 = $_GET["picture4"];
 
$sql = "select * from news where title = '" . $title."'";

$result = $conn->query($sql);
echo "<response>";
if ($result->num_rows == 1) {
    echo"<message>This title already exists.</message>";
    echo "<code>-1</code>";
} else {
    $sql1="INSERT INTO news (title, shortDescription, longDescription, date, picture1, picture2, picture3, picture4, author ) VALUES ('".$title."', '".$shortDescription."', '".$longDescription."', '".$date."', '".$picture1."', '".$picture2."', '".$picture3."', '".$picture4."', '". $_SESSION["firstname"].$_SESSION["lastname"]."')";
   
    $conn->query($sql1);
    echo"<message>The title ".$title." has been added.</message>";
    echo "<code>1</code>";
}
echo "</response>"; 


?>

