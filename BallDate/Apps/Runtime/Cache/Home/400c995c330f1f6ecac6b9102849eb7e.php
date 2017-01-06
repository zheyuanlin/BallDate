<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>

</head>

<body style="width:50%; margin:0 auto;">
<div align="center">
    <h2>用户系统</h2>
    <hr/>
    <p>
        欢迎你<?php echo (session('username')); ?><br/><br/>
        <a href="/ballDate/home.php/Login/tryLogout">退出</a>
    </p>

    <div>
        <div style="border: 1px solid silver; width:150px;">
            <?php if(is_array($picture)): foreach($picture as $key=>$pic): ?><img src="/ballDate/Public/Uploads/<?php echo ($pic["filename"]); ?>" style="height:150px; width:150px;"/><br/><?php endforeach; endif; ?>
            <a href="/project1/home.php/Picture/add_/id/<?php echo ($vo["id"]); ?>">更新头像</a>
        </div>

    </div>
    <hr/>
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><h3>您的信息：</h3>
        <p>用户名：<?php echo ($vo["username"]); ?></p>
        <p>姓名：<?php echo ($vo["name"]); ?></p>
        <p>用户号：<?php echo ($vo["work_num"]); ?></p>


    <hr/>
    <h3>您的操作：</h3>

    <a href="/ballDate/home.php/GameUser/switchGame/id/<?php echo ($vo["id"]); ?>">来一场球！！！</a>
    |
    <a href="/ballDate/home.php/User/modify/id/<?php echo ($vo["id"]); ?>">更新信息</a>

    <a href="/ballDate/home.php/User/del/id/<?php echo ($vo["id"]); ?>">删除账号</a><?php endforeach; endif; ?>
</div>

</body>

<!--
<frameset rows="20%, *">
    <frame src="/ballDate/home.php/Index/top" name="top"/>
    <frameset cols="50%, 50%">
        <frame src="/ballDate/home.php/Index/left" name="left"/>
        <frame src="/ballDate/home.php/Index/right" name="right"/>
    </frameset>
</frameset>
-->

</html>