function dateinfo(date){
    $.each(date,function(idx,obj){
        var detail ='<div class="usr_content">'+
                        '<span id="usr_name">'+obj.name+'</span>'+
                        '<span id="usr_phone">'+obj.phone+'</span>'+
                    '</div>';
        $("#container").append(detail);
    });
}

var ID=getUrlParam('id');
// 获得url参数方法
function getUrlParam(name){
    var reg=new RegExp("(^|&)"+name+"=([^&]*)(&|$)");
    var r=window.location.search.substr(1).match(reg);
    if(r!=null)return unescape(r[2]);return null;
}

$.getJSON("./PHP/app_morejson.php",{id:ID},function(e){
    if(e.length==0){
        alert("暂无数据");
        return;
    }
    dateinfo(e);
})