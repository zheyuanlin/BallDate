<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>上传页面</title>
</head>
<body>
    <form action="/project1/home.php/Picture/uploadPicture" method="post" enctype="multipart/form-data">
        <p><input type="file" name="filename"/></p>
        <p><input type="submit" value="OK!"/></p>
    </form>

</body>
</html>