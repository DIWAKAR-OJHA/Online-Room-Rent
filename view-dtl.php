<?php include 'control/session.php'; ?>
<?php if(!isset($_GET["ads_id"])){
	header("location:search.php");
}?>
<!doctype html>
<html>
<head><title>online room rent</TITLE>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
<style>

</style>
</head>

<body id="myPage">
	<?php include 'include/header.php'; ?><hr>
	<div>	<h1 class="h_l_a"> Ads D<u>etail</u></h1></div><br>
	<?php 
include("config.php");
$ads_id = $_GET["ads_id"];
$sql = mysqli_query($conn,"SELECT * FROM postads,registeruser WHERE postads.email = registeruser.email AND postads.ads_id = $ads_id");
$c = mysqli_num_rows($sql);
	if($c>0){
	while($rows = mysqli_fetch_array($sql)){
		$adsid = $rows['ads_id'];
		$image=$rows['photonme'];
		$email=$rows['email'];
		$price=$rows['price'];
		$descr=$rows['descr'];
		$city=$rows['city'];
		$locality=$rows['locality'];
		$title=$rows['title'];
		$catg=$rows['catg'];
		$area=$rows['area'];
		$bedroom=$rows['bedroom'];
		$bathroom=$rows['bathroom'];
		$csize=$rows['csize'];
		$wifi=$rows['wifi'];
		$water=$rows['water'];
		$electricity=$rows['electricity'];
		$balcony=$rows['balcony'];
		$mob=$rows['mob'];
	}
?>
	<div class="container" style="margin-top:20px;">
		<div class="row">
		<div class="col-sm-7" style="float:left">
			<div class="thumbnail" style="height:auto">
				<div class="caption">
				<h1><?php echo $title; ?></h1>
				<p><span class="glyphicon glyphicon-map-marker" style="color:#f3c500; font-size:20px;"></span><span style="color:#3bb54d"><?php echo $locality.",".$city; ?></span> | <span style="color:#9fa8a1;">Ad ID: <?php echo $adsid; ?></span></p>
				</div>
				<img src="uploads/<?php echo $image; ?>" class="img-rounded"  style="width:100%;height:500px;padding:20px;"/>
				<div class="caption">
					<p> Configuration:<span style="color:#f3c500"><?php echo " ".$bedroom.",".$bathroom.",".$balcony; ?></span></p>
					<p> Electricity: <?php echo $electricity; ?></p>
					<p> Water: <?php echo $water; ?></p>
					<p> Wifi/Internet: <?php echo $wifi; ?></p>
					<p> Size: <?php echo $csize; ?></p>
					<p> Locality: <?php echo $locality; ?></p>
					<p> Area: <?php echo $area." "; ?>sqft</p>
					<p> About: <?php echo $descr; ?></p>
				</div>
			</div>
		</div>
		
		<div class="col-sm-4 text-center" style="float:right; background:white; border:2px solid #5eeaf2">
			<table>
				
				<tr><td class="dtl">Price : </td><td class="dtl dtl_ dtl_p"> Rs.<?php echo $price; ?></td></tr>
				<tr><td class="dtl">Type : </td><td class="dtl dtl_"> <?php echo $catg; ?></td></tr>
				<tr><td class="dtl">Size : </td><td class="dtl dtl_"> <?php echo $csize; ?></td></tr>
				<tr><td class="dtl">Area : </td><td class="dtl dtl_"> <?php echo $area." "; ?>sqft.</td></tr>
				
			</table>
		</div>
		<div class="col-sm-4 text-center" style="float:right; background:#18af94; border:2px solid #18af94; margin-top:30px;">
			<div style="padding-top:20px">
				<h4>Interested in this Ad?</h4><p>Contact the seller!
				<h3><span style="color:white; border:1px solid #c4c6c6; border-radius:50%; background:#c4c6c6; padding:10px;" class="glyphicon glyphicon-earphone"></span><span style="color:black"> +91-<?php echo $mob; ?></span></h3>
			</div>	
		</div>
		</div>
	</div>
	<?php }else{ ?>
		<div class="container" style="margin-top:20px; height:300px">
			<center><h2>Sorry, Your Requested Ad is not found!</h2><br><br><br><br>
			<a href="search.php">Search Ad?</a></center>
		</div>
	<?php } ?>
<?php include 'include/footer.php';?>
</body>
</html>
