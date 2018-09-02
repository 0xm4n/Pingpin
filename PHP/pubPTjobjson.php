<?php
header('content-type:application/json;charset=utf8');
include_once("mysql.php");

getConnect();
session_start();
$username = $_SESSION['username'];

$results = array();
$select = "SELECT * FROM information natural join publishment WHERE username = '$username'";

$result_query=mysql_query($select);

while ($row = mysql_fetch_assoc($result_query)) {
  $results[] = $row;
}
  
if($results){
  echo json_encode($results);
  
}else{
    echo mysql_error();
}

  closeConnect();
?>