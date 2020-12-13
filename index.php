<?php include 'control/session.php'; ?>
<!doctype html>
<html>
<title>Home </title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
	
</head>
<body id="myPage">
	<?php include 'include/header.php'; ?>
	<div style="position:fixed; float:right; margin-top:18%; display:block;">
		<a  href="feedback.php"><img src="image/feed1.png" width="70" height="80"></a>
	</div>
	<div style="width:100%;">
		<img src="image/banner.jpg" style="max-height:400px; width:100%"/>
		<div style="margin-left:auto;margin-right:auto;width:100px;">
			<a class="search" href="search.php">Search</a>
		</div>
		<div style="margin-left:auto;margin-right:auto;width:200px;">
			<a class="post_ad" href="post.php">Post Ads</a>
		</div>
	</div><br/>

	<div>	
		<h1 class="h_l_a"> Lates<u>t Ads</u></h1>
	</div>
	<div style="width:90%; margin:20px auto 20px auto;">
		<div class="row">
		<?php include 'config.php';
		$sql = "SELECT title,price,city,photonme,ads_id,email,locality FROM postads WHERE adsapproval = 1 ORDER BY postedtime DESC LIMIT 4";
		$res = mysqli_query($conn, $sql);
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
		$conn->close();		
		?>
		</div>
	</div>
<?php include 'include/footer.php';?>
</body>
</html>