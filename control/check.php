<?php
if(isset($_POST["email_id"]) && !empty($_POST["email_id"])){
	if(filter_var($_POST["email_id"],FILTER_VALIDATE_EMAIL)){
	include_once("../config.php");
	$email_id = $_POST["email_id"];
	$sql = "SELECT email FROM registeruser WHERE email = '$email_id'";
	$qry = mysqli_query($conn,$sql);
	$rc = mysqli_num_rows($qry);//rc===row count
		if($rc>0){
			echo "<div style='color:red'><img src='image/cros.png' width='15px' height='15px'/>"." "."Email Id is not available</div>";
			}else{
				echo "<div style='color:green'><img src='image/tick1.png' width='15px' height='15px'/>"." "."Email Id is available</div>";
				}
	}	
}
?>