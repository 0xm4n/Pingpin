//分页函数
function Page(opt){}

// 每页显示的数据个数
var page=10;

function page_func(date){
    $.each(date, function(idx,obj){
        if(idx<page){
            dateinfo(obj)
        }
    });
    // 数据总数
    var content=date.length;
    //分页的数量
    var pageTotal=Math.ceil(content/page);

    Page({
        num:pageTotal,
        startNum:1,
        pageSize:page,
        elem:$('.page'),
        callback:function(n){
            pagination(n,date);
        }
    });
}

$.getJSON({
    type:"GET",
    url:"./test.json"      //后端传入json文件的接口
    async:false,
    cache:false,
    dateType:"json",
    success:function(e){
        if(e.date.date_list.length==0){
            alert("暂无数据4");
            return;
        }
        page_func(e.date.date_list);
    }
})

//展示兼职信息
function dateinfo(obj){
    var detail='<div class="ptJob_Info">'+
                    '<h2 class="pt_title">'+
                        obj.title+
                    '</h2>'+
                    '<div class="clickToApply">'+
                        '<span id="salary"><span id="money">'+obj.reward+'</span></span>'+
                        '<button id="apply_btn">点击申请</button>'+
                    '</div>'+
                    '<div>'+
                        '<ul>'+
                            '<li><span>工作时间：</span><span>'+obj.time+'</span></li>'+
                            '<li><span>兼职类型：</span><span>'+obj.pjtype+'</span></li>'+
                            '<li><span>工作地点：</span><span>'+obj.place+'</span></li>'+
                            '<li><span>学历要求：</span><span>'+obj.education+'</span></li>'+
                        '</ul>'+
                    '</div>'+
                '</div>';
    $(".content_body").append(detail);
}

//控制当前页数对应的兼职信息
function pagination(num.list){   //num是数字，list是json文件传入的date集合
    // 清空原有兼职数据
    $(".content_body").html("");    
    $.each(list, function(idx,obj){
        if(idx>=((num-1)*page)&&idx<(num*page)){
            dateinfo(obj);
        }
    });
}

