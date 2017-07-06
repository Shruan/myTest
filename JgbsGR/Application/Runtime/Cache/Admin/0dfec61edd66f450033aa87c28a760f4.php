<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/front//css/admin_login.css">
    <script type="text/javascript" src="/Public/front//js/jquery-1.11.3.min.js" ></script>
    <title>管理员登录</title>
</head>
<body>
<div id="header">管理员登录
    <form class="reg" action="<?php echo U('login/login');?>" method="post">
        <input class="username" name="username" placeholder="用户名" type="text" >
        <input class="password" name="password" type="password" placeholder="密码"/>
        <button class="sub" type="submit" value=""/>登录</button>
    </form>
</div>
</body>
<script>
</script>
</html>