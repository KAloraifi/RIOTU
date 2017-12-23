<?php
include "include/dbconfig2.php";

header('Content-Type: text/xml');
echo('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];
$birthDate = $_POST["birthDate"];
$contact = $_POST["contact"];

$sql = "select * from users where username = '" . $username."'";
// echo $sql;

$result = $conn->query($sql);
echo "<response>";
if ($result->num_rows == 1) {
    echo"<message>This username already exists.</message>";
    echo "<code>-1</code>";
} else {
    $sql1="INSERT INTO users (firstname, lastname, username, password, role, birthDate, joinDate , contact) VALUES ('".$firstname."', '".$lastname."', '".$username."', '".$password."', '".$role."', '".$birthDate."', "."CURDATE()".", '".$contact."')";
    $conn->query($sql1);
    echo"<message>The username ".$username." has been added.</message>";
    echo "<code>1</code>";
}
echo "</response>";
?>
