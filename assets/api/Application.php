<?php

include_once("mysql.php");

function addApplication($username,$id){
    getConnect();
    $searchSQL1 = "SELECT * FROM application WHERE username = '$username' and id = '$id'";
    $resultSet = mysql_query($searchSQL1);
    if (mysql_num_rows($resultSet) > 0) {
        closeConnect();   
        echo "<script>alert('您已申请该兼职！');</script>";
        header("Refresh:0;url=../apply_detail.php?id=".$id);      
        exit();	
    }

    //插入申请兼职信息
    $insertSQL1 = "INSERT INTO application VALUES('$username', '$id', null)";

    $res1 = mysql_query($insertSQL1);
    //检测信息
    if($res1){
        mysql_query("COMMIT");
    }
    else{
        mysql_query("ROLLBACK");  
        closeConnect();      
        echo "<script>alert('申请兼职错误！');</script>";
        header("Refresh:10;url=../apply_detail.php?id=".$id);
        exit();
    }

    //检查申请兼职信息提交是否成功
    $appSQL1 = "SELECT * FROM application WHERE username = '$username'";
    
    $appResult1 = mysql_query($appSQL1);
    
    if (mysql_num_rows($appResult1) > 0) {
        echo "<script>alert('申请兼职成功,请等待回复');</script>";
        header("Refresh:0;url=../apply_detail.php?id=".$id);
    } 
    else {
        echo "<script>alert('申请兼职失败');</script>";
        header("Refresh:0;url=../apply_detail.php?id=".$id);
    }

    closeConnect();
}

function deleteApplication($username,$id){
    getConnect();

    $deleteSQL1 = "DELETE FROM application WHERE username = '$username' and id = '$id'";
    $res1 = mysql_query($deleteSQL1);
    if($res1){
        mysql_query("COMMIT");
    }
    else{
        mysql_query("ROLLBACK");  
        closeConnect();      
        echo "<script>alert('删除兼职错误！');</script>";
        header("Refresh:10;url=../appli_delete.php");
        exit();
    }

    echo "<script>alert('删除兼职成功！');</script>";
    header("Refresh:0;url=../appli_delete.php");
    closeConnect();
}

?>