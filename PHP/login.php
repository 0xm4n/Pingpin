

<?php
  include_once("mysql.php");
  include_once("easySecure.php");

  session_start();

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
    echo "<script type='text/javascript' src='../js/popwindow.js'>pupopTip('200px','120px','请输入正确的用户名和密码','../images/error.png','25px');</script>";
    header("Refresh:0;url=../index.html");
  } else if ($flag == true) {
    $_SESSION['log'] = '1';
    $_SESSION['username'] = $username;
    header("Refresh:0;url=../home.php");
  } else {
    echo "<script type='text/javascript' src='../js/popwindow.js'>pupopTip('200px','120px','您输入的用户名或密码有误','../images/error.png','25px');</script>";
    header("Refresh:0;url=../index.html");
        
  }



  closeConnect();
?>