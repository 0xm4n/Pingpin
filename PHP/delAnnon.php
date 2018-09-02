<?php
include_once("mysql.php");
include_once("../assets/api/PTjob.php");
$id = $_GET['id'];

deletePTjob($id);
?>
