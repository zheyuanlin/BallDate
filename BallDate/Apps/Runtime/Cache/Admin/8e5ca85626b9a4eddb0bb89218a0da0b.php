<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>更新信息</title>
    <script type="text/javascript" src="/project1/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function () {
            $('input[title="backButton"]').click(function() {
                window.location='/project1/admin.php/Dept/index';
            });
        });
    </script>
</head>
<body>
    <form action="/project1/admin.php/Dept/update" method="post">
        <div><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/></div>
        <div>部门名称：<input type="text" name="dept_name" value="<?php echo ($data["dept_name"]); ?>"/></div>
        <div>
            <input type="submit" value="OK!"/>
            <input title="backButton" type="button" name="back" value="退出"/>
        </div>
    </form>
</body>
</html>