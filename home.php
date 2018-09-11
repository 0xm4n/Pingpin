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
        <img id="logo_img" src="images/logo.png" alt="logo">
    </a>

     <!-- log out -->
    <div class="logoutdiv">
      <a href="index.html" class="header_tab logout">退出登录</a>
    </div>

    <!-- searching  -->
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
      <li class="active"><a  href="home.php">首页</a></li>
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
			<img src="images/u77.jpg" />
			<img src="images/u76.jpg" />
			<img src="images/u78.jpg" />
			<img src="images/u79.jpg" />
		</div>
	</div>

	<div id="box">
		<div class="parent">
			<div class="child">
				<div id="child_1">
				<h3 class="sub_tit">【活动推荐】</h3>
				<h2 class="tit">阿里巴巴2019秋季校园招聘正式启动！</h2>
					<p class="pa"> 梦想还是要有万一实现了呢？	<br>"让天下没有难做的生意" <br>为了这个梦想，我们一直在努力 <br>“五新”重新定义产业和行业 <br>达摩院和罗汉堂相继成立 <br>未来阿里巴巴将担负起更多责任 <br>继续以解决社会问题为核心 <br>服务全球20亿消费者 <br>来，加入我们一起创造新世界。
					</p>
					<p  class="see_more"><a href="https://campus.alibaba.com" target="_blank">[查看详情]</a>
					</p>
				</div>
			</div>
			<div class="child">
				<div id="child_2">
				<h3 class="sub_tit">【推荐招聘】</h3>
					<h2 class="tit">第四范式2019校园招聘</h2>
					<p class="pa">第四范式是领先的人工智能与服务提供商,是一家人工智能技术与服务提供商，数据科技驱动行业应用的创新者。2016年12月，第四范式荣获“吴文俊人工智能科学技术奖”创新奖一等奖。2017年5月，第四范式入选"Gartner 2017 Cool Vendor” 。是国内唯一入榜的通用平台型人工智能公司。 
					</p>
					<p class="see_more"><a href="https://www.nowcoder.com/careers/4paradigm/372" target="_blank">[查看详情]</a>
					</p>
				</div>
			</div>
			<div class="child">
				<div id="child_3">
				<h3 class="sub_tit">【事务通知】</h3>
					<h2 class="tit">关于学生就业指导中心暑期值班安排通知</h2>
					<p class="pa"> 值班时间：<br>7月17日-7月20日<br>上午9点-11点30 <br>7月23日-8月30日 <br>逢周一三五上午9点-11点30 <br>值班地点：<br>五山校区一号楼 <br>联系电话：<br>020-87111374
					</p>
					<p class="see_more"><a href="https://mp.weixin.qq.com/s/fnnvRZctkIGmVX28rIHO5Q" target="_blank">[查看详情]</a>
					</p>
				</div>
			</div>
			<div class="child">
					<div id="child_4">
					<h3 class="sub_tit">【招聘信息】</h3>
					<h2 class="tit">上海华讯网络系统有限公司等单位招聘信息</h2>
					<p class="pa">
					广州市荔湾区培贤教育培训中心<br>
					岗位名称：各类教师岗位<br>
					简历投递邮箱：pxjyhr@126.com <br>
					上海华讯网络系统有限公司暑期实习生招聘<br>
					岗位名称：技术服务<br>
					简历投递邮箱：hr122@eccom.com.cn <br>
					</p>
					<p class="see_more"><a href="https://mp.weixin.qq.com/s/SIJ3grIpk7jYzEhQLNiWwQ" target="_blank">[查看详情]</a>
					</p>
					</div>
			</div>
			<div class="child">
					<div id="child_5">
					<h3 class="sub_tit">【招聘信息】</h3>
					<h2 class="tit">广州市普爱社会工作服务社招聘</h2>
					<p class="pa">
					广州市普爱社会工作服务社<br>
					岗位名称：各类岗位<br>
					邮箱：zhaopin@gzpoai.com <br>
					深圳振兴会计师事务所<br>
					岗位名称：各类岗位<br>
					邮箱:1871089012@qq.com <br>
					中共深圳市南山区委组织部<br>
					岗位名称：高层次人才<br>
					邮箱：zzbgbk@szns.gov.cn <br>
					</p>
					<p class="see_more"><a href="https://mp.weixin.qq.com/s/SIJ3grIpk7jYzEhQLNiWwQ" target="_blank">[查看详情]</a>
					</p>
					</div>
			</div>
			<div class="child">
					<div id="child_6">
					<h3 class="sub_tit">【招聘推荐】</h3>
					<h2 class="tit">航天科技集团2019校园招聘</h2>
					<p class="pa">航天，是一个国家综合实力和战略威慑力的重要体现。中国航天事业创建60多年来，在党中央、国务院、中央军委的英明领导和亲切关怀下，几代航天人接续奋斗，走出了一条自力更生、自主创新的发展道路，创造了以“两弹一星”、载人航天和月球探测为代表的辉煌成就
					</p>
					<p class="see_more"><a href="https://mp.weixin.qq.com/s/SIJ3grIpk7jYzEhQLNiWwQ" target="_blank">[查看详情]</a>
					</p>
					</div>


			
		</div>
		
	</div>
<br><br><br><br>
</body>

<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>