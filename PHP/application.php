<?php
  include_once("easySecure.php");
  include_once("../assets/api/Application.php");
  session_start();
  $username = $_SESSION['username'];
  $id = $_GET['id'];
  addApplication($username,$id);
?>