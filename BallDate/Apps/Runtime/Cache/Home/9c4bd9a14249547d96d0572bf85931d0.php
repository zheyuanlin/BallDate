<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script type="text/javascript" src="/ballDate/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function() {
            // 检查用户名是否已经存在
            var error = new Array();
            $('input[name="name"]').blur(function(){
                var game_name = $(this).val();
                $.get('/ballDate/home.php/Game/checkName', {'name':name}, function(data) {
                    if (data == '该部门已存在'){
                        $('input[name="name"]').after(
                                '<p id="uMessage" style="color:red">球赛名已存在</p>'
                        );
                        error['name'] = 1;
                    }
                    else {
                        $('#uMessage').remove();
                        error['name']  = 0;
                    }
                });
            });

            $('input[title="resetButton"]').click(function() {
                window.location='/ballDate/home.php/Game/index';
            });

        });
    </script>
</head>
<body>
    <form action="/ballDate/home.php/Game/create" method="post">

        <p>球赛名称：<input type="text" name="name"/><br/></p>
        <p>场地地址：<input type="text" name="location"/><br/></p>
        <input title="regButton" type="submit" name="submit" value="OK!"/>
        <input title="resetButton" type="button" name="reset" value="退出"/>

    </form>

</body>
</html>