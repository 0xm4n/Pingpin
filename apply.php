<?php
  include_once("PHP/mysql.php");
         
  session_start();

  if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
  }

  getConnect();
                    
  $requireSQL = "SELECT * FROM information,contactinfo WHERE information.id=contactinfo.id";
                    
  $result = mysql_query($requireSQL);
?>

<!doctype html>
<html>

<head>
  <title>申请兼职</title>
  <meta charset="utf-8">
  <?php 
    echo "<link rel=\"stylesheet\" href=\"./assets/css/apply.css\">";
  ?>
  
</head>

<body>
  <div id="header">

    <img id="logo_img" src="img/logo.png" alt="logo">
    <span id="seperator">|</span>
    <form action="">
      <input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
      <img src="" alt="">
    </form>
    <span class="header_tab" id="f1">
      <a href="home.php">首页</a>
    </span>
    <span class="header_tab" id="f2">申请兼职</span>
    <span class="header_tab" id="f3">
      <a href="hiring.php">发布兼职</a>
    </span>
    <span class="header_tab" id="f4">我的兼职</span>
    <span class="header_tab" id="logout">
      <a href="index.html">退出登录</a>
    </span>
    <img id="logout_icon" src="img/logout.png" alt="logout">

  </div>

  <div id="content">
    <!--主体内容头部标题-->
    <div class="content_header">
      <h1 id="topic">华工兼职招聘相信息</h1>
      <hr>
    </div>
    <!--主体内容表格-->
    <div class="content_body">
      <!-- 插入json信息 -->
    </div>
    <!-- 分页 -->
    <div class="page">
      <ul class="pagination">
      </ul>
    </div>
  </div>

</body>

<script src="./assets/src/jquery.min.js"></script>
<script type="text/javascript" src="./assets/src/apply.js"></script>
</html>
