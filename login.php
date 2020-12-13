<?php session_start(); 
if(isset($_SESSION["o_r_r_email"])){
	header("location:index.php");
}?>
<!doctype html>
<html>
<title>Login | Housing Solution</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
<style>

.color{background-color:brown;
color:white;
width:100px;
height:30px;
border:none;
}
.color:hover{background-color:yellow;
}
td{
width:250px;
height:50px;
font-size:20px;
}
.textBox{
width:220px;
height:30px;
}</style>

</head>

<body>
<?php include 'include/header.php'; ?><hr>
<center> <h1 style="margin-top:30px;color:#f3c500;margin-bottom:20px;">  SIGN IN</h1><br>
<?php if(isset($_GET["m"])){
		if($_GET["m"] == 101){?>
		<div class="alert alert-danger">
			<strong>Please!</strong> Login First!
		</div>
 <?php }elseif($_GET["m"] == 102){ ?>
		<div class="alert alert-danger">
			<strong>Error!</strong> Email or Password is incorrect!
		</div>
<?php } ?>
<?php } ?>
<form action="control/login.php" method="post">
	<table style="margin-top:50px; margin-bottom:30px;">
		<tr><td>Email Address* :</td><td><input name="email" type="email" class="textBox" required></td></tr>
		<tr><td>Password* :</td><td><input name="pwd" type="password" class="textBox" required></td></tr>
		<tr><td></td></tr>
		<tr><td><input type="submit" value="Login" class="color"></td><td>New Here <a href="sign.php">SignUp?</a></td></tr>
	</table>
</form>
</center>
<?php include 'include/footer.php';?>
</body>
</html>