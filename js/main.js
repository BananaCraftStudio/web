document.onreadystatechange=function(){//加载动画
    if(document.readyState=="complete"){
        $(".loading").fadeOut();
    }
}
