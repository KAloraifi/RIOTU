<?php
include "include/dbconfig2.php";
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

  $sql = "SELECT * FROM conference WHERE name = '".$name."'";
  // echo $sql;

  $result = $conn->query($sql);
  echo "<response>";
  if ($result->num_rows == 1) {
      echo"<message>This conference name already exists.</message>";
      echo "<code>-1</code>";
  } else {
      $sql1="INSERT INTO conference VALUES ('".$name."', '".$location."', '".$start_date."', '".$end_date."', '".$picture."', '".$description."', '".$publisher."', '".$rank."')";
      $conn->query($sql1);
      echo"<message>The conference ".$name." has been added.</message>";
      echo "<code>1</code>";
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

  $sql = "SELECT * FROM project WHERE name = '".$name."'";
  // echo $sql;

  $result = $conn->query($sql);
  echo "<response>";
  if ($result->num_rows == 1) {
      echo"<message>This project name already exists.</message>";
      echo "<code>-1</code>";
  } else {
      $sql1="INSERT INTO project VALUES ('".$name."', '".$funding_agency."', '".$start_date."', '".$end_date."', '".$picture."', '".$description."', '".$pi."', '".$co_i."', ".$total_budget.")";
      $conn->query($sql1);
      echo"<message>The project ".$name." has been added.</message>";
      echo "<code>1</code>";
  }
  echo "</response>";
}
?>
