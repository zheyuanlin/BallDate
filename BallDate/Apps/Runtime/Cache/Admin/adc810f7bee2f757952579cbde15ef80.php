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
            $('input[name="dept_name"]').blur(function(){
                var dept_name = $(this).val();
                $.get('/project1/admin.php/Dept/checkName', {'dept_name':dept_name}, function(data) {
                    if (data == '该部门已存在'){
                        $('input[name="dept_name"]').after(
                                '<p id="uMessage" style="color:red">该用部门存在</p>'
                        );
                        error['dept_name'] = 1;
                    }
                    else {
                        $('#uMessage').remove();
                        error['dept_name']  = 0;
                    }
                });
            });

            $('input[title="resetButton"]').click(function() {
                window.location='/project1/admin.php/Dept/index';
            });

        });
    </script>
</head>
<body>
    <form action="/project1/admin.php/Dept/create" method="post">

        <p>部门名：<input type="text" name="dept_name"/><br/></p>

        <input title="regButton" type="submit" name="submit" value="OK!"/>
        <input title="resetButton" type="button" name="reset" value="退出"/>

    </form>

</body>
</html>