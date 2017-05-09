<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>
    <style>
	#map {
        height: 250px;
        width: auto; display:block}
	</style>
</head>

<body bgcolor="green">

<div class="container">
<?php
	include ("includes/header.php")
?> 

    <div class="row">
		<div class="col-md-6">
        
        <h1>Contact Us<br></h1>
			<form action="#.php"  method="post" >
<font class="text_face1"><b>Name :&nbsp;&nbsp;&nbsp;</b> </font>  <input type="text"  name="name"  value="" placeholder="Name" required > <br><br>
<font class="text_face1"><b>Email :&nbsp;&nbsp;&nbsp;</b></font>  <input type="email" name="email" value="" placeholder="@gmail.com"  required> <br><br>
<font class="text_face1"><b>phone :&nbsp;</b></font>  <input type="tel" name="telephone" value="" placeholder="+920300-------"><br><br>
<font class="text_face1"><b>Role :</b></font> <input type="radio" name="Role" value="Student" required /><font class="text_face1">&nbsp;Student</font> 
		<input type="radio" name="Role" value="Teacher" required/><font class="text_face1">&nbsp;Teacher </font><br><br>
<font class="text_face1"><b>City :</b></font>   <select>
        <option value="Lahore">Lahore</option>
        <option value="karachi">Karachi</option>
        <option value="Islamabad">Islamabad</option>
        <option value="Peshawar">Peshawar</option>
        <option value="SAioklt">saioklt</option>
        <option value="texile">texile</option>
        </select><br><br>
<P style="margin-bottom:5px ; "><font class="text_face1"><b>Message:</b></font></P>
		<textarea name="message" rows="8px" cols="40px" ></textarea><br><br>
		<input type="submit" value="Submit" name="Submit" style="margin-left:60px"/>	 <br><br>             
 </form>
		</div>
        
		<div class="col-md-3 col-md-offset-3" >
<div class="container-fluid">
 <div  style=" margin-top:50px; ">
  <p style="color:#A2A2A2 ; font-size:14px; text-align:left;">
     <h4>Address</h4>
        <p>
        	<ul style=" font-size:14px ; list-style-type: none">
          				<li><a href="index.php" style="color:#A2A2A2">Home</a></li><br>
          				<li><a href="About Us.php" style="color:#A2A2A2">About Us</a></li><br>
         				<li><a href="ProductS.php" style="color:#A2A2A2">Products</a></li><br>
          				<li><a href="Contact Us.php" style="color:#A2A2A2">Contact Us</a></li>
        			</ul>
        </p>
   
      </div>



</div>

</div>
<br><br>
<div class="col-md-3 col-md-offset-3" >
<div class="container-fluid">
<h4>Google Map</h4>
<div id="map"  style="border:solid 1px #000000"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>


   
</div>
</div>
</div>
<br> <br>
        
<?php
	include ("includes/footer.php")
?> 

</div>
</body>
</html>
