<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <!-- Vendor CSS-->
    <link href="/Public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Page CSS -->
    <link href="/Public/css/style.css" rel="stylesheet" />

</head>
<body>
    <!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Basic -->
    	<meta charset="UTF-8" />
		<title>Admin Head</title>
	</head>

	<body>
		<!-- Start: Header -->
		<div class="navbar" role="navigation">
			<div class="container-fluid container-nav">
				<!-- Navbar Action -->
				<ul class="nav navbar-nav navbar-actions navbar-left">
					<li class="visible-md visible-lg"><a href="#" id="main-menu-toggle"><i class="fa fa-th-large"></i></a></li>
					<li class="visible-xs visible-sm"><a href="#" id="sidebar-menu"><i class="fa fa-navicon"></i></a></li>
				</ul>
				<!-- Navbar Left -->
				<!--<div class="navbar-left">-->
					 <!--Search Form -->
					<!--<form class="search navbar-form">-->
						<!--<div class="input-group input-search">-->
							<!--<input type="text" class="form-control bk-radius" name="q" id="q" placeholder="Search...">-->
							<!--<span class="input-group-btn">-->
								<!--<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>-->
							<!--</span>-->
						<!--</div>-->
					<!--</form>-->
				<!--</div>-->
				<!-- Navbar Right -->
				<div class="navbar-right">
					<!-- Notifications -->
					<ul class="notifications hidden-xs">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge"></span>
							</a>
						</li>
					</ul>
					<!-- End Notifications -->

					<!-- Userbox -->
					<div class="userbox">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<figure class="profile-picture hidden-xs">
								<img src="/Public/img/avatar.jpg" class="img-circle" alt="" />
							</figure>
							<div class="profile-info">
								<span class="name" >Admin</span>
								<span class="role"><i class="fa fa-circle bk-fg-success"></i> Administrator</span>
							</div>
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="dropdown-menu-header bk-bg-white bk-margin-top-15">
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>
								</li>
								<li>
									<a href="<?php echo U('Login/logout');?>"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- End Userbox -->
				</div>
				<!-- End Navbar Right -->
			</div>
		</div>
		<!-- End: Header -->
		<!-- Start: Content -->
		<div class="container-fluid content">
			<div class="row">
				<!-- Main Page -->
				<div class="main1 ">
					<!-- Page Header -->
					<div class="page-header">
						<div class="pull-left">
							<ol class="breadcrumb visible-sm visible-md visible-lg">
								<li><a href="index.html"><i class="icon fa fa-home"></i>Home</a></li>
								<li class="active"><i class="fa fa-envelope"></i>委托项目管理</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
    <div style="height: 1000px;width: 1200px;margin-left:250px;margin-top: 150px"><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title> Admin Project</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/project_content.css">
    <script src="/Public/front/js/jquery-1.11.3.min.js"></script>
</head>


<!--发布回复模块-->
<div class="consultDiv">
    <h4 style="position: relative;margin-left: 60px;">发布公告：</h4>
    <div>
        <textarea class="ctn" name="content"  rows="3" cols="26" placeholder="内容"
               style="left: 46px; padding: 10px; position: relative; margin: 0px; width: 652px; height: 102px;"></textarea>
    </div>
    <button class="sub btn" type="submit" rel="admin" >发布</button>
</div>


<h4 style="position: relative;margin-left: 60px;">已发布公告:</h4>
<div style="padding:0 30px 30px 0;width: 670px;background: white;margin-left: 5%; border-radius: 10px; ">
    <div style="position:relative;">
            <ol>
                <div class="pro_label"><span>编号</span><span style="left: 175px">内容</span><span class="pro_label2" style="left: 330px">日期</span></div>
                <?php if(is_array($notices)): $i = 0; $__LIST__ = $notices;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$notice): $mod = ($i % 2 );++$i;?><li class="pro_li">
                        <span class="sp1"><?php echo ($notice["nt_id"]); ?></span>
                        <span class="sp3"><?php echo ($notice["nt_content"]); ?></span>
                        <span class="sp5"><?php echo ($notice["nt_date"]); ?></span>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ol>
        <a href="#" style="margin: 10px 350px; position: absolute;">1</a>
    </div>
</div>


