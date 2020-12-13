<?php
if(isset($_POST["msg"]) && isset($_POST["email"])){
include '../config.php';
$uname = $_POST["uname"];
$email = $_POST["email"];
$msg = $_POST["msg"];
$sql = "INSERT INTO feedback(name,email,msg) VALUES ('$uname','$email','$msg')";
$qry = mysqli_query($conn,$sql);
if($qry == TRUE){
	echo '	<div class="container"><center>';
	echo "<img src='../image/thank.png'/>";
    echo '<h1>Your Feedback is <span class="segment-heading"> Submitted Successfully! </span>Will Response You ASAP. </h1>
			<p></p>';
			
	  echo '</div>';
	  echo "<br><center><a href='../index.php'>go back?</a></center>";
}
$conn->close();
}
?>