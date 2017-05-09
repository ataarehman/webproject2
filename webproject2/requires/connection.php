<?php

$connection = mysqli_connect('localhost', 'root', '');

if (!$connection) { die("Connection failed: " . mysqli_connect_error()); } 



$mydatabase = mysqli_select_db($connection,"projectdatabase") ; 

if(!$mydatabase) die("Database Selection failed".mysqli_connect_error());

?>
