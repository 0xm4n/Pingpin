<?php
    include_once("mysql.php");
    include_once("easySecure.php");
    include_once("../assets/api/PTjob.php");

    function checklen($str,$name,$len){
        if(mb_strlen($str,'utf8')>$len){
            $show=$name."长度不能超过".$len."!";
            echo "<script>alert('$show');</script>";
            header("Refresh:0;url=../hiring.html");
            exit();
        }
    }


    if (empty($_POST)) {	
        echo "<script>alert('您提交的表单数据超过post_max_size!');</script>";
        header("Refresh:0;url=../hiring.html");
	    exit();
    }


    $len1=40;   //限制长度40
    $len2=140;  //限制长度140
    $len3=18;  //限制长度18

    //填写联系方式
    $contacts = lib_replace_end_tag($_POST['contacts']);    //联系人
    checklen($contacts,"联系人",$len1);

    $phone = lib_replace_end_tag($_POST['phone']);   //咨询电话
    checklen($phone,"咨询电话",$len3);

    $email = lib_replace_end_tag($_POST['email']);   //简历邮箱
    checklen($email,"简历邮箱",$len1);

    $otherway = lib_replace_end_tag($_POST['otherway']);    //QQ或其他
    checklen($otherway,"QQ或其他",$len1);


    //填写兼职相关信息
    $title = lib_replace_end_tag($_POST['title']);   //兼职标题
    checklen($title,"兼职标题",$len1);

    $type = lib_replace_end_tag($_POST['type']);     //兼职类型
    checklen($type,"兼职类型",$len1);

    $education = lib_replace_end_tag($_POST['education']);   //学历要求
    checklen($education,"学历要求",$len1);

    $sex = lib_replace_end_tag($_POST['sex']);   //性别要求
    checklen($sex,"性别要求",$len1);

    $other = lib_replace_end_tag($_POST['other']);   //其它要求
    checklen($other,"其它要求",$len2);

    $content = lib_replace_end_tag($_POST['content']);   //工作内容
    checklen($content,"工作内容",$len1);

    $time = lib_replace_end_tag($_POST['time']);     //工作时间
    checklen($time,"工作时间",$len1);

    $place = lib_replace_end_tag($_POST['place']);   //工作地点
    checklen($place,"工作地点",$len1);

    $reward =$_POST['reward']; //工作报酬
    checklen($reward,"工作报酬",$len1);
    
    $remarks = lib_replace_end_tag($_POST['remarks']);   //备注
    checklen($remarks,"备注",$len2);


    if($contacts == null || $phone == null || $title == null || $type == null || $education == null
    || $sex == null || $content == null || $time == null || $place == null || $reward == null){
        echo "<script>alert('请输入相关信息！');</script>";
	    header("Refresh:0;url=../hiring.html");
	    exit();
    }

    addPTjob($username,$contacts,$phone,$email,$otherway,$title,$type,$education,$sex,$other,$content,$time,$place,$reward,$remarks);
?>