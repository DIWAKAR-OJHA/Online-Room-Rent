<div style="width:100%; height:80px; padding-bottom:10px">
	<a href="index.php">
		<div style="font-size:50px;margin-top:15px;margin-left:30px; float:left">
			<span style="color:#01a185;">"online room rent"</span>
			
			<span style="color:#f3c500; border:2px solid #01a185;">Admin</span>		
		
		</div>
	</a>
	<div style="float:right">
	<a href="control.php?act=logout">Logout</a>
	<?= $_SESSION["admin_name"]?>
	</div>
</div>
<hr>
<center>
<table>
<tr>
<td><a href="index.php?act=feedback">Feedback</a></td><td>|<td/>
<td><a href="index.php?act=ad">ad</a></td><td>|<td/>
<td><a href="index.php?act=usr">User</a></td>


</tr>
</table>
</center>

	
		
</div>
</html>