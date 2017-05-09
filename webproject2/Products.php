<?php 
	$connection = mysqli_connect('localhost', 'root', '');

if (!$connection) { die("Connection failed: " . mysqli_connect_error()); } 



$mydatabase = mysqli_select_db($connection,"projectdatabase") ; 

if(!$mydatabase) die("Database Selection failed".mysqli_connect_error());
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Products</title>
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
        
	<div class="row">
    <h1><u>FEATURED</u>....</h1>
		<?php	
	
		$sql="SELECT * FROM tblproducts";
		$result=mysqli_query($connection,$sql);
		$count=mysqli_num_rows($result);
	
		if ($count > 0) 
		{
			while($row = mysqli_fetch_array($result))
			{
			?>
          
          <div class="col-sm-6 col-md-4">
          	<a href="Product Details.php?pro_id=<?php echo $row['productId']; ?>" class="thumbnail">
            	<img src="ProjectImages/uploads/<?php echo $row['picture']; ?>" style="height:200px;width:200px">
           </a>
           </div>  
            
		<?php 
			}
		}
		?>	
	</div>

	<?php
		include ("includes/footer.php")
	?>

</div>
</body>
</html>
<!--
<div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Apple iphone 7 plus.jpg" style="height:200px;width:200px"></a>
			<div class="caption"><h4 style="color:#000000">Apple iphone 7 plus</h4>
			</div>
		</div>
 
<div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Galaxy S7 edge.jpg" style="height:200px;width:200px"></a>
			<div class="caption"><h4 style="color:#000000">Galaxy S7 edge</h4>
			</div>
		</div>
		<div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Galaxy C5 (1).jpg" style="height:200px;width:200px"></a>
			<div class="caption"><h4 style="color:#000000">Galaxy C5</h4>
			</div>
		</div>
        <div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Galaxy C5 (1).jpg" style="height:200px;width:200px"></a>
			<div class="caption"><h4 style="color:#000000">Galaxy C5</h4>
			</div>
		</div>
        <div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Galaxy S7 edge.jpg" style="height:200px;width:200px" ></a>
			<div class="caption"><h4 style="color:#000000">Galaxy S7 edge</h4>
			</div>
		</div>
        <div class="col-sm-6 col-md-4"><a href="Product Details.php" class="thumbnail"><img src="ProjectImages/Apple iphone 7 plus.jpg" style="height:200px;width:200px"></a>
			<div class="caption"><h4 style="color:#000000">Apple iphone 7 plus</h4>
			</div>
		</div>
-->