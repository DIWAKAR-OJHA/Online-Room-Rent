<?php session_start(); 
if(!isset($_SESSION["admin_name"])){
	header("location:login.php?m=101");
}?>


<html>
<title>Admin</title>
<head>
<style>
td{
	font-size:20px;
	padding:10px;
}
</style>	
</head>

<?php
include 'header.php';
?>

<?php if(isset($_REQUEST["act"])){
	if($_REQUEST["act"] == "feedback"){ ?>

<center>
			<table style="margin-top:50px;" border="2px">
				<tr>
					<td>name</td>
					<td>email</td>
					<td>feedback</td>
				</tr>
				<?php include("../config.php");
					$sql="SELECT * FROM feedback";
					$res=mysqli_query($conn,$sql);
					while($r=mysqli_fetch_array($res)){
						echo "<tr><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['msg']."</tr>";
					}
				?>
			</table>
</center>
<?php }elseif($_REQUEST["act"] == "ad"){ ?>
<hr>
<center><a href="index.php?act=permit">Approve Ads</a></center>
			<table style="margin-top:50px;" border="2px">
				<tr>
					<td>ads_id</td>
					<td>image</td>
					<td>name</td>
					<td>category</td>
					<td>title</td>
					<td>area</td>
					<td>price</td>
					<td>locality</td>
					<td>city</td>
					<td>mobile</td>
					<td>postedtime</td>
					
				</tr>
				<?php include("../config.php");
					$sql="SELECT * FROM postads WHERE adsapproval = 1";
					$res=mysqli_query($conn,$sql);
					while($r=mysqli_fetch_array($res)){
						echo "<tr><td>".$r['ads_id']."</td>
						<td><img src='../uploads/".$r['photonme']."' style='width:100px;height:100px'></td>
						<td>".$r['yname']."</td><td>".$r['catg']."</td><td>".$r['title']."</td><td>".$r['area']."</td>
						<td>".$r['price']."</td><td>".$r['locality']."</td><td>".$r['city']."</td><td>".$r['mob']."</td>
						<td>".$r['postedtime']."</td>";
					}
				?>
			</table>
	
<?php }else if($_REQUEST["act"] == "permit"){ ?>
		<table style="margin-top:50px;" border="2px">
				<tr>
					<td>ads_id</td>
					<td>image</td>
					<td>name</td>
					<td>category</td>
					<td>title</td>
					<td>area</td>
					<td>price</td>
					<td>locality</td>
					<td>city</td>
					<td>mobile</td>
					<td>postedtime</td>
					<td>Permit</td>
					<td>
				</tr>
				<?php include("../config.php");
					$sql="SELECT * FROM postads WHERE adsapproval = 0";
					$res=mysqli_query($conn,$sql);
					while($r=mysqli_fetch_array($res)){
						echo "<tr><td>".$r['ads_id']."</td>
						<td><img src='../uploads/".$r['photonme']."' style='width:100px;height:100px'></td>
						<td>".$r['yname']."</td><td>".$r['catg']."</td><td>".$r['title']."</td><td>".$r['area']."</td>
						<td>".$r['price']."</td><td>".$r['locality']."</td><td>".$r['city']."</td><td>".$r['mob']."</td>
					<td>".$r['postedtime']."</td><td><a href='control.php?permit=1&ads_id=".$r['ads_id']."'>Approve</a> | <a href='control.php?permit=0&ads_id=".$r['ads_id']."'>Decline</a></td>";
					}
				?>
			</table>


<?php }elseif($_REQUEST["act"] == "usr"){ ?>
			<center>
			<table style="margin-top:50px;" border="2px">
				<tr>
					<td>name</td>
					<td>email</td>
					<td>mobile</td>
					<td>joining date</td>
				</tr>
				<?php include("../config.php");
					$sql="SELECT * FROM registeruser";
					$res=mysqli_query($conn,$sql);
					while($r=mysqli_fetch_array($res)){
						echo "<tr><td>".$r['name']."</td><td>".$r['email']."</td><td>".$r['mob']."</td><td>".$r['joiningdate']."</td></tr>";
					}
				?>
			</table>
</center>
	

<?php } ?>
<?php } ?>
<!--<table>
<tr>
<td>name</td>
<td>email</td>
<td>fedback</td>
</td>
</table>-->

</html>



