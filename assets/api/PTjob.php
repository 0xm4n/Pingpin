<?php

include_once("mysql.php");
include_once("Publishment.php");

    function addPTjob($username,$contacts,$phone,$email,$otherway,
        $title,$type,$education,$sex,$other,$content,$time,$place,$reward,$remarks){

        getConnect();

        //插入联系人信息
        $insertSQL1="INSERT INTO contactinfo VALUES (null,'$contacts','$phone','$email','$otherway')";
        $res1 = mysql_query($insertSQL1);

        //得到ID
        $id = mysql_insert_id();

        //插入兼职相关信息
        $insertSQL2 = "INSERT INTO information VALUES ('$id','$title','$type','$education','$sex','$other','$content','$time','$place','$reward','$remarks')";
        $res2 = mysql_query($insertSQL2);

        $time = 1000;

        $res3 = addPublishment($username,$id,$time);

        //检测信息
        if($res1&&$res2&&$res3){
            mysql_query("COMMIT");
        }
        else{
            mysql_query("ROLLBACK");  
            closeConnect();      
            echo "<script>alert('兼职信息错误！');</script>";
            header("Refresh:10;url=../hiring.html");
            exit();
        }

        //检查数据是否插入成功
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

    }

    function updatePTjob($id,$contacts,$phone,$email,$otherway,
        $title,$type,$education,$sex,$other,$content,$time,$place,$reward,$remarks){
        getConnect();

        //更新contacts,phone,email,otherway
        $updateSQL1 = "UPDATE contactinfo set contacts = '$contacts' , phone = '$phone' , email = '$email' , otherway = '$otherway' WHERE id = '$id' ";
        $res1 = mysql_query($updateSQL1);

        //更新title,type,education,sex,other,content,time,place,reward,remarks
        $updateSQL2 = "UPDATE information set title = '$title' , type = '$type' , education = '$education' , sex = '$sex' ,
            other = '$other' , content = '$content' , time = '$time' , place = '$place' , reward = '$reward' , remarks = '$remarks' WHERE id = '$id' ";
        $res2 = mysql_query($updateSQL2);

        //检测信息
        if($res1&&$res2){
            mysql_query("COMMIT");
        }
        else{
            mysql_query("ROLLBACK");
            closeConnect();        
            echo "<script>alert('修改兼职信息错误！');</script>";
            header("Refresh:10;url=../home.html");
            exit();
        }

        //修改成功
        echo "<script>alert('修改成功！');</script>";
        header("Refresh:0;url=../home.html");
        closeConnect();
    }

    function deletePTjob($id){
        getConnect();

        //删除publishment表中的id项
        $deleteSQL1 = "DELETE FROM publishment WHERE id = '$id'";
        $res1 = mysql_query($deleteSQL1);

        //删除information表中的id项
        $deleteSQL2 = "DELETE FROM information WHERE id = '$id'";
        $res2 = mysql_query($deleteSQL1);

        //删除contactinfo表中的id项
        $deleteSQL3 = "DELETE FROM contactinfo WHERE id = '$id'";
        $res3 = mysql_query($deleteSQL1);

        //检测信息
        if($res1&&$res2&&$res3){
            mysql_query("COMMIT");
        }
        else{
            mysql_query("ROLLBACK");
            closeConnect();        
            echo "<script>alert('删除兼职信息错误！');</script>";
            header("Refresh:10;url=../home.html");
            exit();
        }

        //修改成功
        echo "<script>alert('删除成功！');</script>";
        header("Refresh:0;url=../home.html");
        closeConnect();
    }

    function searchPTjob($searchText){
        getConnect();

        $searchAddSql = "";
        if($searchText !=="" ){
            $searchAddSql = $searchAddSql." and (title like '%".$searchText."%'
            or time like '%".$searchText."%' 
            or type like '%".$searchText."%'
            or place like '%".$searchText."%'
            or education like '%".$searchText."%'
            or reward like '%".$searchText."%')";
        }

        //构造查询语句
        $searchSQL = "SELECT title , time , type , place , education , reward FROM information WHERE 1=1 ".$searchAddSql;

        $results = array();
        $result_query = mysql_query($searchSQL);
        
        
        while ($row = mysql_fetch_assoc($result_query)) {
            $results[] = $row;
        }
        
        $rstr = json_encode($results);

        if($results){
            mysql_query("COMMIT");
            $file = fopen("../assets/src/testsearch..json","w") or die("获取查询兼职列表错误!");

            $head = "{\"date\":{\"date_list\":";
            $end = "}}";

            $str = $head.$rstr.$end;
            fwrite($file,$str);
            fclose($file);
            closeConnect();
        }else{
            mysql_query("ROLLBACK");
            closeConnect();        
            echo "<script>alert('获取查询兼职列表错误！');</script>";
            header("Refresh:10;url=../home.html");
            exit();
        }


        /*

        $res1 = mysql_query($searchSQL);

        //检测信息
        if($res1){
            mysql_query("COMMIT");
        }
        else{
            mysql_query("ROLLBACK");
            closeConnect();        
            echo "<script>alert('查询错误！');</script>";
            header("Refresh:10;url=../home.html");
            exit();
        }

        //查询成功

        closeConnect();*/
    }

    function getAllPTjob(){
        getConnect();

        $results = array();
        $selectSQL1 = "SELECT title , time , type , place , education , reward FROM information";

        $result_query = mysql_query($selectSQL1);
        
        
        while ($row = mysql_fetch_assoc($result_query)) {
            $results[] = $row;
        }
        
        $rstr = json_encode($results);

        if($results){
            mysql_query("COMMIT");
            echo $rstr;
            /*$file = fopen("../assets/src/test..json","w") or die("获取兼职列表错误!");

            $head = "{\"date\":{\"date_list\":";
            $end = "}}";

            $str = $head.$rstr.$end;
            fwrite($file,$str);
            fclose($file);*/
            closeConnect();
        }else{
            mysql_query("ROLLBACK");
            closeConnect();        
            echo "<script>alert('获取兼职列表错误！');</script>";
            header("Refresh:10;url=../home.html");
            exit();
        }

        
    }

    function getPTjobInfo($id){
        getConnect();
        //获得兼职详细信息
        $selectSQL1 = "SELECT * FROM information , contactinfo WHERE information.id = contactinfo.id and information.id = '$id'";
        $res1 = mysql_query($selectSQL1);
    
        //检测信息并返回兼职详细信息
        if($res1){
            mysql_query("COMMIT");
            closeConnect();
            return $res1;
        }
        else{
            mysql_query("ROLLBACK");
            closeConnect();        
            return "";
        }  
    }

    

?>