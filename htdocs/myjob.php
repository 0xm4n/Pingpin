<?php
  session_start();

  if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
  }
?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="./assets/css/nav.css">
  <link rel="stylesheet" href="./assets/css/myjob.css" >
  <meta charset="utf-8">
  <title>我的兼职</title>
</head>

<body>
  <div id="wrapper">
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
      <div class="dropdown">
        <a href="apply.php" class="dropbtn">申请兼职</a>
        <div class="dropdown-content">
          <a href="#">校内兼职</a>
          <a href="#">企业兼职</a>
          <a href="#">实验室兼职</a>
        </div>
      </div>
      <li><a href="hiring.php">发布兼职</a></li>
      <li><a href="myjob.php">我的兼职</a></li>
    </ul>

    </div>
  </div>
      <div class="content ">
        <!-- 主题和分割线 -->
        <div>
          <h1 class="topic ">我的兼职</h1>
        </div>
        <div>
          <img id="topic-line " class="img " src="source/image/in_school/u106.png ">
        </div>
        <!-- 条件筛选栏 -->
        <div class="seltion-cont "></div>
        <!-- 侧边导航分类栏 -->
        <div class="index-sider "></div>
        <!-- 兼职信息列表 -->
        <div class="job_list ">
          <ul>
            <li>
              <a href="# " target="_blank " title="初三升高一男生暑假英语家教兼职招聘 ">初三升高一男生暑假英语家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="高三男生暑期化学家教兼职招聘 ">高三男生暑期化学家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="高三男生暑期数学家教兼职招聘 ">高三男生暑期数学家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="高三男生暑期生物家教兼职招聘 ">高三男生暑期生物家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="深圳市华星光电技术有限公司校园大使招聘 ">深圳市华星光电技术有限公司校园大使招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="建筑科学重点实验室问卷调查员暑期兼职招聘 ">建筑科学重点实验室问卷调查员暑期兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="初三毕业男生数学化学预科家教兼职招聘 ">初三毕业男生数学化学预科家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="日语翻译暑期兼职招聘 ">日语翻译暑期兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="高三男生暑期生物家教兼职招聘 ">高三男生暑期生物家教兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="深圳市华星光电技术有限公司校园大使招聘 ">深圳市华星光电技术有限公司校园大使招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="建筑科学重点实验室问卷调查员暑期兼职招聘 ">建筑科学重点实验室问卷调查员暑期兼职招聘</a>
            </li>
            <li>
              <a href="# " target="_blank " title="初三毕业男生数学化学预科家教兼职招聘 ">初三毕业男生数学化学预科家教兼职招聘</a>
            </li>
          </ul>
        </div>
        <!-- 页面跳转 -->
        <div class="center ">
          <ul class="pagination ">
            <li><a href="# ">«</a></li>
            <li><a href="# " class="active ">1</a></li>
            <li><a href="# ">2</a></li>
            <li><a href="# ">3</a></li>
            <li><a href="# ">4</a></li>
            <li><a href="# ">5</a></li>
            <li><a href="# ">6</a></li>
            <li><a href="# ">7</a></li>
            <li><a href="# ">»</a></li>
          </ul>
        </div>

  </body>
<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>