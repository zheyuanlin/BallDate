<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新信息</title>
    <script type="text/javascript" src="/project1/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function () {
            $('input[title="backButton"]').click(function() {
                window.location='/project1/home.php/Index/index';
            });
        });
    </script>
</head>
<body>
    <form action="/project1/home.php/User/update" method="post">
        <div><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/></div>
        <div>用户名: <input type="text" name="username" value="<?php echo ($data["username"]); ?>"/><br/></div>
        <div>姓名<input type="text" name="name" value="<?php echo ($data["name"]); ?>"/></div>
        <div>性别 (男): <input type="radio" name="sex" value="1"/>
            (女): <input type="radio" name="sex" value="0"/>
        </div>
        <div>密码：<input type="text" name="password" value="<?php echo ($data["password"]); ?>"/></div>
        <div>工号：<input type="text" name="work_num" value="<?php echo ($data["work_num"]); ?>"/></div>

        <div>
            <input type="submit" value="OK!"/>
            <input title="backButton" type="button" name="back" value="退出"/>
        </div>
    </form>
</body>
</html>