<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="UTF-8" />

    <title>Modify Password</title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Vendor CSS-->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="/Public/css/style.css" rel="stylesheet" />
    <style>
        footer {
            display: none;
        }
    </style>


</head>

<body>
<!-- Start: Content -->
<div class="container-fluid content">
    <div class="row">
        <!-- Main Page -->
        <div id="content" class="col-sm-12 full">
            <div class="row">
                <div class="register-box">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="header bk-margin-bottom-20 text-center">
                                <img src="/Public/img/logo1.png" class="img-responsive" alt="" />
                                <h4>MODIFY PASSWORD</h4>
                            </div>
                            <form class="form-horizontal register" action="<?php echo U('login/modify');?>" method="post">
                                <div class="bk-padding-left-20 bk-padding-right-20">
                                    <div class="form-group">
                                        <label>UserName</label>
                                        <input name="username" type="text" class="form-control" placeholder="用户名" id="fullname"/>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>OldPassword</label>
                                                <input name="password" type="password" class="form-control bk-margin-bottom-10" placeholder="旧密码" id="password"/>
                                            </div>
                                            <div class="col-sm-6">
                                                <label>NewPassword</label>
                                                <input name="newpassword" type="password" class="form-control bk-margin-bottom-10" placeholder="新密码" id="newpassword"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row bk-margin-top-20 bk-margin-bottom-10">
                                        <div class="col-sm-8">
                                            <div class="checkbox-custom checkbox-default">
                                                <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 text-right">
                                            <button type="submit" class="btn btn-primary hidden-xs">Modify</button>
                                            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-20">Modify</button>
                                        </div>
                                    </div>
                                    <div class="text-with-hr">
                                        <span>or use otners fuction</span>
                                    </div>
                                    <div class="text-center bk-margin-top-10 bk-margin-bottom-30">
                                        <a class="btn btn-facebook bk-margin-bottom-15 bk-margin-5" href="<?php echo U('login/login');?>">Login
                                        </a>
                                        <a class="btn btn-twitter bk-margin-bottom-15 bk-margin-5" href="<?php echo U('login/register');?>">Register
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Page -->
    </div>
</div><!--/container-->



</body>

</html>