function Page(opt){
// opt{
//     num:pageTotal,
//     startNum:1,
//     pageSize:page,
//     elem:the element about pagination,
//     callback:callback_function
// }

    var set=$.extend({num:null,startNum:1,elem:null,callback:null},opt||{});
    if(set.startNum>set.num||set.startNum<1){
        set.startNum=1;
    }
    var n=0,htm='';
    var clickPages={
        elem:set.elem,
        num:set.num,
        callback:set.callback,
        init:function(){
            this.elem.next('div,pageJump').children('.button').unbind('click');
            this.JumpPages();
            this.elem.children('li').click(function(){
                // 如果点击了页码
                // txt是被点击的li的信息
                var txt=$(this).children('a').text();
                // ele是现在被点击的li,page是现在active的页码
                var page='',ele=null;
                // page1：之前active的页码
                var page1=parseInt(clickPages.elem.children('li.active').attr('page'));
                page1是之前active的li
                if(isNaN(parseInt(txt)))
                {
                    switch(txt){
                        // 如果点击的是下一页
                        case '下一页':
                            if(page1==clickPages.num){
                                // 如果已经是最后一页了
                                return;
                            }
                            if(page1>=(clickPages.num-2)||clickPages.num<=6||page1<3){
                                ele=clickPages.elem.children('li.active').next();
                            }
                            else{
                                clickPages.newPages('next',page1+1);
                                ele=clickPages.elem.children('li.acitve');
                            }
                            break;
                        case '上一页':
                            if(page1=='1'){
                                return;
                            }
                            if(page1>=(clickPages.num-1)||page1<=3||clickPages.num<=6){
                                ele=clickPages.elem.children('li.acitve').prev();
                            }
                            else{
                                clickPages.newPages('prev',page1-1);
                            }
                            break;
                        case '«':
                            if (page1 == '1') {
                                return;
                            }
                            if (clickPages.num > 6) {
                                clickPages.newPages('«', 1);
                            }
                            ele = clickPages.elem.children('li[page=1]');
                            break;
                        case '»':
                            if (page1 == clickPages.num) {
                                return;
                            }
                            if (clickPages.num > 6) {
                                clickPages.newPages('»', clickPages.num);
                            }
                            ele = clickPages.elem.children('li[page=' + clickPages.num + ']');
                            break;
                        case '...':
                            return;
                    }
                }
                else{
                    if((parseInt(txt)>=(clickPages.num-3)||parseInt(txt)<=3)&&clickPages.num>6){
                        clickPages.newPages('jump',parseInt(txt));
                    }
                    ele=$(this);
                }
                page=clickPages.actPages(ele);
                if(page!=''&&page!=page1){
                    if(clickPages.callback){
                        clickPages.callback(parseInt(page));
                    }
                }
            });

        },

        actPages:function (ele){
            ele.addClass('acitve').siblings().removeClass('acitve');
            return clickPages.elem.children('li.active').text();
        },
        JumpPages:function(){
            // 和查询有关的代码
            this.elem.next('div.pageJump').children('.button').click(function(){
                var i=parseInt($(this).siblings('input').val());
                if(isNaN(i)||(i<=0)||i>clickPages.num)
                {
                    return;
                }
                else if(clickPages.num>6){
                    clickPages.newPages('jump',i);
                }
                else{
                    var ele=clickPages.elem.children('li[page='+i+']');
                    clickPages.actPages(ele);
                    if(clickPages.callback)
                    {
                        clickPages.callback(i);
                    }
                    return;
                }

                if(clickPages.callback)
                {
                    clickPages.callback(i);
                }
            });
        },

        newPages:function (type,i){
            // i是目前active的页码编号
            var html="",htmlLeft="",htmlRight="",htmlC="";
            var HL='<li><a>...</a></li>';
            html='<li><a aria-label="Previous">&laquo;</a></li><li><a>上一页</a></li>';
            for(var n=0;n<3;n++)
            {
                // htmlC保存了i-1,i,i+1的html代码
                htmlC+='<li '+((n-1)==0?'class="acitve"':'')+' page="'+(i+n-1)+'"><a>'+(i+n-1)+'</a></li>';
                // htmlleft保存了2，3，4的html代码
                htmlLeft+='< '+((n+2)==i?'class="active"':'')+' page="'+(n+2)+'"><a>'+(n+2)+'</a></li>';
                // htmlright保存了num-3,num-2,num-1的html代码
                htmlRight+='< '+((set.num+n-3)==i?'class="active"':'')+' page="'+(set.num+n-3)+'"><a>'+(set.num+n-3)+'</a></li>';
            }

            switch(type){
                case "next":
						if(i<=4){
                            // 如果是前四页，则分页格式为[1,2,3,4,...,num]
							html+='<li page="1"><a>1</a></li>'+htmlLeft+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}else if(i>=(set.num-3)){
                            // 如果是后四页，则分页格式为[1,...,num-3,num-2,num-1,num]
							html+='<li page="1"><a>1</a></li>'+HL+htmlRight+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}else{
                            // 否则分页格式为[1,...,i-1,i,i+1,...,num]
							html += '<li page="1"><a>1</a></li>'+HL+htmlC+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}
						break;
					case "prev":
						if(i<=4){
                            // 同上
							html+='<li page="1"><a>1</a></li>'+htmlLeft+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}else if(i>=(set.num-3)){
							html+='<li page="1"><a>1</a></li>'+HL+htmlRight+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}else{
							html += '<li page="1"><a>1</a></li>'+HL+htmlC+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}
						break;
					case "«" :
						html+='<li class="active" page="1"><a>1</a></li>'+htmlLeft+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						break;
					case "»" :
						html+='<li page="1"><a>1</a></li>'+HL+htmlRight+'<li class="active" page="'+set.num+'"><a>'+set.num+'</a></li>';
						break;
					case "jump" :
						if(i<=4){
							if(i==1){
								html+='<li class="active" page="1"><a>1</a></li>'+htmlLeft+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
							}else{
								html+='<li page="1"><a>1</a></li>'+htmlLeft+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
							}
						}else if((i>=set.num-3)&&(set.num>=7)){
							if(i==set.num){
								html+='<li page="1"><a>1</a></li>'+HL+htmlRight+'<li class="active" page="'+set.num+'"><a>'+set.num+'</a></li>';
							}else{
								html+='<li page="1"><a>1</a></li>'+HL+htmlRight+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
							}
						}else{
							html += '<li page="1"><a>1</a></li>'+HL+htmlC+HL+'<li page="'+set.num+'"><a>'+set.num+'</a></li>';
						}
            }
            html+='<li><a>下一页</a></li><li><a aria-label="Next">&raquo;</a></li>';
            if(this.num>5||this.num<3){
                set.elem.html(html);
                clickPages.init(num:set.num,elem:set.elem,callback:set.callback);
            }
        }
    }
    //如果总共就一页，隐藏分页
    if(set.num<=1){
        $(".pagination").html("");
        return;
    }
    else if(parseInt(set.num)<=6){
        n=parseInt(set.num);
        var html='<li><a  aria-label="Previous">&laquo;</a></li><li><a>上一页</a></li>';
        for(var i=1;i<=n;i++){
            if(i==set.startnum){
                html+='<li class="active" page="'+i+'"><a>'+i+'</a></li>';
            }
            else{
                html+='<li page="'+i+'"><a>'+i+'</a></li>';
            }
        }
        html +='<li><a>下一页</a></li><li><a  aria-label="Next">&raquo;</a></li>';
        set.elem.html(html);
        clickPages.init();
    }
    else{
        clickPages.newPages("jump",set.startnum)
    }
}
}