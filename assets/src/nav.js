
// 添加监视scroll的监听器，为导航栏添加一个负的left定位
document.addEventListener("scroll",setPosition);
window.addEventListener("resize",setPosition);
function setPosition(){
   //  var scroll_left=document.body.scrollLeft;
   // 在chrome浏览器中不是document.body
   var scroll_left=document.documentElement.scrollLeft,
   nav=document.getElementById("header");
   nav.style.left=~scroll_left+1+"px";
}