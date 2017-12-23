<?php
include "include/dbconfig2.php";
session_start();

if(!isset($_POST["publisher"]) && isset($_POST["title"])){
    $title = $_POST["title"];
//this session used for the first searched username.
$_SESSION["titleupdate"]=$title;

$sql = "select * from publication where title = '" . $title."'";

        $result = $conn->query($sql);
        
        if ($result->num_rows == 1){ 
            $row = $result->fetch_assoc();

header('Content-Type: text/xml');
                $product = new \stdClass();
                $product->title = $row["title"];
		$product->impactfactor = $row["impactfactor"];
		$product->year=$row["year"];
		$product->month = $row["month"];
                $product->pages = $row["pages"];
                $product->publisher = $row["publisher"];
                $product->issue = $row["issue"];
                
                $product->volume = $row["volume"];
		$product->category = $row["category"];
		$product->indexing=$row["indexing"];
		$product->booktitle = $row["booktitle"];
                $product->hlink = $row["hlink"];
                $product->author = $row["author"];

                
                
		
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
$title = $_POST["title"];
$impactfactor = $_POST["impactfactor"];
$year = $_POST["year"];
$month = $_POST["month"];
$pages = $_POST["pages"];
$publisher = $_POST["publisher"];
//
$issue = $_POST["issue"];
$volume = $_POST["volume"];
$category = $_POST["category"];
$indexing = $_POST["indexing"];
$booktitle = $_POST["booktitle"];
$hlink = $_POST["hlink"];
$author = $_POST["author"];


//$title = $_GET["title"];
//$impactfactor = $_GET["impactfactor"];
//$year = $_GET["year"];
//$month = $_GET["month"];
//$pages = $_GET["pages"];
//$publisher = $_GET["publisher"];
//
//$issue = $_GET["issue"];
//$volume = $_GET["volume"];
//$category = $_GET["category"];
//$indexing = $_GET["indexing"];
//$booktitle = $_GET["booktitle"];
//$hlink = $_GET["hlink"];
//$author = $_GET["author"];

if($title != $_SESSION["titleupdate"]){
$sql = "select * from publication where title = '" . $title."'";
//echo $sql;

$result = $conn->query($sql);
//
if ($result->num_rows == 1) {
   echo "<response>";
    echo"<message>This title already exists.</message>";
    echo "<code>-1</code>";
    echo "</response>";
}else{
 $sql = "UPDATE publication SET title='".$title."',impactfactor='".$impactfactor."',year='".$year."',month='".$month."',pages='".$pages."',publisher='".$publisher."',issue='".$issue."',volume='".$volume."',category='".$category."',indexing='".$indexing."',booktitle='".$booktitle."',hlink='".$hlink."',author='".$author."' WHERE title='".$_SESSION["titleupdate"]."';" ;
//echo $sql;
 echo"<response>";
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
   $sql = "UPDATE publication SET title='".$title."',impactfactor='".$impactfactor."',year='".$year."',month='".$month."',pages='".$pages."',publisher='".$publisher."',issue='".$issue."',volume='".$volume."',category='".$category."',indexing='".$indexing."',booktitle='".$booktitle."',hlink='".$hlink."',author='".$author."' WHERE title='".$_SESSION["titleupdate"]."';" ;

   echo"<response>";
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
