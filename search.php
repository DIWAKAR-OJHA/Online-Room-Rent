<?php include 'control/session.php'; ?>
<html>
<head>
<title>Search </TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="bootstrap/css/mystyle.css" rel="stylesheet" type="text/css" />

<script src="bootstrap/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#loc').on('change',function(){
		$('#loader').show();
        var loc = $(this).val();
         $.ajax({
                type:'POST',
                url:'control/search.php',
                data:'loc='+loc,
                success:function(html){
                    $('#show').html(html);
                   	$('#loader').hide();
                }
            }); 
        });
		
	$('#catg').on('change',function(){
		$('#loader').show();
        var catg = $(this).val();
         $.ajax({
                type:'POST',
                url:'control/search.php',
                data:'catg='+catg,
                success:function(html){
                    $('#show').html(html);
                   	$('#loader').hide();
                }
            }); 
    });
	
	$('#price').on('change',function(){
		$('#loader').show();
        var price = $(this).val();
         $.ajax({
                type:'POST',
                url:'control/search.php',
                data:'price='+price,
                success:function(html){
                    $('#show').html(html);
					$('#loader').hide();
                   	
                }
            }); 
        });
});
</script>
</head>
<body id="myPage">
	<?php include 'include/header.php'; ?>
	<hr style="color:#ddd">
	<div>	
		<h1 class="h_l_a"> Sea<u>rch</u></h1>
	</div>
	<div class="lat_ad row">
	<div class="col-md-4">
		<select class="design" id="loc">
			<option>Search by Locality</option>
		<?php 
			include('config.php');
			$sql="SELECT DISTINCT locality FROM postads";
			$res = mysqli_query($conn,$sql);
			while($r = mysqli_fetch_array($res)){
				echo "<option value='".$r['locality']."'>".$r['locality']."</option>";
			}
		?>
		</select>
	</div>
	<div class="col-md-4">
		<select class="design" name="catg" id="catg"><option>Search by Category</option>
			<option>Flat</option>
			<option>Apartments</option>
			<option>Room</option>
		</select>
	</div>
	<div class="col-md-4">
		<select class="design" name="price" id="price">
			<option value="0">Search by Price</option>
			<option value="99999999999">All</option>
			<option value="15000">Less than 15,000</option>
			<option value="10000">Less than 10,000</option>
			<option value="5000">Less than 5,000</option>
		</select>
	</div>
	</div>
	
<div style="width:90%; margin:20px auto 20px auto;">
	<div class="row">
		<div id="loader" style="display:none; margin:90px;"><center><img src="image/loader.gif" ></center></div>
		<div id="show">
		</div>
	</div>
</div>
<?php include 'include/footer.php';?>
</body>
</html>
