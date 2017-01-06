<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>用户操作首页</title>
    <script>
        function jump() {
            window.location = '/project1/admin.php/User/add';
        }

    </script>
</head>
<body>
    <table border="1" width="500" align="center">
        <tr>
            <th>工号</th>
            <th>用户名</th>
            <th>姓名</th>
            <th>密码</th>
            <th>部门</th>
            <th>操作</th>
        </tr>
        <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($vo["work_num"]); ?></td>
                <td><?php echo ($vo["username"]); ?></td>
                <td><?php echo ($vo["name"]); ?></td>
                <td><?php echo ($vo["password"]); ?></td>
                <td><?php echo ($vo["dept_id"]); ?></td>
                <td>
                    <a href="/project1/admin.php/User/del/id/<?php echo ($vo["id"]); ?>">删除</a>
                     |
                    <a href="/project1/admin.php/User/modify/id/<?php echo ($vo["id"]); ?>">修改</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>
    <center>
        <button onclick="jump()">添加用户</button>
    </center>
    <a href="/project1/admin.php/">返回后台首页</a>
</body>
</html>