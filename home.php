<?php 
session_start();
if (!isset($_SESSION['log']) || empty($_SESSION['log']) || $_SESSION['log'] != 1) {
	echo "<script>alert('请先登陆！');</script>";
	header("Refresh:0;url=index.html");
	exit();
}
include_once("PHP/mysql.php");

getConnect();

$requireSQL1 = "SELECT * FROM recruiment limit 0,10";
$requireSQL2 = "SELECT * FROM notify limit 0,10";
$requireSQL3 = "SELECT * FROM recruit_talk limit 0,10";

$result1 = mysql_query($requireSQL1);
$result2 = mysql_query($requireSQL2);
$result3 = mysql_query($requireSQL3);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>PING聘</title>
	<link rel="stylesheet" href="./assets/css/nav.css">
	<link rel="stylesheet" href="./assets/css/homepage.css">
	<link rel="stylesheet" href="./assets/css/homepage2.css">
	<script src="http://www.jq22.com/jquery/1.8.3/jquery.min.js"></script>
	<script type="text/javascript" src="assets/src/jquery.orbit-1.2.3.min.js"></script>
	<!--[if IE]>
<style type="text/css">
.timer { display: none !important; }
div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
</style>
<![endif]-->
	<!-- Run the plugin -->
	<script type="text/javascript">
		$(window).load(function () {
			$('#featured').orbit();
		});
	</script>
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
				<li><a  href="home.php" class="active">首页</a></li>
				<div class="dropdown">
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

	<div id="container">
		<div id="featured">
            <a href="http://catl.zhaopin.com/">
                <img src="images/u77.jpg" />
            </a>
            <a href="https://www.zhaopin.com/">
                <img src="images/u76.jpg" />
            </a>
            <a href="https://www.baidu.com/">
                <img src="images/u78.jpg" />
            </a>
            <a href="https://www.baidu.com/">
                <img src="images/u79.jpg" />
            </a>
		</div>
	</div>

	<div class="box">
		<div class="sub_box" id="recruiment">
			<h4 class="sub_title">网络招聘</h4>
			<div class="list">
				<ul>
				<?php
			while ($row = mysql_fetch_array($result1)) {
				echo "<li><span class=\"date\">" . $row['time'] . "</span>
					<a class=\"ahref\" href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['title'] . "</a></li>";
			}
			?>
					<div id="more"><a href="">[more]</a></div>
					<li class="line"></li>
				</ul>
			</div>
		</div>

		<div class="sub_box" id="notify">
			<h4 class="sub_title">通知公告</h4>
			<div class="list">
				<ul>
				<?php
			while ($row = mysql_fetch_array($result2)) {
				echo "<li><span class=\"date\">" . $row['time'] . "</span>
					<a class=\"ahref\" href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['title'] . "</a></li>";
			}
			?>
					<div id="more"><a href="">[more]</a></div>
					<li class="line"></li>
				</ul>
			</div>
		</div>

		<div class="sub_box" id="recruiment">
				<h4 class="sub_title">校园宣讲</h4>
				<div class="list">
					<ul>
					<?php
				while ($row = mysql_fetch_array($result3)) {
					echo "<li><span class=\"date\">" . $row['time'] . "</span>
							<a class=\"ahref\" href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['title'] . "</a></li>";
				}
				closeConnect();
				?>
						<div id="more"><a href="">[more]</a></div>
						<li class="line"></li>
					</ul>
				</div>
			</div>


	</div>


	</div>

	</div>
	</div>

	<br><br>
</body>

<script type="text/javascript" src="./assets/src/nav.js"></script>

</html>