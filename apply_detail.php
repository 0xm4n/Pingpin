<?php 
session_start();
if (!isset($_SESSION['log']) || empty($_SESSION['log']) || $_SESSION['log'] != 1) {
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
}
?>

<!doctype html>
<html>

<head>
    <title>兼职详情</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/nav.css">
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
                        <img src="images/search-btn.png" alt="search" style="width: 23px;height: 23px;">
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
						<a href="apply_school.php">校内兼职</a>
						<a href="apply_company.php">企业兼职</a>
						<a href="apply_lab.php">实验室兼职</a>
					</div>
				</div>
				<li><a href="hiring.php">发布兼职</a></li>
				<li><a href="myjob.php">我的兼职</a></li>
			</ul>
    
        </div>
    </div>

    <div id="content"></div>

</body>
<script src="./assets/src/jquery.min.js"></script>
<script type="text/javascript" src="./assets/src/detail.js"></script>
<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>
