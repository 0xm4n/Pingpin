<?php
  include_once("mysql.php");
  include_once("easySecure.php");

  getConnect();

  $result = mysql_query("SELECT * FROM user");
  $flag = false;

  $username=lib_replace_end_tag($_POST['username']);
  $password=lib_replace_end_tag($_POST['password']);

  while ($row = mysql_fetch_array($result)) {
    if ($username == $row['username'] && $password == $row['password'])
      $flag = true;
  }

  if ($_POST['password'] == null || $_POST['username'] == null) {
    echo "<script>alert('请填写用户名或密码');</script>";
          header("Refresh:0;url=../index.html");
  } else if ($flag == true) {
    header("Refresh:0;url=../home.html");
  } else {
    echo "<script>alert('您输入的用户名或密码有误');</script>";
          header("Refresh:0;url=../index.html");
  }

  closeConnect();
?>