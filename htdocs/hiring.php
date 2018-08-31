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
    <title>发布兼职</title>
    <meta charset="utf-8">
	<link rel="stylesheet" href="./assets/css/nav.css">
    <link rel="stylesheet" href="./assets/css/hiring.css">
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

    <!--主体内容-->
    <form method="POST" action="/PHP/hiring.php">
        <div id="content">
            <!--主体内容头部标题-->
            <div class="content_header">
                <h1 id="topic">填写兼职相关信息</h1>
                <hr>
            </div>
            <!--主体内容表格-->
            <div class="content_body">
                
                    <div class="row ">
                        <span class="red_star"> *</span>
                        <span>兼职标题:</span> 
                        <input class="type1" name="title" maxlength=40 placeholder="请输入兼职标题" >
                    </div>

                    <div class="row ">
                        <span class="red_star"> *</span>
                        <span>兼职类型:</span>    
                        <span>
                            <select class="select type " id="type " name="type">
                                <option selected="selected ">请选择类型</option>
                                <option>家教</option>
                                <option>校内兼职</option>
                                <option>校企合作</option>
                                <option>其它</option>
                            </select>
                        </span>
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>学历要求:</span>    
                            <span>
                                <select class="select type " id="type " name="education">
                                    <option selected="selected ">请选择类型</option>
                                    <option>本科生（含大一）</option>
                                    <option>研究生</option>
                                    <option>大二及以上</option>
                                    <option>大三及以上</option>
                                </select>
                            </span>
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>性别要求:</span>    
                            <span>
                                <select class="select type " id="type " name="sex">
                                    <option selected="selected ">请选择类型</option>
                                    <option>男</option>
                                    <option>女</option>
                                    <option>不限</option>
                                </select>
                            </span>
                    </div>

                    <div class="row ">
                            <span>&nbsp;&nbsp; 其他要求:</span> 
                            <textarea class="type2" name="other" maxlength=140 placeholder="请输入其他工作要求" ></textarea>
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>工作内容:</span> 
                            <textarea class="type2" name="content" maxlength=140 placeholder="请输入兼职工作内容" ></textarea>
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>工作时间:</span> 
                            <input class="type1" name="time" maxlength=40 placeholder="如：每周不少于10小时，根据学生空闲时间进行安排" >
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>工作地点:</span> 
                            <input class="type1" name="place" maxlength=40 placeholder="如：五山校区西区饭堂" >
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>工作报酬:</span> 
                            <input class="type1" name="reward" maxlength=40 placeholder="如：18.3元/小时" >
                    </div>
                    <div class="row ">
                            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 备注:</span> 
                            <textarea class="type2" name="remarks"maxlength=140 placeholder="其他信息" ></textarea>
                    </div>
                
            </div>
            <!--主体内容头部标题-->
            <div class="content_header">
                    <h1 id="topic">填写联系方式</h1>
                    <hr>
            </div>
            <!--主体内容表格-->
            <div class="content_body">
                    <div class="row ">
                        <span class="red_star"> *</span>
                        <span>联系人:&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                        <input class="type1" name="contacts" maxlength=40 placeholder="请输入联系人姓名" >
                    </div>

                    <div class="row ">
                            <span class="red_star"> *</span>
                            <span>咨询电话 :</span> 
                            <input class="type1" name="phone" maxlength=40 placeholder="请输入咨询电话" >
                    </div>

                    <div class="row ">
                            <span>简历邮箱:&nbsp;&nbsp;&nbsp;</span> 
                            <input class="type1" name="email"maxlength=40 placeholder="请输入简历投递邮箱" >
                    </div>

                    <div class="row ">
                            <span>QQ或其他 :</span> 
                            <input class="type1" name="otherway" maxlength=40 placeholder="请输入联系QQ或其他方式" >
                    </div>
            </div>
        </div>
        <!--提交按钮-->
        <button id="publish">点击发布</button>
    </form>


</body>

<script type="text/javascript" src="./assets/src/nav.js"></script>
</html>

