<?php
    session_start();   
    if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
        echo "<script>alert('请先登陆！');</script>";
        header("Refresh:0;url=index.html");
        exit();
    }

    if(!isset($_SESSION['role']) || empty($_SESSION['role'])|| $_SESSION['role']!=1){
        echo "<script>alert('您没有查看详情！');</script>";
        header("Refresh:0;url=home.php");
        exit();
    }

?>
<!doctype html>
<html>

<head>
    <title>兼职详情</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/app_more.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>

<body>
<div id="header">
    <div class="width_limit">
        <a class="logo" href="home.php">
        <img id="logo_img" src="images/logo.png" alt="logo">
        </a>
        <div class="logoutdiv">
         <a href="index.html" class="header_tab logout">退出登录</a>
        </div>

        <div class="search">
            <form action="">
                <input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
                    <a id="search_btn" href="#">
                        <img src="images/search-btn.png" alt="search" style="width: 25px;height: 25px;">
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
                    <a href="apply.php">校内兼职</a>
                    <a href="apply.php">企业兼职</a>
                    <a href="apply.php">实验室兼职</a>
                </div>
            </div>
            <li><a href="hiring.php">发布兼职</a></li>
            <li class="active"><a href="myjob.php">我的兼职</a></li>
        </ul>

    </div>
</div>

<div id="container">
    <div class="sub_header_title"><h1 id="topic">申请详情</h1></div>
    <hr>
        <div class="sub_header">
            <span id="app_name">用户名</span>
            <span id="app_phone">联系方式</span>
        </div>
</div>

</body>
<script src="./assets/src/jquery.min.js"></script>
<script type="text/javascript" src="./assets/src/app_more.js"></script>
<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>