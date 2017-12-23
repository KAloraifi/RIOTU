<?php
include "include/dbconfig2.php";
session_start();
header("Content-Type: application/json; charset=UTF-8");

if (isset($_GET['name'])) {
  if ($_GET['type'] == "conference") {
    $name = $_GET['name'];
    $_SESSION["nameupdate"]=$name;

    $sql = "SELECT * FROM conferences WHERE name = '".$name."'";

    $result = $conn->query($sql);
    $output = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($output);

  } elseif ($_GET['type'] == "project") {
    $name = $_GET['name'];
    $_SESSION["nameupdate"]=$name;

    $sql = "SELECT * FROM projects WHERE name = '".$name."'";

    $result = $conn->query($sql);
    $output = $result->fetch_all(MYSQLI_ASSOC);
    echo json_encode($output);

  }

}
?>
