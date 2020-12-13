<?php session_start();
if(!isset($_SESSION["o_r_r_email"])){
	header("location:login.php?m=101");
}
?>

<!Doctype html>
<html>
<head>
	<title>Post Ad </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<?php include 'include/header.php'; ?><hr>

<center> <h1 style="margin-top:30px;color:#f3c500">Post Ads</h1><br>
<form action="control/post.php" method="post" enctype="multipart/form-data">

<input type="hidden" value="<?php echo $_SESSION['o_r_r_name'];?>" name="yname"/>


<table>
	<tr><td class="ads_form">Category & Size :</td>
		<td><select name="category" class="design" required>
					  <option value="">Select Category</option>
					  <option value="Flat">Flat</option>
					  <option value="Apartments">Apartments</option>
					  <option value="Room">Room</option>
					  
					</select>
		</td>
		<td>
		<select name="csize" class="design" required>
					  <option value="">Select Size</option>
					  <option value="1 BHK">1 BHK</option>
					  <option value="2 BHK">2 BHK</option>
					  <option value="3 BHK">3 BHK</option>
					  <option value="4 BHK">4 BHK</option>
					  <option value="5 BHK">5 BHK & more</option>
					  
					</select>
		</td>
	</tr>    
		<tr><td class="ads_form">Configuration* :</td>
		<td><select name="bedroom"class="design" required>
					  <option value="">No. of Bedrooms</option>
					  <option value="1 Bedroom">1 Bedroom</option>
					  <option value="2 Bedrooms">2 Bedrooms</option>
					  <option value="3 Bedrooms">3 Bedrooms</option>
					  <option value="4 Bedrooms">4 Bedrooms</option>
					  <option value="5 Bedrooms">5 Bedrooms & more</option>  
					</select></td>
		<td><select name="bathroom"class="design" required>
					  <option value="">No. of Bathrooms</option>
					  <option value="1 Bathroom">1 Bathroom</option>
					  <option value="2 Bathroom">2 Bathrooms</option>
					  <option value="3 Bathroom">3 Bathrooms & more</option>
					 
			</select>
		</td></tr>    
		<tr><td class="ads_form">Balconies* :</td><td><select name="balcony"class="design" required>
					  <option value="">No. of Balconies</option>
					  <option value="1 Balcony">1 Balcony</option>
					  <option value="2 Balconies">2 Balconies</option>
					  <option value="3 Balconies & more">3 Balconies & more</option>
					
					</select>
		</td>
		</tr>    
		
		<tr><td class="ads_form">Status of Water & Electricity :</td>
		<td>
		<select name="water"class="design" required>
					  <option value="">Water</option>
					  <option value="24 Hours Available">24 Hours Available</option>
					  <option value="Available in Morning">Available in Morning</option>
					  <option value="Available in Evening">Available in Evening</option>
					  <option value="Available in Morning & Evening">Available in Morning & Evening</option>
					
					</select></td>
		<td>
		<select name="electricity"class="design" required>
					  <option value="">Electricity</option>
					  <option value="Always">Always</option>
					  <option value="2 Hour in a Day">2 Hour in a Day</option>
					  <option  value="No Rare Cut">No Rare Cut</option>
					 
					</select>
		</td></tr>    
		<tr><td class="ads_form">Wifi/Internet :</td>
		<td><select name="wifi"class="design" required>
					  
					  <option value="Yes">Yes</option>
					  <option value="No">No</option>
					 
					
					</select>
		</td>
		<td class="ads_form"></td></tr>    
		<tr><td class="ads_form">Area in sqft* :</td><td><input type="text" name="area" placeholder="800" class="design" required></td><td></td></tr>  
		
		<tr><td class="ads_form">Ad Title* :</td><td><input type="text" name="title" placeholder=""class="design" required></td><td></td></tr>    
		<tr><td class="ads_form">Ad Description :</td><td><textarea class="mess" name="desc" placeholder="Write few lines about your property" required></textarea></td><td></td></tr>    
		<tr><td class="ads_form">Price :</td><td><input type="text" name="price" class="phone" placeholder=""class="design" required></td></tr>
		<tr><td class="ads_form">Photos for your ad :</td><td><input type="file" name="photo" class="design" required></td></tr>
		<tr><td class="ads_form">Mobile Number* :</td><td><input type="text" name="mob" value="<?php echo $_SESSION['o_r_r_mob'];?>" class="design" maxlength="10"></td>
		<td><input type="text" name="email" value="<?php echo $_SESSION['o_r_r_email'];?>" class="design" required></tr>
		<tr><td class="ads_form">Address* :</td>
		<td><select name="locality"  class="design" required>
		
		<option>Bai ka bagh</option>
		<option>Civil-line</option>
		<option>Chowk</option>
		<option>Katra</option>
		<option>Kareli</option>
		<option>Jhunsi</option>
		<option>Jhalwa</option>
		<option>Naini</option>
		<option>Kareli</option>
		
		</select></td>
		<td><input type="text" name="addr" placeholder="Allahabad" value="Allahabad" class="design"></td></tr>
		
		<tr><td class="ads_form"><input type="submit" value="Submit" class="btn btn-success"></td><td>Go back to <a href="index.php">Home?</a></td></tr>
</table>
</form>
</center>
<?php include 'include/footer.php'; ?>
</body>
</html>