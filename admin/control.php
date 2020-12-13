<?php
if(isset($_REQUEST["permit"])){
	if($_REQUEST["permit"] == 1){
		$ads_id=$_REQUEST["ads_id"];
		include("../config.php");
		$sql = "UPDATE postads SET adsapproval = 1 WHERE ads_id = $ads_id";
		$res = mysqli_query($conn,$sql);
		if($res == true){
			header("location:index.php?act=permit");
		}else{
			header("location:index.php?act=permit&error%%while%%approving");
		}
	}elseif($_REQUEST["permit"] == 0){
		$ads_id=$_REQUEST["ads_id"];
		include("../config.php");
		$sql = "DELETE FROM postads WHERE ads_id = $ads_id";
		$res = mysqli_query($conn,$sql);
		if($res == true){
			header("location:index.php?act=permit");
		}else{
			header("location:index.php?act=permit&error%%while%%approving");
		}
	}
}
if(isset($_POST["usrid"]) && isset($_POST["pass"])){
	session_start();
	include("../config.php");
	$usr = $_POST["usrid"];
	$pass = $_POST["pass"];
	$sql = "SELECT * FROM admin WHERE usrid = '$usr' AND pass = '$pass'";
	$res = mysqli_query($conn,$sql);
	$c = mysqli_num_rows($res);
	if($c>0){
		while($r=mysqli_fetch_array($res)){
			$_SESSION["admin_name"] = $r["name"];
		}
		header("location:index.php?welcome");			
	}else{
		header("location:login.php?m=102&incorrect%%usr%%id%%pass");
	}
}
if(isset($_REQUEST["act"])){
	if($_REQUEST["act"]=="logout"){
		session_start();
		unset($_SESSION["admin_name"]);
		header("location:login.php?m=103&you are successfully logout");
	}
}
?>