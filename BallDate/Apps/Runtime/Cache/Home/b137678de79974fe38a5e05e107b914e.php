<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Left</title>
</head>
<body>
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><h3>您的信息：</h3>

        <p>用户名：<?php echo ($vo["username"]); ?></p>
        <p>姓名：<?php echo ($vo["name"]); ?></p>
        <p>性别：<?php echo ($vo["sex"]); ?></p>
        <p>密码：<?php echo ($vo["password"]); ?></p>
        <p>部门：<?php echo ($vo["dept"]); ?></p>
        <p>工号：<?php echo ($vo["id"]); ?></p><?php endforeach; endif; ?>
</body>
</html>