<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Right</title>
</head>
<body>
<h3>您的操作：</h3>

    <a href="/project1/index.php/Home/User/del/id/<?php echo ($vo["id"]); ?>">删除账号</a>
    |
    <a href="/project1/index.php/Home/User/modify/id/<?php echo ($vo["id"]); ?>">更新信息</a>

</body>
</html>