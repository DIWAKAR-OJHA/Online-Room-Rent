<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "housing";
//create connection
$conn = mysqli_connect($server,$user,$pass,$database);
//check connection
if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}
$server_msg = "Connected";

?>
    