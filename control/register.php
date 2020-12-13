<?php
session_start();
include("../config.php");
$uname= filter_var($_POST["uname"],FILTER_SANITIZE_STRING);

$email= $_POST["email"];
$mob= $_POST["mob"];

$pwd= $_POST["pwd"];
$cpwd= $_POST["cpwd"];
if(filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)){
	
if($pwd==$cpwd){
$sql = "INSERT INTO registeruser (name,email,mob,pass)
VALUES ('$uname','$email','$mob','$pwd')";

if ($conn->query($sql) === TRUE) {
	$_SESSION['o_r_r_name'] = $uname;
    $_SESSION['o_r_r_email'] = $email;
    $_SESSION['o_r_r_mob'] = $mob;
	header('location:../index.php?success');
}else{
	header('location:../sign.php?some%%%thing&^&wrong&*^');
}}else{
echo 'Password not match Press back to fill form';
echo "<a href='../sign.php?pass not match'>go back?</a>";
}
}else{echo "<script>alert('please enter valid email');
window.history.back();</script>";}	
$conn->close();
?>