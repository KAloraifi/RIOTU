<?php
include "include/dbconfig2.php";
session_start();
header('Content-Type: text/xml');
echo('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

if (isset($_GET['location'])) {

  $name = $_GET['name'];
  $location = $_GET['location'];
  $start_date = $_GET['start-date'];
  $end_date = $_GET['end-date'];
  $picture = $_GET['picture'];
  $description = $_GET['description'];
  $publisher = $_GET['publisher'];
  $rank = $_GET['rank'];

  $sql = "UPDATE conference SET name='".$name."', location='".$location."', start_date='".$start_date."',end_date='".$end_date."',picture='".$picture."',description='".$description."',publisher='".$publisher."',rank='".$rank."' WHERE name='".$_SESSION["nameupdate"]."'";
  // echo $sql;
  echo "<response>";
  if (mysqli_query($conn, $sql)) {
      echo "<message>Conference updated successfully</message>";
      echo "<code>1</code>";
  } else {
      echo "<message>Error updating conference: " . mysqli_error($conn)."</message>";
      echo "<code>-1</code>";
  }
  echo "</response>";
}

if (isset($_GET['co-i'])) {

  $name = $_GET['name'];
  $funding_agency = $_GET['funding-agency'];
  $start_date = $_GET['start-date'];
  $end_date = $_GET['end-date'];
  $picture = $_GET['picture'];
  $description = $_GET['description'];
  $pi = $_GET['pi'];
  $co_i = $_GET['co-i'];
  $total_budget = $_GET['total-budget'];

  $sql = "UPDATE project SET name='".$name."', funding_agency='".$funding_agency."', start_date='".$start_date."', end_date='".$end_date."',picture='".$picture."',description='".$description."',pi='".$pi."',co_i='".$co_i."', total_budget=".$total_budget." WHERE name='".$_SESSION["nameupdate"]."'";
  // echo $sql;

  echo "<response>";
  if (mysqli_query($conn, $sql)) {
      echo "<message>Project updated successfully</message>";
      echo "<code>1</code>";
  } else {
      echo "<message>Error updating project: " . mysqli_error($conn)."</message>";
      echo "<code>-1</code>";
  }
  echo "</response>";
}
?>
