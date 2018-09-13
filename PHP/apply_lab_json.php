<?php
header('content-type:application/json;charset=utf8');
include_once("mysql.php");

getConnect();
$results = array();
$select = "SELECT *  FROM information WHERE type='实验室兼职' order by id  desc";

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