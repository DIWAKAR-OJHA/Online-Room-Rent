<div style="width:100%; height:80px; padding-bottom:10px">
	<a href="index.php">
		<div style="font-size:50px;margin-top:15px;margin-left:30px; float:left">
			<span style="color:#01a185;">Online</span>
			<span style="color:#f3c500;">room </span>
			<span style="color:red;">rent</span>
		</div>
	</a>
		<?php if(isset($_SESSION["o_r_r_email"])){?>
		<div style="float:right; margin-top:5px; margin-right:25px">
		<p><?php echo $_SESSION["o_r_r_name"]?></p>
		<a class="top" href="control/logout.php">Log out</a>
		</div>
		<?php }else{ ?>
		<div style="float:right; margin-top:5px; margin-right:25px">
			<a class="top" href="login.php">Log in</a>
			<a class="top" href="sign.php">Sign up</a>
		</div>
		<?php } ?>
		
</div>