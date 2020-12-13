<?php include 'control/session.php'; ?>
<!doctype html>
<html>
<title>Feedback | Housing Solution</TITLE>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
<script>
function chkValidn(){
	if(reg.uname.value == ""){
		alert("Please Enter Name");
		reg.uname.focus();
		return false;
	}
	if(reg.email.value == ""){
		alert("Please Provide Email");
		reg.email.focus();
		return false;
	}
	if(reg.msg.value==""){
		alert("Please Enter Message");
		reg.msg.focus();
		return false;
	}
	return true;
	
}
</script>	
</head>
<body id="myPage">
	<?php include 'include/header.php'; ?>
	<hr>
<div class="container"> 
	<div class="row">
		<div class="col-sm-4">
			<img src="image/feedback.png"/>
		</div>
		<div class="col-sm-8">
		<center>
		<form action="control/feedback.php" method="post" name="reg" onsubmit="return(chkValidn())">
		
			<table>
				<tr>
					<td><input class="feed" type="text" name="uname" placeholder="Enter Name" required></td>
			    </tr>
				<tr>
					<td><input class="feed" type="email" name="email" placeholder="Enter Email" required></td>
					</tr>
				<tr>
					<td><input class="feed" type="text" name="msg" placeholder="Enter your Feedback" required></td>
				    </tr>
				<tr>
					<td><input class="btn btn-success btn-block" type="submit" value="Submit"></td>
				</tr>
			</table>
		
		</form>
		</center>
		</div>
	</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>