<script>
       $(document).ready(function(){
            $('.sub').click(function(){
                $.ajax({
                    type:'POST',
                    url:'/index.php/Admin/Index/send_notice',
                    data:{
                        content:$('.ctn').val(),
                    },
                    success:function(jsonResult){
                        location.reload();
                    },
                    error:function(e){
                        alert('公告不能为空');
                    }
                })
            })
       })
</script>
</body>
</html></div>
    <!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Basic -->
    	<meta charset="UTF-8" />
		<title>Admin Menu</title>
		<!-- Mobile Metas -->
	    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />-->
		<script src="/Public/js/jquery-2.1.1.min.js"></script>

	</head>

	<body>
		<!-- Start: Content -->
		<div class="container-fluid content">
			<div class="row">
				<!-- Sidebar -->
				<div class="sidebar">
					<div class="sidebar-collapse">
						<!-- Sidebar Header Logo-->
						<div class="sidebar-header">
							<img src="/Public/img/logo.png" class="img-responsive" alt="" />
						</div>
						<!-- Sidebar Menu-->
						<div class="sidebar-menu">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-sidebar">
									<div class="panel-body text-center">
										<div class="flag">
											<img src="/Public/img/flags/USA.png" class="img-flags" alt="" />
										</div>
									</div>

									<li class="active">
										<a href="index.html">
											<i class="fa fa-laptop" aria-hidden="true"></i><span>界面首页</span>
										</a>
									</li>

									<li>
										<a href="<?php echo U('index/project');?>" target="_self">
											<span class="pull-right label label-danger p_label" style="left: -15px;position: relative;"></span>
											<i class="fa fa-envelope" aria-hidden="true"></i><span>委托项目管理</span>
										</a>
									</li>

									<li class="nav-parent">
										<a>
											<span class="pull-right label label-danger p_label4" style="left: -15px;position: relative;"></span>
											<i class="fa fa-copy" aria-hidden="true"></i><span>混合项目管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="<?php echo U('index/project_team');?>" target="_self" >
												<span class="pull-right label label-danger p_label1"></span>
												<span class="text"> 团队招募</span>
											</a></li>
											<li><a href="<?php echo U('index/project_find');?>" target="_self">
												<span class="pull-right label label-danger p_label2"></span>
												<span class="text"> 寻物任务</span></a></li>
											<li><a href="<?php echo U('index/project_ad');?>" target="_self">
												<span class="pull-right label label-danger p_label3"></span>
												<span class="text"> 商业广告</span></a></li>
										</ul>
									</li>

									<li class="nav-parent">
										<li>
											<a href="<?php echo U('index/consultation');?>" target="_self">
												<i class="fa fa-life-bouy" aria-hidden="true"></i><span>咨询/交流板块管理</span>
											</a>
										</li>
										<li>
											<a href="<?php echo U('index/notice');?>" target="_self">
												<i class="fa fa-calendar" aria-hidden="true"></i><span>公告管理</span>
											</a>
										</li>
										<li>
											<a href="<?php echo U('index/lunbo');?>" target="_self">
												<i class="fa fa-picture-o" aria-hidden="true"></i><span>轮播广告图管理</span>
											</a>
										</li>
										<li>
											<a href="<?php echo U('index/user_information');?>" target="_self">
												<i class="fa fa-font" aria-hidden="true"></i><span>用户个人信息管理</span>
											</a>
										</li>
								</ul>
							</nav>
						</div>
						<!-- End Sidebar Menu-->
					</div>
					<!-- Sidebar Footer-->
					<div class="sidebar-footer">
					</div>
					<!-- End Sidebar Footer-->
				</div>
				<!-- End Sidebar -->
			</div><!--/container-->
		<div class="clearfix"></div>
	</div>
	</body>
	<script>
		$.ajax({
			type: "POST",
			url: "/index.php/Admin/Index/menu",
			data: {
				p_label: $('p_label').text()
			},
			dataType: 'json',
			success: function (jsonResult) {
				$('.p_label').text(jsonResult[0]);
				$('.p_label4').text(jsonResult[4]);
				$('.p_label1').text(jsonResult[1]);
				$('.p_label2').text(jsonResult[2]);
				$('.p_label3').text(jsonResult[3]);
//				alert(jsonResult);
			},
			error: function (e) {
				alert('error');
			}
		})
	</script>
</html>
</body>
    <!-- start: JavaScript-->
<script src="/Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/core.min.js"></script>
    <!--<script src="/Public/js/jquery.mmenu.min.js"></script>-->
</html>