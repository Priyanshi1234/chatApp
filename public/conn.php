<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","chatapp");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

 
?>