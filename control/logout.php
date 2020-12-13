<?php session_start(); 
unset($_SESSION["o_r_r_email"]);
unset($_SESSION["o_r_r_name"]);
unset($_SESSION["o_r_r_mob"]);
echo "You are Suucesfully logout....";
header("location:../index.php?logout%%success");

?>