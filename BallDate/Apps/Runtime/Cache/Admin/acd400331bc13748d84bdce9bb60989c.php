<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>部门管理</title>
    <script>
        function jump() {
            window.location = '/project1/admin.php/Dept/add';
        }

    </script>
</head>
<body>
<table border="1" width="500" align="center">
    <tr>
        <th>部门</th>
        <th>人数</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

            <td><?php echo ($vo["dept_name"]); ?></td>
            <td><?php echo ($vo["dept_size"]); ?></td>
            <td>
                <a href="/project1/admin.php/Dept/del/id/<?php echo ($vo["id"]); ?>">删除部门</a>
                |
                <a href="/project1/admin.php/DeptUser/index/id/<?php echo ($vo["id"]); ?>">员工管理</a>
                |
                <a href="/project1/admin.php/Dept/modify/id/<?php echo ($vo["id"]); ?>">部门编辑</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<center>
    <button onclick="jump()">添加部门</button>
</center>
<a href="/project1/admin.php/">返回后台首页</a>
</body>
</html>