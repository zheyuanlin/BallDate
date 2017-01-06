<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新信息</title>
    <script type="text/javascript" src="/ballDate/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function () {
            $('input[title="backButton"]').click(function() {
                window.location='/ballDate/home.php/Game/index';
            });
        });
    </script>
</head>
<body>
    <form action="/ballDate/home.php/Game/update" method="post">
        <div><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/></div>
        <div>球赛名称：<input type="text" name="name" value="<?php echo ($data["name"]); ?>"/></div>
        <div>场地地址：<input type="text" name="location" value="<?php echo ($data["location"]); ?>"/></div>
        <div>
            <input type="submit" value="OK!"/>
            <input title="backButton" type="button" name="back" value="退出"/>
        </div>
    </form>
</body>
</html>