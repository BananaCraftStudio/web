document.onreadystatechange=function(){
    if(document.readyState=="complete"){
        $(".loading").fadeOut();
    }
}//加载动画

var randombg=Math.floor(Math.random()*5+1);
document.write('<style>#banner{background:url(./img/home-bg'+ randombg +'.png);}</style>');//输出随机的背景图

function IsPC(){  
    var userAgentInfo = navigator.userAgent;
    var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
    var flag = true;  
    for (var v = 0; v < Agents.length; v++) {  
        if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
    }  
    return flag;  
 }
if (/(iPhone|iPad|iPod|iOS)/i.test(navigator.userAgent)) {
   alert("推荐用电脑查看我们官网或者开启电脑模式");
} else if (/(Android)/i.test(navigator.userAgent)) {
   alert("推荐用电脑查看我们官网或者开启电脑模式");
} else {
   void(0);
};//检测客户端是否为电脑