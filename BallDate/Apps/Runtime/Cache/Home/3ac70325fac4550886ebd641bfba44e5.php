<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Top</title>
</head>
<body>
    <h3>留言板系统</h3>
    <p>欢迎你<?php echo (session('username')); ?><a href="/project1/index.php/Home/Login/tryLogout" target="_top">退出</a></p>
</body>
</html>