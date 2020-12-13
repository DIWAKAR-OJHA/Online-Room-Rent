<?php
include '../config.php';
$catg= $_POST["category"];
$csize= $_POST["csize"];
$bedroom= $_POST["bedroom"];
$bathroom= $_POST["bathroom"];
$balcony= $_POST["balcony"];
$water= $_POST["water"];
$electricity= $_POST["electricity"];
$wifi= $_POST["wifi"];
$area= $_POST["area"];
$title= $_POST["title"];
$desc= $_POST["desc"];
$price= $_POST["price"];
$mob= $_POST["mob"];
$locality= $_POST["locality"];
$yname=$_POST["yname"];
$city=$_POST["addr"];
$email=$_POST["email"];
$file = rand(1000,100000).$_FILES['photo']['name'];
$file_loc = $_FILES['photo']['tmp_name'];
$file_size = $_FILES['photo']['size'];
$file_type = $_FILES['photo']['type'];
$adsid=date("Ymd");
$folder="../uploads/";
move_uploaded_file($file_loc,$folder.$file);
$sql = "INSERT INTO postads (area,catg,csize,bedroom,bathroom,balcony,water,electricity,wifi,title,descr,price,locality,yname,city,mob,email,photonme)
VALUES ('$area','$catg','$csize','$bedroom','$bathroom','$balcony','$water','$electricity','$wifi','$title','$desc','$price','$locality','$yname','$city','$mob','$email','$file')";

if ($conn->query($sql) === TRUE) {
	echo '	<div class="container" style="margin:15%">';
    echo '<h1>Your Ad is <span class="segment-heading"> Submitted Successfully </span> It will appear when admin approve. </h1>
			<p></p>';
			
	  echo '</div>';
	  echo "<br><center><a href='../index.php'>go back?</a></center>";
			
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
