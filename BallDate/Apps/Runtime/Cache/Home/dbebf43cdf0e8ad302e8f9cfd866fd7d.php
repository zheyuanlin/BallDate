<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>部门选择</title>
    <script type="text/javascript" src="/ballDate/Public/js/jquery-1.7.2.min.js"></script>
    <script>
        $(function () {
            $('input[title="backButton"]').click(function() {
                window.location='/ballDate/home.php/Game/index';
            });
        });
    </script>
</head>
<body>
<form action="/ballDate/home.php/GameUser/trySwitch" method="post">
    <div><input type="hidden" name="id" value="<?php echo ($data["id"]); ?>"/></div>
    <div><input type="hidden" name="old_game" value="<?php echo ($data["game_id"]); ?>"/></div>
    <div>姓名： <?php echo ($data["name"]); ?></div>
    <!-- Do a for loop to display all the depts!! and then do the rest...-->
    <div>
        <p>您想换到哪场球:</p>
        <?php if(is_array($game_data)): foreach($game_data as $key=>$game): ?><p>
                <?php echo ($game["name"]); ?> | <?php echo ($game["location"]); ?> <input type="radio" name="game_id" value="<?php echo ($game["id"]); ?>"/>
            </p><?php endforeach; endif; ?>


        <input type="submit" value="OK!"/>
        <input title="backButton" type="button" name="back" value="退出"/>
    </div>
</form>
</body>
</html>