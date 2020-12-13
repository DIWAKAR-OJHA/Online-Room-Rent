<?php session_start(); 
if(isset($_SESSION["admin_login"])){
	header("location:index.php");
}?>
<!doctype html>
<html>
<title>Login | online room rent</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
<style>

.color{background-color:brown;
color:white;
width:100px;
height:30px;
border:none;
}
.color:hover{background-color:yellow;
}

.textBox{
width:220px;
height:30px;
}</style>

</head>

<body>

<center> <h1 style="margin-top:30px;color:#f3c500;margin-bottom:20px;">  Admin L<u>og in</u></h1><br>
<?php if(isset($_GET["m"])){
		if($_GET["m"] == 101){?>
		<div class="alert alert-danger">
			<strong>Please!</strong> Login First!
		</div>
 <?php }elseif($_GET["m"] == 102){ ?>
		<div class="alert alert-danger">
			<strong>Error!</strong> User Id or Password is incorrect!
		</div>
<?php }elseif($_GET["m"] == 103){ ?>
		<div class="alert alert-success">
			<strong>Logout!</strong> You are Successfully Logout!
		</div>
<?php } ?>
<?php } ?>
<form action="control.php" method="post">
	<table style="margin-top:50px; margin-bottom:30px;">
		<tr><td>User Id* :</td><td><input name="usrid" type="text" class="textBox" required></td></tr>
		<tr><td>Password* :</td><td><input name="pass" type="password" class="textBox" required></td></tr>
		<tr><td></td></tr>
		<tr><td colspan="2" align="center"><input type="submit" value="Login" class="color"></td></tr>
	</table>
</form>
</center>
<footer>
<center>Admin Login for Online room rent</center>
</footer>
</body>
</html>