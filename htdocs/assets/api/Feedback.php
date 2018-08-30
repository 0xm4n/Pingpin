<?php

include_once("mysql.php");

function addFeedback($username,$id,$feedback){
    getConnect();
    //插入反馈信息
    $updateSQL1 =  "UPDATE application set feedback='$feedback' WHERE id = '$id'";
    $res1 = mysql_query($updateSQL1);

    //检测信息
    if($res1){
        mysql_query("COMMIT");
    }
    else{
        mysql_query("ROLLBACK");  
        closeConnect();      
        echo "<script>alert('发布反馈错误！');</script>";
        header("Refresh:10;url=../apply_detail.html");
        exit();
    }

    //检查反馈是否成功
    $appSQL1 = "SELECT * FROM application WHERE username = '$username'";
    
    $appResult1 = mysql_query($userSQL1);
    
    if (mysql_num_rows($userResult1) > 0) {
        echo "<script>alert('反馈成功');</script>";
        header("Refresh:0;url=../apply_detail.html");
    } 
    else {
        echo "<script>alert('反馈失败');</script>";
        header("Refresh:0;url=../apply_detail.html");
    }

    closeConnect();
}

function deleteFeedback($username,$id,$feedback){
    getConnect();
    //删除反馈信息
    $deleteSQL1 =  "UPDATE application set feedback='' WHERE username = '$username' and id = '$id'";
    $res1 = mysql_query($updateSQL1);

    //检测信息
    if($res1){
        mysql_query("COMMIT");
    }
    else{
        mysql_query("ROLLBACK");
        closeConnect();        
        echo "<script>alert('删除反馈信息错误！');</script>";
        header("Refresh:10;url=../home.html");
        exit();
    }

    //删除成功
    echo "<script>alert('删除反馈信息成功！');</script>";
    header("Refresh:0;url=../home.html");
    closeConnect();
}

function getAllFeedback($id){
    getConnect();
    //获得反馈信息
    $selectSQL1 = "SELECT username , feedback FROM application WHERE id = '$id'";
    $res1 = mysql_query($selectSQL1);

    //检测信息并返回反馈信息
    if($res1){
        mysql_query("COMMIT");
        closeConnect();
        return $res1;
    }
    else{
        mysql_query("ROLLBACK");
        closeConnect();        
        return "";
    }  
}

?>