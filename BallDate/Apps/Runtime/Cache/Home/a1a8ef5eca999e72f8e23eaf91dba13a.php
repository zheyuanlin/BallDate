<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>球赛管理</title>
    <script>
        function jump() {
            window.location = '/ballDate/home.php/Game/add';
        }

    </script>
</head>
<body>
<table border="1" width="500" align="center">
    <tr>
        <th>球赛</th>
        <th>人数</th>
        <th>场地</th>
        <th>操作</th>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>

            <td><?php echo ($vo["name"]); ?></td>
            <td><?php echo ($vo["size"]); ?></td>
            <td><?php echo ($vo["location"]); ?></td>
            <td>
                <a href="/ballDate/home.php/Game/del/id/<?php echo ($vo["id"]); ?>">取消此场球</a>
                |
                <a href="/ballDate/home.php/Game/modify/id/<?php echo ($vo["id"]); ?>">编辑此场球</a>
            </td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
<center>
    <button onclick="jump()">新一场球</button>
</center>
<a href="/ballDate/home.php/">返回后台首页</a>
</body>
</html>