<?php
include "include/dbconfig2.php";
header('Content-Type: text/xml');
echo('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

if (isset($_GET['name'])) {
  if ($_GET['type'] == "conference") {
    $name = $_GET['name'];

    $sql = "SELECT * FROM conferences WHERE name = '".$name."'";
    // echo $sql;

    $result = $conn->query($sql);
    echo "<response>";
    if ($result->num_rows == 1) {
      $sql1 = "DELETE FROM conferences WHERE name = '".$name."'";
      $conn->query($sql1);
      echo"<message>Conference has been deleted.</message>";
      echo "<code>1</code>";
    } else {

      echo"<message>The conference ".$name." doesn't exist.</message>";
      echo "<code>-1</code>";
    }
    echo "</response>";

  } elseif ($_GET['type'] == "project") {
    $name = $_GET['name'];

    $sql = "SELECT * FROM projects WHERE name = '".$name."'";
    // echo $sql;

    $result = $conn->query($sql);
    echo "<response>";
    if ($result->num_rows == 1) {
      $sql1 = "DELETE FROM projects WHERE name = '".$name."'";
      $conn->query($sql1);
      echo"<message>Project has been deleted.</message>";
      echo "<code>1</code>";
    } else {

      echo"<message>The project ".$name." doesn't exist.</message>";
      echo "<code>-1</code>";
    }
    echo "</response>";
  }

}
?>
