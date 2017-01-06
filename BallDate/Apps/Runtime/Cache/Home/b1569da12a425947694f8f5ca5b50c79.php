<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>

    <script type="text/javascript" src="/ballDate/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function() {
            $('input[title="loginButton"]').click(function(){
                $('form[name="loginForm"]').submit();
            });

            $('input[title="registerButton"]').click(function() {
                window.location='/ballDate/home.php/Register/reg';
            });
        });
    </script>

</head>
<body>
    <p>请登录： </p>
    <form action="/ballDate/home.php/Login/tryLogin" method="post" name="loginForm">
        <p>用户名：<input type="text" name="username"/><br/></p>
        <p>密码：<input type="password" name="password"/><br/></p>
        <p>
            验证码：<input type="text" name="verify"/>
            <img
                src="/ballDate/home.php/Public/verify" onclick="this.src=this.src+'?'+Math.random()"
                title="点击刷新"
                width="10%" height="30"
            />
            <br/>
        </p>
        <input title="loginButton" type="submit" name="submit" value="登陆"/>
        <input title="registerButton" type="button" name="register" value="注册"/>
    </form>
</body>
</html>