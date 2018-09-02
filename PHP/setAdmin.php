<?php
include_once("mysql.php");
include_once("../assets/api/User.php");
	 
$username = $_GET['username'];

setAdmin($username);
?>
