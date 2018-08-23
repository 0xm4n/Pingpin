<?php
  include_once("PHP/mysql.php");
  include_once("PHP/easySecure.php");
         
  session_start();

  if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
  }

  $i = $_REQUEST['id'];

  if(!is_numeric($i)){
    echo "<script>alert('非法操作！');</script>";
    header("Refresh:0;url=apply.php");
    exit();
  }

  $id = lib_replace_end_tag($i);



  getConnect();
                    
  $requireSQL = "SELECT * FROM information,contactinfo WHERE information.id=contactinfo.id AND information.id=".$id;
                    
  $result = mysql_query($requireSQL);
  $row = mysql_fetch_array($result);
?>

<!doctype html>
<html>

<head>
    <title>兼职详情</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/apply_detail.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- 这段代码的几个参数解释：
width = device-width：宽度等于当前设备的宽度
initial-scale：初始的缩放比例（默认设置为1.0）
minimum-scale：允许用户缩放到的最小比例（默认设置为1.0）
maximum-scale：允许用户缩放到的最大比例（默认设置为1.0）
user-scalable：用户是否可以手动缩放（默认设置为no，因为我们不希望用户放大缩小页面）
 -->
</head>

<body>
    <div id="header">
<<<<<<< HEAD:apply_detail.php

        <img id="logo_img" src="img/logo.png" alt="logo">
        <span id="seperator">|</span>
        <form action="">
            <input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
            <img src="" alt="">
        </form>
        <span class="header_tab" id="f1">
            <a href="home.php">首页</a>
        </span>
        <span class="header_tab" id="f2">
            <a href="apply.php">申请兼职</a>
        </span>
        <span class="header_tab" id="f3">
            <a href="hiring.php">发布兼职</a>
        </span>
        <span class="header_tab" id="f4">我的兼职</span>
        <span class="header_tab" id="logout"><a href="index.html">退出登录</a></span>
        <img id="logout_icon" src="img/logout.png" alt="logout">

=======
        <div class="width_limit">
            <!-- logo -->
            <a class="logo" href="#home">
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
                <li>
                    <a href="home.html">首页</a>
                </li>
                <div class="dropdown">
                    <a href="#" class="dropbtn">申请兼职</a>
                    <div class="dropdown-content">
                        <a href="#">校内兼职</a>
                        <a href="#">企业兼职</a>
                        <a href="#">实验室兼职</a>
                    </div>
                </div>
                <li>
                    <a href="#">发布兼职</a>
                </li>
                <li>
                    <a href="#my">我的兼职</a>
                </li>
            </ul>
    
        </div>
>>>>>>> fe23f018e9a634c195d368d61945765183853e7a:apply_detail.html
    </div>

    <div id="content">
        <div id="content_abstract">
            <h1 id="pt_title"><?php echo $row['title']?></h1>
            <div id="salary"><?php echo $row['reward']?></div>
            <div id="require">学历：<?php echo $row['education']?> | 性别要求：<?php echo $row['sex']?> | 其他要求：<?php echo $row['other']?></div>
        </div>
            
        <div id="cotent_detail">
            <div class="content_header">
                <span id="sub_title">兼职详情</span>
                <hr>
            </div>
            <div class="row">
                <span class="sub_title2">【工作内容】</span>
                <br>
                <span class="sub_content2"><?php echo $row['content']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【兼职要求】</span>
                <br>
                <span class="sub_content2">学历：<?php echo $row['education']?> | 性别要求：<?php echo $row['sex']?> | 其他要求：<?php echo $row['other']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【工作时间】</span>
                <br>
                <span class="sub_content2"><?php echo $row['time']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【工作地点】</span>
                <br>
                <span class="sub_content2"><?php echo $row['place']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【薪资待遇】</span>
                <br>
                <span class="sub_content2"><?php echo $row['reward']?></span>
            </div>
            <div class="content_header">
                <span id="sub_title">联系方式</span>
                <hr>
            </div>
            <div class="row">
                <span class="sub_title2">【联系人】</span>
                <br>
                <span class="sub_content2"><?php echo $row['contacts']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【咨询电话】</span>
                <br>
                <span class="sub_content2"><?php echo $row['phone']?></span>
            </div>
            <div class="row">
                <span class="sub_title2">【简历投递邮箱】</span>
                <br>
                <span class="sub_content2"><?php echo $row['email']?></span>
            </div>
        </div>
        <button id="apply_btn">点击申请</button>
    </div>
    <?php closeConnect(); ?>
</body>

</html>
