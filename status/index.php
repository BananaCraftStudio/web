<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
    <title>蕉拿之蒙服务器状态</title>
    <link rel="icon" href="../img/logo.png">
    <link rel="stylesheet" href="../css/status.css">
    <script src="../js/main.js"></script>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- Powered by PHP Made By GuaiJie -->
</head>

<body oncontextmenu="doNothing()">
<div class="loading"><!--加载动画-->
		<div class="loading-img"></div>
        <p class="loading-text">少女祈祷中....</p>
    </div>
<script type="text/javascript">  
    function doNothing(){  
        window.event.returnValue=false;  
        return false;  
    }  
</script>  
    <?php
        // 服务器ip
        $Server_IP = "bfc.bcserver.top";
        $Server_Info = file_get_contents("https://mcapi.us/server/status?ip=" . $Server_IP);
        $Server_Info = json_decode($Server_Info, true);
    ?>

    <div id="Server_Info">

        <!-- 顶部 -->
        <div class="title">
            <p>BFC状态</p>
        </div>

        <!-- 连接成功 -->
        <div class="Server_On Server_Box">
            <div class="img">
                <img src="<?php echo $Server_Info['favicon'];?>" alt="Server_icons">
            </div>
            <ul class="ul_left">
                <li>BananaFansCraft - 1.17.1 | 成都</li>
                <li><span style="color: rgb(85,255,85);">BananaFansCraft</span>
	      <span style="color: rgb(255,85,85);">-</span>
                    <span style="color: rgb(255,85,255);">1.17.1</span>
                </li>
                <li>
                    <span style="color: rgb(85,255,255);">生存</span>
                    <span style="color: rgb(255,85,85);">-</span>
                    <span style="color: rgb(255,255,85);">插件</span>
                    <span style="color: rgb(255,85,85);">-</span>
                    <span style="color: rgb(85,255,85);">纯净</span>
                    <span style="color: rgb(255,85,85);">-</span>
                    <span style="color: rgb(0,170,170);">公益</span>
                </li>
            </ul>
            <ul class="ul_right">
                <li>在线人数：<?php echo $Server_Info['players']['now'], "/", $Server_Info['players']['max'];?>
                </li>
            </ul>
            <div class="signal on"></div>
        </div>

        <!-- 连接失败 -->
        <div class="SerVer_Off Server_Box">
            <div class="img">
                <img src="<?php echo $Server_Info['favicon'];?>" alt="Server_icons">
            </div>
            <ul class="ul_left">
                <li>BananaFansCraft - 1.17.1 | 成都</li>
                <li style="color: red;">服务器连接失败！<br />请联系管理员进行检查！</li>
            </ul>
            <div class="signal off"></div>
        </div>

        <!-- 页脚 -->
        <div class="footer">
            <div class="buttom_box">
                <div class="buttom">
                    <a href="../">前往官网</a>
                </div>
                <div class="buttom">
                    <a href="../wiki">前往Wiki</a>
                </div>
                <div class="buttom">
                    <a href="https://jq.qq.com/?_wv=1027&k=mtaH8xm5">加入我们</a>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script type="text/javascript">
        if ("<?php echo $Server_Info['online'];?>" == true) {
            // alert("服务器连接成功");
            var Server_On = document.getElementsByClassName("Server_On")[0].style.display = "block";
            var SerVer_Off = document.getElementsByClassName("SerVer_Off")[0].style.display = "none";
        } else {
            // alert("服务器连接失败！请联系管理员怪杰进行检查！");
            var SerVer_Off = document.getElementsByClassName("SerVer_Off")[0].style.display = "block";
            var Server_On = document.getElementsByClassName("Server_On")[0].style.display = "none";
        }
    </script>
</body>
<!-- Powered by PHP Made By GuaiJie -->
</html>