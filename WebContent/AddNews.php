<?php
include "include/dbconfig2.php";

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
 
$sql = "select * from news where title = '" . $title."'";

$result = $conn->query($sql);
echo "<response>";
if ($result->num_rows == 1) {
    echo"<message>This title already exists.</message>";
    echo "<code>-1</code>";
} else {
    $sql1="INSERT INTO news (title, shortDescription, longDescription, date, picture1, picture2, picture3, picture4 ) VALUES ('".$title."', '".$shortDescription."', '".$longDescription."', '".$date."', '".$picture1."', '".$picture2."', '".$picture3."', '".$picture4."')";
    $conn->query($sql1);
    echo"<message>The title ".$title." has been added.</message>";
    echo "<code>1</code>";
}
echo "</response>"; 


?>

