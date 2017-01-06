<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>注册</title>

    <script type="text/javascript" src="/ballDate/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function() {
            // 检查用户名是否已经存在
            var error = new Array();
            $('input[name="username"]').blur(function(){
                var username = $(this).val();
                $.get('/ballDate/home.php/Register/checkName', {'username':username}, function(data) {
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

            // Submit it!
            $('input[title="regButton"]').click(function() {
                if(error['username'] == 1) {
                    alert('该用户已存在');
                }
                else $('form[name="regForm"]').submit();
            });

            $('input[title="resetButton"]').click(function() {
                window.location='/ballDate/home.php/Login/login';
            });


        });
    </script>
</head>
<body>
    <p>注册新用户： </p>
    <form action="/ballDate/home.php/Register/tryReg" method="post" name="regForm">
        <p>用户名：<input type="text" name="username"/><br/></p>
        <p>密码：<input type="password" name="password"/><br/></p>
        <p>确认密码：<input type="password" name="password2"/><br/></p>
        <p>
        <p>姓名：<input type="text" name="name"/><br/></p>
            性别：<input type="radio" name="sex" value="1"/>男
            |<input type="radio" name="sex" value="0"/>女<br/></p>
        </p>
        <p>工号：<input type="text" name="work_num"/><br/></p>
        <p>
            验证码：<input type="text" name="verify"/>
            <img
                    src="/ballDate/home.php/Public/verify" onclick="this.src=this.src+'?'+Math.random()"
                    title="点击刷新"
                    width="10%" height="30"
            />
            <br/>
        </p>

        <input title="regButton" type="submit" name="submit" value="OK!"/>
        <input title="resetButton" type="button" name="reset" value="退出"/>
    </form>
</body>
</html>