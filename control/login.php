<?php
session_start();
require("../config.php");
$email= $_POST["email"];
$pwd= $_POST["pwd"];
$sql = "SELECT * FROM registeruser WHERE email='$email' AND pass='$pwd'";
$result = mysqli_query($conn, $sql);
$row = mysqli_num_rows($result);
while($rows = mysqli_fetch_array($result)){
	$name=$rows['name'];    
	$uemail=$rows['email']; 
	$mob=$rows['mob'];    
}
if ($row > 0) {
	$_SESSION['o_r_r_name'] = $name;
    $_SESSION['o_r_r_email'] = $uemail;
    $_SESSION['o_r_r_mob'] = $mob;
		
			header("Location:../index.php?login");
    }else{
		
		header('location:../login.php?m=102&wrong%&?');
	}
mysqli_close($conn);
?> 