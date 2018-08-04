<?php
    include_once("mysql.php");

    if (empty($_POST)) {	
        echo "<script>alert('您提交的表单数据超过post_max_size!');</script>";
        header("Refresh:0;url=../hiring.html");
	    exit();
    }

    //填写联系方式
    $contacts = $_POST['contacts'];    //联系人
    $phone = $_POST['phone'];   //咨询电话
    $email = $_POST['email'];   //简历邮箱
    $otherway = $_POST['otherway'];    //QQ或其他

    //填写兼职相关信息
    $title = $_POST['title'];   //兼职标题
    $type = $_POST['type'];     //兼职类型
    $education = $_POST['education'];   //学历要求
    $sex = $_POST['sex'];   //性别要求
    $other = $_POST['other'];   //其它要求
    $content = $_POST['content'];   //工作内容
    $time = $_POST['time'];     //工作时间
    $place = $_POST['place'];   //工作地点
    $reward = $_POST['reward']; //工作报酬
    $remarks = $_POST['remarks'];   //备注

    if($contacts == null || $phone == null || $title == null || $type == null || $education == null
    || $sex == null || $content == null || $time == null || $place == null || $reward == null){
        echo "<script>alert('请输入相关信息！');</script>";
	    header("Refresh:0;url=../hiring.html");
	    exit();
    }

    getConnect();

    $insertSQL1="INSERT INTO contactinfo VALUES (null,'$contacts','$phone','$email','$otherway')";
    mysql_query($insertSQL1);

   
    $err1 = mysql_error();
    if($err1){
        echo "<script>alert('联系信息提交错误！');</script>";
        header("Refresh:0;url=../hiring.html");
	    exit();
    }
    $id = mysql_insert_id();

    $insertSQL2 = "INSERT INTO information VALUES ('$id','$title','$type','$education','$sex','$other','$content','$time','$place','$reward','$remarks')";
    mysql_query($insertSQL2);

    $err2 = mysql_error();
    if($err2){
        $deleteSQL = "DELETE FROM contactinfo WHERE id = '$id'";
        mysql_query($deleteSQL);

        echo "<script>alert('兼职信息提交错误！');</script>";
        header("Refresh:0;url=../hiring.html");
	    exit();
    }

    $selectSQL1 = "SELECT * FROM contactinfo WHERE id = '$id'";
    $selectResult1 = mysql_query($selectSQL1);

    $selectSQL2 = "SELECT * FROM information WHERE id = '$id'";
    $selectResult2 = mysql_query($selectSQL2);

    if (mysql_num_rows($selectResult1) > 0 && mysql_num_rows($selectResult2) > 0) {
        echo "<script>alert('兼职发布成功');</script>";
        header("Refresh:0;url=../home.html");
    }
    else {
        echo "<script>alert('兼职发布失败');</script>";
        header("Refresh:0;url=../hiring.html");
    }

    closeConnect();
?>