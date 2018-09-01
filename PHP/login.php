<?php
  include_once("mysql.php");
  include_once("easySecure.php");

  getConnect();

  $result1 = mysql_query("SELECT * FROM user WHERE role=1");
  $result2 = mysql_query("SELECT * FROM user WHERE role=0");
  $flag = false;

  $username=lib_replace_end_tag($_POST['username']);
  $password=lib_replace_end_tag($_POST['password']);


     session_start();

  while ($row = mysql_fetch_array($result1)) {
    if ($username == $row['username'] && $password == $row['password']){
      $flag = true;
      $_SESSION['role'] = '1';
        }
	
  }

       while ($row = mysql_fetch_array($result2)) {
             if ($username == $row['username'] && $password == $row['password']){
                $flag = true;
		$_SESSION['role'] = '0';
		}
      }


  if ($_POST['password'] == null || $_POST['username'] == null) {
    echo "<script>alert('请填写用户名或密码');</script>";
          header("Refresh:0;url=../index.html");
  } else if ($flag == true) {
    $_SESSION['log'] = '1';
    $_SESSION['username'] = $username;
    header("Refresh:0;url=../home.php");
  } else {
    echo "<script>alert('您输入的用户名或密码有误');</script>";
          header("Refresh:0;url=../index.html");
        
  }

  closeConnect();
?>