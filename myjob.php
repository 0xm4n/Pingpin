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
  <link href="assets/css/myjob.css" rel="stylesheet" type="text/css">
  <meta charset="utf-8">
  <title>我的兼职</title>
</head>

<body>
  <div id="wrapper">
    <div class="nav">
      <!-- logo跳转到主页 -->
      <a class="headimage" href="/">
        <img src="source/image/navigation_menu/logo.png">
      </a>
      <a href="/" class="headtitle">
        <strong>聘</strong>
      </a>
      <!-- 搜索栏 -->
      <form method="get" class="headform" action="https://www.baidu.com/search">
        <input type="text" class="search_input" title="在此处输入搜索内容" placeholder="唐老板♂ want you">
        <a class="search_btn" href="#">
          <img class="ic_search" src="source/image/navigation_menu/search.png" >
          </a>
        </form>
        
        <!-- 导航菜单 -->
        <div class="headlead ">
          <ul class="menu ">
            <!-- 首页 -->
            <div class="dropdown ">
              <a class="dropbtn " href="# ">首页</a>
              <div class="dropdown_content ">
                <a href="# ">系统首页</a>
                <a href="# ">账户设置</a>
                <a href="# ">登陆信息</a>
              </div>
            </div>
            <!-- 申请兼职 --> 
            <div class="dropdown ">
              <a href="# " class="dropbtn ">申请兼职</a>
              <div class="dropdown_content ">
                <a href="# ">校内兼职</a>
                <a href="# ">实验室兼职</a>
                <a href="# ">校外兼职</a>
              </div>
            </div>
            <!-- 发布兼职 -->
            <li class="headlead_item ">
              <a href="# ">发布兼职</a>
            </li>
            <!-- 我的兼职 -->
            <li class="headlead_item ">
              <a href="# ">我的兼职</a>
            </li>
          </ul>
        </div>

        <!-- 退出登陆 -->
        <a class="btn logoff " target="_self " href="# ">退出登陆</a>
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
</html>