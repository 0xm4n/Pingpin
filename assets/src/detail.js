var ID=getUrlParam('id');

// 获得url参数方法
function getUrlParam(name){
    var reg=new RegExp("(^|&)"+name+"=([^&]*)(&|$)");
    var r=window.location.search.substr(1).match(reg);
    if(r!=null)return unescape(r[2]);return null;
}
$.getJSON("./PHP/detailjson.php",{id:ID}, function (e) {
    if (e.length == 0) {
        alert("暂无数据4");
        return;
    }
    $.each(e,function(idx,obj){
        dateinfo(obj);
    })
})

//展示兼职信息
function dateinfo(obj){
    
    var detail='<div id="content_abstract">'+
                    '<h1 id="pt_title">'+
                        obj.title+
                    '</h1>'+
                    '<div id="salary">'+obj.reward+'</div>'+
                    '<div id="require">学历：'+obj.education+'<br>'+' 性别要求：'+obj.sex+'<br>'+"其他要求："+obj.other+'</div>'+
                '</div>'+
                '<div id="content_detail">'+
                    '<div class="content_header"><span id="sub_title">兼职详情</span><hr></div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【工作内容】</span><br>'+
                        '<span class="sub_content2">'+obj.content+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【兼职要求】</span><br>'+
                        '<span class="sub_content2">学历：'+obj.education+'<br>'+'&nbsp;&nbsp;&nbsp;&nbsp;'+'  性别要求：'+obj.sex+'<br>'+'&nbsp;&nbsp;&nbsp;&nbsp;'+"   其他要求："+obj.other+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【工作时间】</span><br>'+
                        '<span class="sub_content2">'+obj.time+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【工作地点】</span><br>'+
                        '<span class="sub_content2">'+obj.place+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【薪资待遇】</span><br>'+
                        '<span class="sub_content2">'+obj.reward+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                    '<div class="content_header"><span id="sub_title">联系方式</span><hr></div>'+
                        '<span class="sub_title2">【联系人】</span><br>'+
                        '<span class="sub_content2">'+obj.contacts+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【联系电话】</span><br>'+
                        '<span class="sub_content2">'+obj.phone+'</span>'+
                    '</div>'+
                    '<div class="row">'+
                        '<span class="sub_title2">【简历投递邮箱】</span><br>'+
                        '<span class="sub_content2">'+obj.email+'</span>'+
                    '</div>'+
                '</div>'+
                '<a href="./PHP/application.php'+'?id='+ID+'">点击申请</a>';
    $("#content").append(detail);
}