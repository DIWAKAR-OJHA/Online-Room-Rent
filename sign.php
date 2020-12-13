<!doctype html>
<html><title>Sign Up | Housing Solution</title>
<head> 
<style>
*{
	font-family: 'Open Sans', sans-serif;
}
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
<script src="bootstrap/js/jquery-3.2.1.min.js"></script>

<script>
function chk_email(){
			var email_id = reg.email.value;
			document.getElementById("err_email").style.display = "block";
			$.post("control/check.php",{ email_id: email_id},
				function(status){
					
					document.getElementById("err_email").innerHTML = status;
					
				});
}
function chkValidn(){
	if(reg.uname.value == ""){
		alert("Please Enter Name");
		document.getElementById("err_uname").innerHTML="Please Enter Your Name!";
		document.getElementById("err_email").innerHTML="";
		document.getElementById("err_mob").innerHTML="";
		document.getElementById("err_pass").innerHTML="";
		document.getElementById("err_cpass").innerHTML="";
		reg.uname.focus();
		return false;
	}
	if(reg.email.value == ""){
		alert("Please Provide Email");
		document.getElementById("err_email").innerHTML="Please Enter Your Email!";
		document.getElementById("err_uname").innerHTML="";
		document.getElementById("err_mob").innerHTML="";
		document.getElementById("err_pass").innerHTML="";
		document.getElementById("err_cpass").innerHTML="";
		reg.email.focus();
		return false;
	}
	if(reg.mob.value==""){
		alert("Please Provide Mobile Numbre");
		document.getElementById("err_mob").innerHTML="Please Enter Your Mobile Number!";
		document.getElementById("err_uname").innerHTML="";
		document.getElementById("err_email").innerHTML="";
		document.getElementById("err_pass").innerHTML="";
		document.getElementById("err_cpass").innerHTML="";
		reg.mob.focus();
		return false;
	}
	if(reg.pwd.value==""){
		alert("Please Enter Password");
		document.getElementById("err_pass").innerHTML="Please Enter Your Password!";
		document.getElementById("err_uname").innerHTML="";
		document.getElementById("err_email").innerHTML="";
		document.getElementById("err_mob").innerHTML="";
		document.getElementById("err_cpass").innerHTML="";
		reg.pwd.focus();
		return false;
	}
	if(reg.cpwd.value==""){
		alert("Please Enter Confirm Password");
		document.getElementById("err_cpass").innerHTML="Please Enter Confirm Your Password!";
		document.getElementById("err_uname").innerHTML="";
		document.getElementById("err_email").innerHTML="";
		document.getElementById("err_mob").innerHTML="";
		document.getElementById("err_pass").innerHTML="";
		reg.cpwd.focus();
		return false;
	}
	if(reg.cpwd.value != reg.pwd.value){
		alert("Your Password is not Matching");
		document.getElementById("err_cpass").innerHTML="Password Missmatch!";
		reg.cpwd.focus();
		return false;
	}
	return true;
	
}
</script>
</head>
<body id="myPage">

<?php include 'include/header.php'; ?><hr>
	<center> <h1 style="margin-top:30px;color:#f3c500"> Registeration</h1><br>
	<form action="control/register.php" method="post" name="reg" onsubmit="return(chkValidn())">
	<table>
		<tr><td style="font-size:25px; color:green">Personal Information</td><td></td></tr>    
		<tr><td>Your Name* :</td><td><input type="text" name="uname" class="textBox" ></td><td><span class="err"><div id="err_uname"></div></span></td></tr>    
		<tr><td>Email Address* :</td><td><input type="text" name="email" class="textBox" onkeyup="chk_email()" /></td><td><span class="err"><div id="err_email"></div></span></td></tr>
		<tr><td>Mobile Number* :</td><td><input type="text" name="mob" maxlength="10" class="textBox" ></td><td><span class="err"><div id="err_mob"></div></span></td></tr>
		<tr><td>Password* :</td><td><input type="password"  name="pwd" class="textBox" ></td><td><span class="err"><div id="err_pass"></div></span></td></tr>
		<tr><td>Confirm Password*  :</td><td><input type="password"  name="cpwd" class="textBox" ></td><td><span class="err"><div id="err_cpass"></div></span></td></tr>
		<tr><td><input type="submit" value="Submit" class="color"></td><td>Go back to <a href="index.php">Home</a></td></tr>
	</table>
	</form>
	</center>
<?php include 'include/footer.php'; ?>
</body>
</html>