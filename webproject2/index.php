<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>WHATS MOBILE </title>
    <link rel="icon" href="ProjectImages/favicon3.pnj" sizes="16x16">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.js"></script>


<link rel="stylesheet" href="imageslidermaker/ism/css_slider/my-slider.css"/>
<script src="imageslidermaker/ism/js_slider/ism-2.2.min.js"></script>
</head>

<body>
	<div class="container">
	<?php
		include ("includes/header.php")
	?>
        
         <div class="slider" style="max-width:1600px">
          <img class="mySlides" src="ProjectImages/iphone06.jpg" style="width:100%">
           <img class="mySlides" src="ProjectImages/iphone8.jpg" style="width:100%">
            <img class="mySlides" src="ProjectImages/iphone9.jpg" style="width:100%">
             <img class="mySlides" src="ProjectImages/iphone10.jpg" style="width:100%">
              <img class="mySlides" src="ProjectImages/iphone11.jpg" style="width:100%">
               <img class="mySlides" src="ProjectImages/iphone12.jpg" style="width:100%">         
          <div class="w3-center w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
            <button class="w3-button w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
            <button class="w3-button w3-display-right" onclick="plusDivs(1)">&#10095;</button>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
             <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
          </div>
              </div>
                <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function currentDiv(n) {
      showDivs(slideIndex = n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      if (n > x.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" w3-white", "");
      }
      x[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " w3-white";
    }
  </script>
   
<!--
    <div class="row">
        <div class="col-md-12">
        	<div class='containers'>
				<div class="ism-slider" data-transition_type="zoom" data-play_type="loop" data-radios="false" id="my-slider">
  					<ol>
    					<li><img src="imageslidermaker/ism/image_slider/slides/_u/1489224660492_47744.jpg">
      						<div class="ism-caption ism-caption-0"> Samsung Galaxy S4 </div>
    					</li>
    					<li><img src="imageslidermaker/ism/image_slider/slides/_u/pic1.jpg">
      						<div class="ism-caption ism-caption-0">Samsung Galaxy C7</div>
    					</li>
    					<li><img src="imageslidermaker/ism/image_slider/slides/_u/pic2.jpg">
      						<div class="ism-caption ism-caption-0">Samsung Galaxy S6</div>
    					</li>
  					</ol>
			</div>
            </div> 
		</div>
        
    </div>
-->
<h1><font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif">Welcome to <b>WHATS MOBILE </b></font></h1>
<p class="pagination" style="font-size:16px"><font face="Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif">Mobile is changing the world. Today, everyone has smartphones with them, constantly communicating and looking for information. In many countries, the number of smartphones has surpassed the number of personal computers.<br> <b>WHATS MOBILE </b> offers you a shopping experiences that is unpatrolled in Pakistan. We bring from sellers from different location from across diverst products ranges and buyers from all over Pakistan, together, in a unique digital, market place. Customers can view product details and images in order to choose to right product, at the convenience of only few clicks. Through over logistic network we catered to shoppers from around the country, delivering right at their door steps. Pay cash on delivery or online using your debit or credit card in a secure and tested environment The rest of the document their will the discussion of all the parties involves in the project, an overview of products requirements, features and constraints. This document will be updated subsequently in order to reflect changes during the project development</font></p>
	<div class="row">
    	<div class="col-md-4 col-sm-6">
    		<a class="thumbnail" href="Product Details.php"><img src="ProjectImages/iphone9.jpg"/></a>
            <div class="caption"><h3> iphone 8 Pre-booking</h3></div>
        </div>
        <div class="col-md-4 col-sm-6">
    		<a class="thumbnail" href="Product Details.php"><img src="ProjectImages/slider3.jpg"/></a>
            <div class="caption"><h3>SAMSUNG MOBILES</h3></div>
        </div>
        <div class="col-md-4 col-sm-6">
    		<a class="thumbnail" href="Product Details.php"><img src="ProjectImages/noika6.jpg"/></a>
            <div class="caption"><h3>Nokia 6</h3></div>
        </div>
    </div>
	
    <?php
		include ("includes/footer.php")
	?>
    
</div>
    
</body>
</html>
<!-- 
    		<nav class="navbar navbar-default navbar-bottom" role="navigation" style="background-color: #111">
  				<div class="container">
   					<h2 style="color: #FFFFFF">Countact Us</h2>
    				<p style="color:#A2A2A2 ; font-size:14px">Students of University of Lahore<br>Defences Road<br>lahore<br>		 					540000<br><br>+923007930855<br>+923047956538<br><a href="#">cshelpingdesk@gmail.com</a></p>
             
  				</div>
			</nav>
            
            




<div >
            	    
        		</div>
-->