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
		<img id="logo_img" src="img/logo.png" alt="logo">
		<span id="seperator">|</span>
		<form action="">
			<input id="search_input" type="text" title="在此处输入搜索内容" placeholder="搜索相关兼职">
			<img src="" alt="">
		</form>
		<span class="header_tab" id="f1">首页</span>
		<span class="header_tab" id="f2">
			<a href="apply.html">申请兼职</a>
		</span>
		<span class="header_tab" id="f3">
			<a href="hiring.html">发布兼职</a>
		</span>
		<span class="header_tab" id="f4">我的兼职</span>
		<span class="header_tab" id="logout">
			<a href="index.html">退出登录</a>
		</span>
		<img id="logout_icon" src="img/logout.png" alt="logout">
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

</html>