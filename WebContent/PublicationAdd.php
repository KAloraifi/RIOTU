<?php

include "include/dbconfig2.php";

header('Content-Type: text/xml');
echo('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$title = $_POST["title"];
$impactfactor = $_POST["impactfactor"];
$year = $_POST["year"];
$month = $_POST["month"];
$pages = $_POST["pages"];
$publisher = $_POST["publisher"];

$issue = $_POST["issue"];
$volume = $_POST["volume"];
$category = $_POST["category"];
$indexing = $_POST["indexing"];
$booktitle = $_POST["booktitle"];
$hlink = $_POST["hlink"];
$author=$_POST["author"];

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

$sql = "select * from publication where title = '" . $title."'";
// echo $sql;

$result = $conn->query($sql);
echo "<response>";
if ($result->num_rows == 1) {
    echo"<message>This publication title is already exists.</message>";
    echo "<code>-1</code>";
} else {
    $sql1="INSERT INTO publication (title, impactfactor, year, month, pages, publisher, issue, volume, category, indexing, booktitle, hlink, author) VALUES ('".$title."', '".$impactfactor."', '".$year."', '".$month."', '".$pages."', '".$publisher."', '".$issue."', '".$volume."', '".$category."', '".$indexing."', '" .$booktitle."', '".$hlink."', '".$author."')";
    //echo $sql1;
    $conn->query($sql1);
    echo"<message>The publication ".$title." has been added.</message>";
    echo "<code>1</code>";
}
echo "</response>";
?>

