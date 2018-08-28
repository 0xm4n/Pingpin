function pupopTip(pupW,pupH,pupText,pupClose,pupCloseH,btnText) {
    var popup = $('<div  class="pupopBox" style="display:none;position: fixed;top:0;left: 0;width: 100%;height: 100%;background-color:rgba(0,0,0,0.6); "><div  class="pupopContent" style="position:absolute;top:50%;left:50%;transform: translate(-50%,-50%);display:flex;flex-direction:column;justify-content:center;align-items:center;width:'+pupW+';height: '+pupH+';background-color: #fff;border-radius: 10px;padding: 20px">' +
        '<img class="pupClose" src="'+pupClose+'" style="position: absolute;height:'+pupCloseH+'; top:0; right:0; cursor: pointer " />' +
        '<div style="font-size: 14px;">'+pupText+' </div>' +
         '</div></div>');
    $("body").append(popup);
    if(btnText){
        $('.pupopContent').append($('<a style="display:; background-color:rgba(0,0,0,0.9);border-radius: 5px;margin-top:10px;padding:5px 20px;color: #fff; text-decoration: none;font-size: 14px; " id="pup_btn" href="javascript:;">'+btnText+'</a>'));

    }
    $('.pupopBox').fadeIn();
    $('body').on('click','.pupClose',function() {
        $('.pupopBox').fadeOut(500,function () {$(this).remove()})
    })
}