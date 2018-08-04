<?php
  include_once("mysql.php");

  getConnect();

  $result = mysql_query("SELECT * FROM user");
  $flag = false;

  while ($row = mysql_fetch_array($result)) {
    if ($_POST['username'] == $row['username'] && $_POST['password'] == $row['password'])
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