<?php 
include_once("PHP/mysql.php");

session_start();
if (!isset($_SESSION['log']) || empty($_SESSION['log']) || $_SESSION['log'] != 1) {
    echo "<script>alert('请先登陆！');</script>";
    header("Refresh:0;url=index.html");
    exit();
}

if (!isset($_SESSION['role']) || empty($_SESSION['role']) || $_SESSION['role'] != 1) {
    echo "<script>alert('您没有权力进入此页！');</script>";
    header("Refresh:0;url=home.php");
    exit();
}


getConnect();
$selectSQL = "SELECT * FROM user, userinfo, application WHERE user.username=userinfo.username and user.username=application.username";
$res1 = mysql_query($selectSQL);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" charset="utf-8" />
    <link rel="stylesheet" href="./assets/css/back.css" />
    <script src="./assets/src/jquery.min.js"></script>
    <script src="./assets/src/ajax.js"></script>
    <title>Ping聘</title>
</head>

<body>
    <div class="main">
        <div class="head">
            <div class="logo">
                <div class="logoIcon headImage"></div>

            </div>
            <div class="seperator">|</div>
            <div class=“header_title”>
                <h2 class="h2tit"> 后台管理系统</h2>
            </div>
            <div class="flexBlank"></div>
            <div title="消息提醒" class="notificationButton headImage menuButton"></div>
            <div title="注销账号" class="logoutButton headImage menuButton" onclick="logout()"></div>
            <div class="administratorInfo"></div>
            <div class="administratorPortraitContainer">
                <div class="administratorPortrait"></div>
            </div>
        </div>
        <div class="body">
            <div class="aside">
                <div class="asideListTitle" onclick="toggleExpand(this)">
                    <div class="asideListTitleIcon asideListSystemUsers"></div>
                    <div class="asideListTitleWord">用户管理</div>
                    <img src="images/arrow.png" class="asideListTitleStatusIcon" data-expand="false" />
                </div>
                <ul class="asideListContent" data-expand="false">
                    <li class="asideListItem"><a href="console.php">删除用户</a></li>
                    <li class="asideListItem"><a href="annon_delete.php">删除招聘</a></li>
                    <li class="asideListItem">删除申请</li>
                    <li class="asideListItem"><a href="author.php">权限控制</a></li>
                </ul>
                <div class="asideListTitle" onclick="toggleExpand(this)">
                    <div class="asideListTitleIcon asideListAdministrator"></div>
                    <div class="asideListTitleWord">管理员</div>
                    <img src="images/arrow.png" class="asideListTitleStatusIcon" data-expand="false" />
                </div>
                <ul class="asideListContent" data-expand="false">
                    <li class="asideListItem">个人信息</li>
                    <li class="asideListItem">操作日志</li>
                    <li class="asideListItem">系统反馈</li>
                </ul>
                <div class="asideListTitle" onclick="toggleExpand(this)">
                    <div class="asideListTitleIcon asideListSettings"></div>
                    <div class="asideListTitleWord">系统设置</div>
                    <img src="images/arrow.png" class="asideListTitleStatusIcon" data-expand="false" />
                </div>
                <ul class="asideListContent" data-expand="false">
                    <li class="asideListItem">控制台主题</li>
                    <li class="asideListItem">管理表格样式</li>
                    <li class="asideListItem">预览文章</li>
                    <li class="asideListItem">导出操作日志</li>
                    <li class="asideListItem">敏感词设置</li>
                </ul>
            </div>
            <div class="content">
                <div class="content_index">用户管理->删除申请</div>
                <div class="controlPanelTop">
                    <input placeholder=" 输入用户名称搜索" class="searchInput" />
                    <div class="searchButton">搜索</div>
                    <div class="flexBlank"></div>
                    <div class="refreshButton"></div>
                </div>
                <div class="tableArea">
                    <table>
                        <tr>
                            <td>选择</td>
                            <th>申请</th>
                            <th>用户名</th>
                            <th>姓名</th>
                            <th>联系方式</th>
                        </tr>
                        <?php
                        while ($row = mysql_fetch_array($res1)) {
                            echo "<tr><td><input type=\"radio\" value=\"" . $row['username'] . "|" . $row['id'] . "\" name=\"all_row\"></input></td>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['username'] . "</td>
                                <td>" . $row['name'] . "</td>
                                <td>" . $row['phone'] . "</td></tr>";
                        }
                        closeConnect();
                        ?>
                    </table>
                </div>
                <div class="controlPanelBottom">
                    <div class="controlPanelBottomButton">批量删除</div>
                    <div class="flexBlank"></div>
                    <div class="controlPanelBottomButton" onclick="goToPreviousPage()">上一页</div>
                    <div class="controlPanelBottomButton" onclick="goToNextPage()">下一页</div>
                    <input placeholder="1" class="pageInput" />
                    <div class="jumpButton" onclick="goToCertainPage()">跳转</div>
                </div>
                <div class="btn_div"><button class="del_button" onclick="delApply()">>删除</button></div>
            </div>
        </div>
    </div>
    <script src="./assets/src/back.js"></script>
</body>

</html>
