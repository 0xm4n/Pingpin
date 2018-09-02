<?php
  session_start();
  if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
  }
?>

<!doctype html>
<html>

<head>
  <title>申请兼职</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="./assets/css/nav.css">
  <?php 
    echo "<link rel=\"stylesheet\" href=\"./assets/css/apply.css\">";
  ?>
  
</head>

<body>
<div id="header">
    <div class="width_limit">
          <!-- logo -->
    <a class="logo" href="home.php">
        <img id="logo_img" src="img/logo.png" alt="logo">
        <!-- 建议删除这个span，好像作用不大 -->
        <!-- <span id="seperator">|</span> -->
    </a>

     <!-- log out -->
    <!-- 修改log out：float：right -->
    <div class="logoutdiv">
      <a href="index.html" class="header_tab logout">退出登录</a>
    </div>

    <!-- searching  -->
    <div class="search">
        <form action="">
            <input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
            <a id="search_btn" href="#">
              <img src="img/search-btn.png" alt="search" style="width: 25px;height: 25px;">
            </a>
          </form>
    </div>
    <!-- navigator -->
    <!-- 用列表结构实现导航栏，实现下拉框 -->
    <ul>
      <li><a  href="home.php">首页</a></li>
      <div class="dropdown active">
        <a href="apply.php" class="dropbtn">申请兼职</a>
        <div class="dropdown-content">
          <a href="apply.php">校内兼职</a>
          <a href="apply.php">企业兼职</a>
          <a href="apply.php">实验室兼职</a>
        </div>
      </div>
      <li><a href="hiring.php">发布兼职</a></li>
      <li><a href="myjob.php">我的兼职</a></li>
    </ul>

    </div>
</div>

  <div id="content">
    <!--主体内容头部标题-->
    <div class="content_header">
      <h1 id="topic">华工兼职招聘相关信息</h1>
      <hr>
    </div>
    <!--主体内容表格-->
    <div id="content_body">
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
<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>
