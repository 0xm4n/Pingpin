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
    <title>首页</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/home.css">
</head>

<body>
    <div id="header">

        <img id="logo_img" src="img/logo.png" alt="logo">
        <span id="seperator">|</span>
        <form action="">
            <input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
            <img src="" alt="">
        </form>
        <span class="header_tab" id="f1">首页</span>
        <span class="header_tab" id="f2">
            <a href="apply.php">申请兼职</a>
        </span>
        <span class="header_tab" id="f3">
            <a href="hiring.php">发布兼职</a>
        </span>
        <span class="header_tab" id="f4">我的兼职</span>
        <span class="header_tab" id="logout"><a href="index.html">退出登录</a></span>
        <img id="logout_icon" src="img/logout.png" alt="logout">

    </div>

</body>

</html>
