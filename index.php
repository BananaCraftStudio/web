<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>蕉拿之蒙 | 官方网站</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/main.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</head>
<body>
    <?php //这里用到了PHP的读取WebJson
    $Server_IP = "bfc.bcserver.top";//服务器IP
    $Server_Info = file_get_contents("https://mcapi.us/server/status?ip=" . $Server_IP);
    $Server_Info = json_decode($Server_Info, true);
?>
	<div class="loading"><!--加载动画-->
		<div class="loading-img"></div>
        <p class="loading-text">少女祈祷中....</p>
    </div>
    <div id="menu-box"><!--顶部菜单-->
        <div class="menu">
            <div class="menu-item">
                <h2 class="logo"><a href="./">蕉拿之蒙</a></h2>
                <div class="menu-item-list">
                    <a href="./info" target="_blank">关于我们</a>
                    <a href="./faq">FAQ</a>
                    <a href="./status">服务器状态</a>
                    <a href="./download" target="_blank">客户端</a>
                    <a href="./">首页</a>
                </div>
            </div>
        </div>
    </div>
    <div id="banner">
        <div class="join-buttom">
            <div class="join-item">
                <h2>蕉拿之蒙</h2>
                    <p>一个充满欢乐的服务器</p>
                </div>
            <h1><a href="https://jq.qq.com/?_wv=1027&k=32CB3CeF">加入我们</a></h1>
            <h1><a href="./status">服务器状态</a></h1>
            <h1><a href="./download">客户端</a></h1>
        </div>
    </div>
    <div id="item-box">
        <div class="box"><a href="https://jq.qq.com/?_wv=1027&k=32CB3CeF">&#9668&#9668 &nbsp; &nbsp;加入我们</a></div>
        <div class="item-page-box">
            <div class="item-page">
                <h2>服务器介绍</h2>
                    <!-- 获取服务器状态信息 这里用到了PHP-->
                    <a>现在有<strong><?php echo $Server_Info['players']['now'];?></strong>位小伙伴在游戏中</a>
                    <hr>
                   <div class="item-font">
                    <img src="./img/logo.png">
                    <!--在这里写介绍 标题用h3标签 普通文字用a标签-->
                    <h3>服务器玩法</h3>
                    <p>刷矿</p>
                    <p>红包</p>
                    <p>称号</p>
                    <p>匠魂</p>
                    <p>粘液科技(包括附属，可在bs菜单内解锁所有成就)</p>
                    <h3>服务器特色</h3>
                    <p style="text-decoration:line-through">服务器特色？你**才特色</p>
                    <p>完全公益(VIP通过游戏内货币获取)</p>
                    <p>极度安全</p>
                    <p>自由度高</p>
                </div>
            </div>
        </div>
    <div id="footer"><!--角标-->
        <p><a href="https://guaijie.ml" target="_blank">©2019-<?php date('Y')?> <strong>BCSERVER</strong> | 由怪杰编写</a></p>
    </div>
    <script>
function scroll() {//菜单透明化
    var top = $("#item-box").offset().top;
    var scrollTop = $(window).scrollTop();
    if (scrollTop < top) {
        $('#menu-box').css({"background":"none"});
        $('#menu-box').css({"box-shadow":"none"});
        $(".menu-item h2 a").css({"color":"#C6CDD4"})
        $(".menu-item a").css({"color":"#C6CDD4"});
    } else {
        $("#menu-box").css({"background":"#FFFFFF"});
        $("#menu-box").css({"box-shadow":"0px 0px 8px #EAEAEA"});
        $(".menu-item h2 a").css({"color":"#333333"})
        $(".menu-item-list a").css({"color":"#333333"});
    }
}
$(window).on('scroll', function() {
    scroll()
});
    </script>
	</body>
</html>
