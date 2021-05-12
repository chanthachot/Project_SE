<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","calendar");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
 
?>