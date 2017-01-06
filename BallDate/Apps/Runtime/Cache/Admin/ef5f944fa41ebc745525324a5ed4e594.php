<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="/project1/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function() {
            // 检查用户名是否已经存在
            var error = new Array();
            $('input[name="username"]').blur(function(){
                var username = $(this).val();
                $.get('/project1/admin.php/User/checkName', {'username':username}, function(data) {
                    if (data == '该用户已存在'){
                        $('input[name="username"]').after(
                                '<p id="uMessage" style="color:red">该用户已存在</p>'
                        );
                        error['username'] = 1;
                    }
                    else {
                        $('#uMessage').remove();
                        error['username']  = 0;
                    }
                });
            });

            $('input[title="resetButton"]').click(function() {
                window.location='/project1/admin.php/User/index';
            });

        });
    </script>
</head>
<body>
    <form action="/project1/admin.php/User/create" method="post">

        <p>用户名：<input type="text" name="username"/><br/></p>
        <p>密码：<input type="password" name="password"/><br/></p>
        <p>确认密码：<input type="password" name="password2"/><br/></p>
        <p>
        <p>姓名：<input type="text" name="name"/><br/></p>
        性别：<input type="radio" name="sex" value="1"/>男
        |<input type="radio" name="sex" value="0"/>女<br/></p>
        </p>
        <p>工号：<input type="text" name="work_num"/><br/></p>

        <input title="regButton" type="submit" name="submit" value="OK!"/>
        <input title="resetButton" type="button" name="reset" value="退出"/>

    </form>

</body>
</html>