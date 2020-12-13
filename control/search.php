<?php
if(isset($_POST["loc"]) || isset($_POST["catg"])){
	$catg = $locality = $price = "";
	include("../config.php");
	if(isset($_POST["loc"])){
		$locality = $_POST["loc"];
	}
	if(isset($_POST["catg"])){
		$catg = $_POST["catg"];
	}
		
	$sql = "SELECT title,price,city,photonme,ads_id,email,locality FROM postads WHERE adsapproval = 1 AND locality = '$locality' OR catg = '$catg'   ORDER BY postedtime DESC";
		$res = mysqli_query($conn, $sql);
		$c = mysqli_num_rows($res);
		if($c>0){
			while($r = mysqli_fetch_array($res)){
			$title = $r["title"];
			$price = $r["price"];
			$city = $r["city"];
			$img = $r["photonme"];
			$ads_id = $r["ads_id"];
			$email = $r["email"];
			$locality = $r["locality"];
			echo "<div class='col-sm-3'>
				<div class='thumbnail'>
				<a href='view-dtl.php?ads_id=".$ads_id."' class='none_link'>
				<img src='uploads/".$img."' alt='Ads Image' class='img-rounded' style='width:100%; height:200px'>
				<div class='caption'>
				<p class='ads_tit'>".$title."</p><br/>
				<p class='ads_price'>".$price."<span class='ads_loc'>".$locality." , ".$city."</span></p>
				</div>
				</a>
				</div>
				</div>";
			}
		}else{
			echo "<div class='container text-center' style='margin:100px;'>Sorry! No More Ads Found.</div>";
		}
	$conn->close();		
}
if(isset($_POST["price"])){
	include("../config.php");
	$price = $_POST["price"];
	$sql = "SELECT title,price,city,photonme,ads_id,email,locality FROM postads WHERE price < $price AND adsapproval = 1 ORDER BY postedtime DESC";
		$res = mysqli_query($conn, $sql);
		$c = mysqli_num_rows($res);
		if($c>0){
			while($r = mysqli_fetch_array($res)){
			$title = $r["title"];
			$price = $r["price"];
			$city = $r["city"];
			$img = $r["photonme"];
			$ads_id = $r["ads_id"];
			$email = $r["email"];
			$locality = $r["locality"];
			echo "<div class='col-sm-3'>
				<div class='thumbnail'>
				<a href='view-dtl.php?ads_id=".$ads_id."' class='none_link'>
				<img src='uploads/".$img."' alt='Ads Image' class='img-rounded' style='width:100%; height:200px'>
				<div class='caption'>
				<p class='ads_tit'>".$title."</p><br/>
				<p class='ads_price'>".$price."<span class='ads_loc'>".$locality." , ".$city."</span></p>
				</div>
				</a>
				</div>
				</div>";
			}
		}else{
			echo "<div class='container text-center' style='margin:100px;'>Sorry! No More Ads Found.</div>";
		}
	$conn->close();	
}
?>