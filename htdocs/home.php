<?php       
  session_start();

  if(!isset($_SESSION['log']) || empty($_SESSION['log'])|| $_SESSION['log']!=1){
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
  }
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
	<script type="text/javascript" src="js/jquery.orbit-1.2.3.min.js"></script>
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
	
	<div id="container">
		<div id="featured">
			<img src="images/u77.png" />
			<img src="images/u76.png" />
			<img src="images/u78.png" />
			<img src="images/u79.png" />
		</div>
	</div>

	<div id="box">
		<div class="parent">
			<div class="child">
				<div id="child_1">
					<h1>1</h1>
					<h2>dsdss</h2>
					<p>fhsfgfskhdoifslngaofngkjnbvjnoxidnd;ofidngslkfjngfnf</p>
				</div>
			</div>
			<div class="child">
				<div id="child_2">
					<h1>2</h1>
					<h2>aha</h2>
					<p>sdfsfdfdfsdsfsdfewrrf</p>
				</div>
			</div>
			<div class="child">
				<div id="child_3">
					<h1>3</h1>
					<h2>lalalala</h2>
					<p>dsfdfjlsdfhbhjv</p>
				</div>
			</div>
			<div class="child">
					<div id="child_4">
						<h1>4</h1>
						<h2>lalalala</h2>
						<p>dsfdfjlsdfhbhjv</p>
					</div>
			</div>
			<div class="child">
					<div id="child_5">
						<h1>5</h1>
						<h2>lalalala</h2>
						<p>dsfdfjlsdfhbhjv</p>
					</div>
			</div>
			<div class="child">
					<div id="child_6">
						<h1>6</h1>
						<h2>lalalala</h2>
						<p>dsfdfjlsdfhbhjv</p>
					</div>
			</div>
			
			
		</div>
		
	</div>
</body>

<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>