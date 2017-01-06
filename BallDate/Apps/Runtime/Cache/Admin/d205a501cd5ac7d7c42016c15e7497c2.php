<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>部门选择</title>
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
<form action="/project1/admin.php/DeptUser/trySwitch" method="post">
    <div><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/></div>
    <div><input type="hidden" name="old_dept" value="<?php echo ($data["dept_id"]); ?>"/></div>
    <div>员工： <?php echo ($data["name"]); ?></div>
    <!-- Do a for loop to display all the depts!! and then do the rest...-->
    <div>
        <p>选择新部门:</p>
        <?php if(is_array($dept_data)): foreach($dept_data as $key=>$dept): ?><p>
                <?php echo ($dept["dept_name"]); ?> <input type="radio" name="dept_id" value="<?php echo ($dept["id"]); ?>"/>
            </p><?php endforeach; endif; ?>


        <input type="submit" value="OK!"/>
        <input title="backButton" type="button" name="back" value="退出"/>
    </div>
</form>
</body>
</html>