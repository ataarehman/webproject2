<?php

$connection = mysqli_connect('localhost', 'root', '');

if (!$connection) { die("Connection failed: " . mysqli_connect_error()); } 



$mydatabase = mysqli_select_db($connection,"projectdatabase") ; 

if(!$mydatabase) die("Database Selection failed".mysqli_connect_error());

if(isset($_GET['pro_id'])){
		$pro_id = $_GET['pro_id'];
	}
	
	$query = "SELECT * FROM tblproducts WHERE productId = '$pro_id'";
	$result = mysqli_query($connection, $query);
	$row = mysqli_fetch_array($result);
	
	$prodId = $row["productId"]; 
	$prodName = $row["productName"];
	$prodPrice = $row["productPrice"]; 
	$prodCode = $row["productCode"]; 
	$prodDiscount = $row["productDiscount"]; 
	$prodSize = $row["productSizes"]; 
	$prodDetails = $row["productDetails"]; 
	$prodImage = $row["picture"];

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Product Details</title>
<link rel="icon" href="ProjectImages/favicon3.jpg" sizes="16x16">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
</head>

<body>
<div class="container">
   	<?php
		include ("includes/header.php")
	?>

	<div class="row"  >
    	<div class="container">
			<div class="col-sm-6 col-md-4">
            	<a href="#" class="thumbnail">
                	<img src="ProjectImages/uploads/<?php echo $prodImage ?>" style="height:250px;width:250px">
                </a>
			</div>
         <div class="col-md-3 col-md-offset-1"><h1>Product Price</h1>
         		<h4><b>Name :</b>..................<?php echo $prodName; ?></h4>
         		<h4><b>ID :</b>..................<?php echo $prodId; ?></h4>
				<h4><b>Price :</b>..................<?php echo $prodPrice; ?></h4>
				<h4><b>Code :</b>.............<?php echo $prodCode; ?></h4>
				<h4><b>Discount :</b>............<?php echo $prodDiscount; ?></h4>
				<h4><b>Size :</b>........<?php echo $prodSize; ?></h4>
                <h4><b>Details :</b>...............<?php echo $prodDetails; ?></h4>
         
		</div>

	</div>

<?php
	include ("includes/footer.php")
?>

</div>
</body>
</html>
<!-- 
			<div class="caption"><h2 style="color:#000000">Details.......</h2>
            <p><b><u>BATTERY</u> : </b>Non-removable Li-Ion 2900 mAh battery (11.1 Wh)<br>
			&emsp;&emsp;<b>Stand-by</b>..........Up to 384 h (3G)<br>
			&emsp;&emsp;<b>Talk time</b>..........Up to 21 h (3G)<br>
			&emsp;&emsp;<b>Music play</b>......Up to 60 h</p></div>
            <p><b><u>DISPLAY Type</u> : </b>LED-backlit IPS LCD, capacitive touchscreen, 16M colors<br>
			&emsp;&emsp;<b>Size</b>....................5.5 inches<br>
			&emsp;&emsp;<b>Resolution</b>........1080 x 1920 pixels<br>
			&emsp;&emsp;<b>Multitouch</b>........Yes<br>
			&emsp;&emsp;<b>Protection</b>.........Ion-strengthened glass</p>
			</div>
 
-->