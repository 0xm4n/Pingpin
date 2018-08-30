<?php

include_once("mysql.php");

    function addPublisher($username,$password,$name,$phone,$sex){
        getConnect();

        //插入用户主要信息
        $registerSQL1 = "INSERT INTO user VALUES('$username', '$password')";
        $res1 = mysql_query($registerSQL1);

        //插入用户其它信息
        $registerSQL2 = "INSERT INTO userinfo VALUES('$username', '$name', '$phone', '$sex')";
        $res2 = mysql_query($registerSQL2);

        //检测信息
        if($res1&&$res2){
            mysql_query("COMMIT");
        }
        else{
            mysql_query("ROLLBACK");  
            closeConnect();      
            echo "<script>alert('注册信息错误！');</script>";
            header("Refresh:10;url=../register.html");
            exit();
        }


        //检查数据是否插入成功
        $userSQL1 = "SELECT * FROM user WHERE username = '$username'";
        $userSQL2 = "SELECT * FROM userinfo WHERE username = '$username'";
    
        $userResult1 = mysql_query($userSQL1);
        $userResult2 = mysql_query($userSQL2);
    
        if (mysql_num_rows($userResult1) > 0 && mysql_num_rows($userResult2) > 0) {
            echo "<script>alert('用户注册成功');</script>";
            header("Refresh:0;url=../index.html");
        } 
        else {
            echo "<script>alert('用户注册失败');</script>";
            header("Refresh:0;url=../register.html");
        }

        closeConnect();

    }


?>