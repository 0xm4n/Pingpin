<?php
    include_once("mysql.php");

    if (empty($_POST)) {	
	echo "<script>alert('您提交的表单数据超过post_max_size!');</script>";
	header("Refresh:0;url=../account_login.html");
	exit();
    }

    $username = $_POST['username'];

    if ($username == null){
	echo "<script>alert('请输入用户名！');</script>";
	header("Refresh:0;url=../account_login.html");
	exit();
    }

    $password = $_POST['password'];
    $verify = $_POST['verify'];

    if ($password == null||$verify == null){
	echo "<script>alert('请输入密码！');</script>";
	header("Refresh:0;url=../account_login.html");
	exit();
    }

    if ($password != $verify) {
	echo "<script>alert('输入的密码与确认密码不相等！');</script>";
	header("Refresh:0;url=../account_login.html");
	exit();
    }



    $userNameSQL = "SELECT * FROM user WHERE username = '$username'";
    getConnect();
    $resultSet = mysql_query($userNameSQL);
    if (mysql_num_rows($resultSet) > 0) {
	echo "<script>alert('用户名已被占用，请更换其他用户名');</script>";
	header("Refresh:0;url=../account_login.html");
	exit();
	
    }

    $registerSQL = "INSERT into user values('$username', '$password')";

    mysql_query($registerSQL);

    $userSQL = "SELECT * FROM user WHERE username = '$username'";
    $userResult = mysql_query($userSQL);
    if (mysql_num_rows($userResult) > 0) {
	echo "<script>alert('用户注册成功');</script>";
	header("Refresh:0;url=../account_login.html");
    } 
    else {
	echo "<script>alert('用户注册失败');</script>";
	header("Refresh:0;url=../account_login.html");
    }
    closeConnect();
?>