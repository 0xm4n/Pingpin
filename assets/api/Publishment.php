<?php

include_once("mysql.php");

    function addPublishment($id,$time){
        date_default_timezone_set('PRC'); // 中国时区

        $publishtime = date("Y-m-d H:i:s");
        $endtime=date("Y-m-d H:i:s",time()+1000);
        
        $pt = strtotime($publishtime);
        $et = strtotime($endtime);
	
	session_start();
	$username=$_SESSION['username'];

        //插入信息
        $insertSQL1 = "INSERT INTO publishment VALUES('$username', '$id', '$pt', '$et')";
        $res1 = mysql_query($insertSQL1);

        //检测信息
        if($res1){	
            return 1;
        }
        else{
            return 0;
        }
    }

    //更新结束时间
    function updatePublishment($username,$id,$time){
        //获得该兼职的发布时间
        $result = mysql_query("SELECT publishtime FROM publishment WHERE id = '$id'");
        $row = mysql_fetch_array($result);
        $publishtime = (string)($row['publishtime']);
        $endtime = date("Y/m/d G:i:s A",strtotime($publishtime)+3600);

        //插入信息
        $updateSQL1 = "UPDATE publishment set endtime='$endtime' WHERE id = '$id'";
        $res1 = mysql_query($updateSQL1);

        //检测信息
        if($res1){
            return 1;
        }
        else{
            return 0;
        }
    }
?>