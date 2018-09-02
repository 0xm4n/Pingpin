<?php
include_once("mysql.php");
include_once("../assets/api/Application.php");
	 
$username = $_GET['username'];
$id = $_GET['id'];

deleteApplication($username,$id);
?>
