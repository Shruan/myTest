<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>

     <!--Favicon and touch icons -->
    <link rel="shortcut icon" href="/Public/ico/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="/Public/ico/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="/Public/ico/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/Public/ico/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="/Public/ico/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/Public/ico/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="/Public/ico/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/Public/ico/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="/Public/ico/apple-touch-icon-152x152.png" />

    <!-- start: CSS file-->

    <!-- Vendor CSS-->
    <link href="/Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/vendor/skycons/css/skycons.css" rel="stylesheet" />
    <link href="/Public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/vendor/css/pace.preloader.css" rel="stylesheet" />

    <!-- Plugins CSS-->
    <!--<link href="/Public/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet" />-->
    <!--<link href="/Public/plugins/scrollbar/css/mCustomScrollbar.css" rel="stylesheet" />-->
    <!--<link href="/Public/plugins/bootkit/css/bootkit.css" rel="stylesheet" />-->
    <!--<link href="/Public/plugins/magnific-popup/css/magnific-popup.css" rel="stylesheet" />-->
    <!--<link href="/Public/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet" />-->
    <!--<link href="/Public/plugins/jqvmap/jqvmap.css" rel="stylesheet" />-->

    <!-- Theme CSS -->
    <link href="/Public/css/jquery.mmenu.css" rel="stylesheet" />

    <!-- Page CSS -->
    <link href="/Public/css/style.css" rel="stylesheet" />
    <link href="/Public/css/add-ons.min.css" rel="stylesheet" />

    <!-- end: CSS file-->
    <!-- Head Libs -->
    <!--<script src="/Public/plugins/modernizr/js/modernizr.js"></script>-->

    <!--<script src="/Public/js/ery-1.11.3.min.js"></script>-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!--[endif]-->
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
				<div class="navbar-left">
					<!-- Search Form -->
					<!--<form class="search navbar-form">-->
						<!--<div class="input-group input-search">-->
							<!--<input type="text" class="form-control bk-radius" name="q" id="q" placeholder="Search...">-->
							<!--<span class="input-group-btn">-->
								<!--<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>-->
							<!--</span>-->
						<!--</div>-->
					<!--</form>-->
				</div>
				<!-- Navbar Right -->
				<div class="navbar-right">
					<!-- Notifications -->
					<ul class="notifications hidden-xs">
						<!--<li>-->
							<!--<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">-->
								<!--<i class="fa fa-tasks"></i>-->
								<!--<span class="badge">10</span>-->
							<!--</a>-->
							<!--<ul class="dropdown-menu update-menu" role="menu">-->
								<!--<li><a href="#"><i class="fa fa-database bk-fg-primary"></i> Database </a></li>-->
								<!--<li><a href="#"><i class="fa fa-bar-chart-o bk-fg-primary"></i> Connection </a></li>-->
								<!--<li><a href="#"><i class="fa fa-bell bk-fg-primary"></i> Notification </a></li>-->
								<!--<li><a href="#"><i class="fa fa-envelope bk-fg-primary"></i> Message </a></li>-->
								<!--<li><a href="#"><i class="fa fa-flash bk-fg-primary"></i> Traffic </a></li>-->
								<!--<li><a href="#"><i class="fa fa-credit-card bk-fg-primary"></i> Invoices </a></li>-->
								<!--<li><a href="#"><i class="fa fa-dollar bk-fg-primary"></i> Finances </a></li>-->
								<!--<li><a href="#"><i class="fa fa-thumbs-o-up bk-fg-primary"></i> Orders </a></li>-->
								<!--<li><a href="#"><i class="fa fa-folder bk-fg-primary"></i> Directories </a></li>-->
								<!--<li><a href="#"><i class="fa fa-users bk-fg-primary"></i> Users </a></li>-->
							<!--</ul>-->
						<!--</li>-->
						<!--<li>-->
							<!--<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">-->
								<!--<i class="fa fa-envelope"></i>-->
								<!--<span class="badge">5</span>-->
							<!--</a>-->
							<!--<ul class="dropdown-menu">-->
								<!--<li class="dropdown-menu-header">-->
									<!--<strong>Messages</strong>-->
									<!--<div class="progress progress-xs  progress-striped active">-->
										<!--<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">-->
											<!--60%-->
										<!--</div>-->
									<!--</div>-->
								<!--</li>-->
								<!--<li class="avatar">-->
									<!--<a href="page-inbox.html">-->
										<!--<img class="avatar" src="/Public/img/avatar1.jpg" alt="" />-->
										<!--<div><div class="point point-primary point-lg"></div>New message</div>-->
										<!--<span><small>1 minute ago</small></span>-->
									<!--</a>-->
								<!--</li>-->
								<!--<li class="avatar">-->
									<!--<a href="page-inbox.html">-->
										<!--<img class="avatar" src="/Public/img/avatar2.jpg" alt="" />-->
										<!--<div><div class="point point-primary point-lg"></div>New message</div>-->
										<!--<span><small>3 minute ago</small></span>-->
									<!--</a>-->
								<!--</li>-->
								<!--<li class="avatar">-->
									<!--<a href="page-inbox.html">-->
										<!--<img class="avatar" src="/Public/img/avatar3.jpg" alt="" />-->
										<!--<div><div class="point point-primary point-lg"></div>New message</div>-->
										<!--<span><small>4 minute ago</small></span>-->
									<!--</a>-->
								<!--</li>-->
								<!--<li class="avatar">-->
									<!--<a href="page-inbox.html">-->
										<!--<img class="avatar" src="/Public/img/avatar4.jpg" alt="" />-->
										<!--<div><div class="point point-primary point-lg"></div>New message</div>-->
										<!--<span><small>30 minute ago</small></span>-->
									<!--</a>-->
								<!--</li>-->
								<!--<li class="avatar">-->
									<!--<a href="page-inbox.html">-->
										<!--<img class="avatar" src="/Public/img/avatar5.jpg" alt="" />-->
										<!--<div><div class="point point-primary point-lg"></div>New message</div>-->
										<!--<span><small>1 hours ago</small></span>-->
									<!--</a>-->
								<!--</li>-->
								<!--<li class="dropdown-menu-footer text-center">-->
									<!--<a href="page-inbox.html">View all messages</a>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</li>-->
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">4</span>
							</a>
							<ul class="dropdown-menu list-group">
								<li class="dropdown-menu-header">
									<strong>Notifications</strong>
									<div class="progress progress-xs  progress-striped active">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
											60%
										</div>
									</div>
								</li>
								<li class="list-item">
									<a href="page-inbox.html">
										<div class="pull-left">
										   <i class="fa fa-envelope-o bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>Unread Message</div>
											<h6>You have 10 unread message</h6>
										</div>
									</a>
								</li>
								<li class="list-item">
									<a href="#">
										<div class="pull-left">
										   <i class="fa fa-cogs bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>New Settings</div>
											<h6>There are new settings available</h6>
										</div>
									</a>
								</li>
								<li class="list-item">
									<a href="#">
										<div class="pull-left">
										   <i class="fa fa-fire bk-fg-primary"></i>
										</div>
										<div class="media-body clearfix">
											<div>Update</div>
											<h6>There are new updates available</h6>
										</div>
									</a>
								</li>
								<li class="list-item-last">
									<a href="#">
									  <h6>Unread notifications</h6>
									  <span class="badge">15</span>
									</a>
								</li>
							</ul>
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
								<span class="name">Admin</span>
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
									<a href="page-profile.html"><i class="fa fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-wrench"></i> Settings</a>
								</li>
								<li>
									<a href="page-invoice"><i class="fa fa-usd"></i> Payments</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-file"></i> File</a>
								</li>
								<li>
									<a href="<?php echo U('../Front/login/login');?>"><i class="fa fa-power-off"></i> Logout</a>
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
				<!-- Sidebar -->
				<!-- End Sidebar -->
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
						<div class="pull-right">
							<!--<h2>Dashboard</h2>-->
						</div>
					</div>
					<!-- End Page Header -->
				<!-- End Main Page -->
				<!-- Footer -->
				<!-- End Footer -->
			</div><!--/container-->
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
<body>

<h4 style="position: relative;margin-left: 60px;">咨询：</h4>
<div style="height: 255px;width: 800px;background: white;margin-left: 5%; border-radius: 10px; ">
    <div style="position:relative;">
            <ul>
                <div class="pro_label"><span>编号</span><span>标题</span><span style="left: 110px">内容</span><span class="pro_label2">用户名</span><span class="pro_label2">日期</span></div>
                <?php if(is_array($results)): $i = 0; $__LIST__ = $results;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$result): $mod = ($i % 2 );++$i;?><li class="pro_li" rel="<?php echo ($result["cst_id"]); ?>">
                        <span class="sp1"><?php echo ($result["cst_id"]); ?></span>
                        <span class="sp2"><a href="#" title="<?php echo ($result["cst_title"]); ?>"><?php echo ($result["cst_title"]); ?></a></span>
                        <span class="sp3"><a href="#" title="<?php echo ($result["cst_content"]); ?>"><?php echo ($result["cst_content"]); ?></a></span>
                        <span class="sp4"><?php echo ($result["cst_belong_user"]); ?></span>
                        <span class="sp5"><?php echo ($result["cst_date"]); ?></span>
                        <a href="#" class="sp6 ibtn" rel="<?php echo ($result["cst_id"]); ?>"><i></i></a>
                        <button class="btn btn-warning spbtn" style="left: 530px"><a href="/index.php/Home/Index/del_btn/cst_id/<?php echo ($result["cst_id"]); ?>">删除</a></button>
                        <div class="idiv" rel="<?php echo ($result["cst_id"]); ?>" style="display: none;background: white;z-index:2;border: 1px silver solid">
                            <ul>
                                <?php if(is_array($consults)): $i = 0; $__LIST__ = $consults;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$consult): $mod = ($i % 2 );++$i;?><div class="pro_label"><span>编号</span><span style="left: 110px">内容</span><span class="pro_label2">用户名</span><span class="pro_label2">日期</span></div>
                                    <li class="pro_li">
                                        <span class="sp1 cst1" ><?php echo ($consult["reply_id"]); ?></span>
                                        <span class="sp3 cst2"><a href="#" title="<?php echo ($consult["reply_conment"]); ?>"><?php echo ($consult["reply_conment"]); ?></a></span>
                                        <span class="sp4 cst3"><?php echo ($consult["user_username"]); ?></span>
                                        <span class="sp5 cst4"><?php echo ($consult["reply_date"]); ?></span>
                                        <button class="btn btn-warning spbtn" style="left: 530px"><a href="/index.php/Home/Index/del_btn/reply_id/<?php echo ($result["reply_id"]); ?>">删除</a></button>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                        </div>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
    </div>
</div>
<script>
       $(document).ready(function(){
           //编辑按钮
//           $('.ibtn').on('click',function(event){
               $('.pro_li').on('click',function(){
                   if($(this).children('div').css('display')=='block'){
                       $(this).children('div').hide('slow');
                       $(this).children('a').children('i').css('border-color','rgb(148, 144, 101) transparent transparent');
                   }else if($(this).children('div').css('display')=='none'){
                       $(this).children('div').show('slow');
                       $(this).children('a').children('i').css('border-color','transparent transparent rgb(148, 144, 101)');
                   }

//               })
//               $('.pro_li').click(function(){
//                   index = $(this).prevAll().length;
//               }) ;
//               that = $(this);
//               if($(".idiv").css('display')=='block'){
//                   $(".idiv").hide('slow');
//                   $(".ibtn i").css('border-color','rgb(148, 144, 101) transparent transparent');
//               }else{
//                   $(".idiv").show('slow');
//                   $(".ibtn i").css('border-color','transparent transparent rgb(148, 144, 101)');
//               }
                       that = $(this);
                       $.ajax({
                           type: "POST",
                           url:"/index.php/Home/Index/cst_btn",
                           data: {
                               "uid": that.attr("rel"),
                           },
                           dataType:'json',
                           success:function(jsonResult){
                               alert(jsonResult);
                               $('.cst1').val=(jsonResult.reply_id);
                               alert(jsonResult.reply_id);

                           },
                           error:function(e){
                               alert('error');
                           }
                       });


           });
       });
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
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


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
											<span class="pull-right label label-danger">4</span>
											<i class="fa fa-envelope" aria-hidden="true"></i><span>委托项目管理</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i><span>混合项目管理</span>
										</a>
										<ul class="nav nav-children">
											<li><a href="<?php echo U('index/project_team');?>" target="_self" ><span class="text"> 团队招募</span></a></li>
											<li><a href="<?php echo U('index/project_find');?>" target="_self"><span class="text"> 寻物任务</span></a></li>
											<li><a href="<?php echo U('index/project_ad');?>" target="_self"><span class="text"> 商业广告</span></a></li>
											<!--<li><a href="page-invoice.html"><span class="text"> Invoice</span></a></li>-->
											<!--<li><a href="page-pricing-tables.html"><span class="text"> Pricing Tables</span></a></li>-->
											<!--<li><a href="page-login.html"><span class="text"> Login Page</span></a></li>-->
											<!--<li><a href="page-register.html"><span class="text"> Register Page</span></a></li>-->

										</ul>
									</li>
									<li class="nav-parent">
									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-tasks" aria-hidden="true"></i><span>咨询/交流板块管理</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="ui-basic-elements.html"><span class="text"> Basic Elements</span></a></li>-->
											<!--<li><a href="ui-nestable-list.html"><span class="text"> Nestable</span></a></li>-->
											<!--<li><a href="ui-buttons.html"><span class="text"> Buttons</span></a></li>-->
											<!--<li><a href="ui-progress-bars.html"><span class="text"> Progress Bars</span></a></li>-->
											<!--<li><a href="ui-sliders.html"><span class="text"> Sliders</span></a></li>-->
											<!--<li><a href="ui-panels.html"><span class="text"> Panels</span></a></li>-->
											<!--<li><a href="ui-tabs.html"><span class="text"> Tabs</span></a></li>-->
											<!--<li><a href="ui-notifications.html"><span class="text"> Notifications</span></a></li>-->
											<!--<li><a href="ui-modals.html"><span class="text"> Modals</span></a></li>-->
											<!--<li><a href="ui-portlets.html"><span class="text"> Portlets</span></a></li>-->
											<!--<li><a href="ui-lightbox.html"><span class="text"> Lightbox</span></a></li>-->
											<!--<li><a href="ui-carousels.html"><span class="text"> Carousels</span></a></li>-->
											<!--<li><a href="ui-animation.html"><span class="text"> Animation</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-list-alt" aria-hidden="true"></i><span>公告管理</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="form-elements.html"><span class="text"> Elements</span></a></li>-->
											<!--<li><a href="form-wizard.html"><span class="text"> Wizard</span></a></li>-->
											<!--<li><a href="form-validation.html"><span class="text"> Validation</span></a></li>-->
											<!--<li><a href="form-dropzone.html"><span class="text"> Dropzone Upload</span></a></li>-->
											<!--<li><a href="form-editors.html"><span class="text"> Editors</span></a></li>-->
											<!--<li><a href="form-x-editable.html"><span class="text"> X-Editable</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-table" aria-hidden="true"></i><span>轮播广告图管理</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="table-basic.html"><span class="text"> Basic</span></a></li>-->
											<!--<li><a href="table-advanced.html"><span class="text"> Advanced</span></a></li>-->
											<!--<li><a href="table-responsive.html"><span class="text"> Responsive</span></a></li>-->
											<!--<li><a href="table-editable.html"><span class="text"> Editable</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-random" aria-hidden="true"></i><span>Visual Chart</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="chart-flot.html"><span class="text"> Flot Chart</span></a></li>-->
											<!--<li><a href="chart-xchart.html"><span class="text"> xChart</span></a></li>-->
											<!--<li><a href="chart-other.html"><span class="text"> Other</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
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

									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-map-marker" aria-hidden="true"></i><span>用户个人信息管理</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="map-basic.html"><span class="text"> Basic</span></a></li>-->
											<!--<li><a href="map-vector.html"><span class="text"> Vector</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
									<li>
										<a href="<?php echo U('index/user_information');?>" target="_self">
											<i class="fa fa-font" aria-hidden="true"></i><span>用户个人信息管理</span>
										</a>
									</li>
									<!--<li class="nav-parent">-->
										<!--<a>-->
											<!--<i class="fa fa-bolt" aria-hidden="true"></i><span>Icons</span>-->
										<!--</a>-->
										<!--<ul class="nav nav-children">-->
											<!--<li><a href="icons-font-awesome.html"><span class="text"> Font Awesome</span></a></li>-->
											<!--<li><a href="icons-weathericons.html"><span class="text"> Weather Icons</span></a></li>-->
											<!--<li><a href="icons-glyphicons.html"><span class="text"> Glyphicons</span></a></li>-->
										<!--</ul>-->
									<!--</li>-->
								</ul>
							</nav>
						</div>
						<!-- End Sidebar Menu-->
					</div>
					<!-- Sidebar Footer-->
					<div class="sidebar-footer">
						<!--<div class="small-chart-visits">-->
							<!--<div class="small-chart" id="sparklineLineVisits"></div>-->
							<!--<div class="small-chart-info">-->
								<!--<label>New Visits</label>-->
								<!--<strong>70,79%</strong>-->
							<!--</div>-->
							<!--<script type="text/javascript">-->
								<!--var sparklineLineVisitsData = [15, 16, 17, 19, 15, 25, 23, 35, 29, 15, 30, 45];-->
							<!--</script>-->
						<!--</div>-->
						<!--<ul class="sidebar-terms bk-margin-top-10">-->
							<!--<li><a href="#">Terms</a></li>-->
							<!--<li><a href="#">Privacy</a></li>-->
							<!--<li><a href="#">Help</a></li>-->
							<!--<li><a href="#">About</a></li>-->
						<!--</ul>-->
					</div>
					<!-- End Sidebar Footer-->
				</div>
				<!-- End Sidebar -->

				<!-- Main Page -->
				<div class="main2 ">
					<!-- Page Header -->

					<!-- End Page Header -->

				<!-- Footer -->
				<!--<div id="footer">-->
					<!--<ul>-->
						<!--<li>-->
							<!--<div class="title">Memory</div>-->
							<!--<div class="bar">-->
								<!--<div class="progress light progress-sm  progress-striped active">-->
									<!--<div class="progress-bar progress-squared progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">-->
										<!--60%-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
							<!--<div class="desc">4GB of 8GB</div>-->
						<!--</li>-->
						<!--<li>-->
							<!--<div class="title">HDD</div>-->
							<!--<div class="bar">-->
								<!--<div class="progress light progress-sm  progress-striped active">-->
									<!--<div class="progress-bar progress-squared progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">-->
										<!--40%-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
							<!--<div class="desc">250GB of 1TB</div>-->
						<!--</li>-->
						<!--<li>-->
							<!--<div class="title">SSD</div>-->
							<!--<div class="bar">-->
								<!--<div class="progress light progress-sm  progress-striped active">-->
									<!--<div class="progress-bar progress-squared progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">-->
										<!--70%-->
									<!--</div>-->
								<!--</div>-->
							<!--</div>-->
							<!--<div class="desc">700GB of 1TB</div>-->
						<!--</li>-->
						<!--<li>-->
							<!--<div class="copyright">-->
								<!--<p class="text-muted text-right">Fire <i class="fa fa-coffee"></i> Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a> - More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>-->
							<!--</div>-->
						<!--</li>-->
					<!--</ul>-->
				<!--</div>-->
				<!-- End Footer -->

			</div>
		</div><!--/container-->


		<div class="clearfix"></div>

	</div>

	</body>

</html>
</body>
    <!-- start: JavaScript-->
    <!-- Vendor JS-->
    <script src="/Public/vendor/js/jquery.min.js"></script>
    <script src="/Public/vendor/js/jquery-2.1.1.min.js"></script>
    <script src="/Public/vendor/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/vendor/skycons/js/skycons.js"></script>
    <script src="/Public/vendor/js/pace.min.js"></script>

    <!-- Plugins JS-->
    <!--<script src="/Public/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>-->
    <!--<script src="/Public/plugins/scrollbar/js/jquery.mCustomScrollbar.concat.min.js"></script>-->
    <!--<script src="/Public/plugins/bootkit/js/bootkit.js"></script>-->
    <!--<script src="/Public/plugins/magnific-popup/js/magnific-popup.js"></script>-->
    <!--<script src="/Public/plugins/moment/js/moment.min.js"></script>-->
    <!--<script src="/Public/plugins/fullcalendar/js/fullcalendar.js"></script>-->
    <!--<script src="/Public/plugins/flot/js/jquery.flot.min.js"></script>-->
    <!--<script src="/Public/plugins/flot/js/jquery.flot.pie.min.js"></script>-->
    <!--<script src="/Public/plugins/flot/js/jquery.flot.resize.min.js"></script>-->
    <!--<script src="/Public/plugins/flot/js/jquery.flot.stack.min.js"></script>-->
    <!--<script src="/Public/plugins/flot/js/jquery.flot.time.min.js"></script>-->
    <!--<script src="/Public/plugins/flot-tooltip/js/jquery.flot.tooltip.js"></script>-->
    <!--<script src="/Public/plugins/chart-master/js/Chart.js"></script>-->
    <!--<script src="/Public/plugins/jqvmap/jquery.vmap.js"></script>-->
    <!--<script src="/Public/plugins/jqvmap/data/jquery.vmap.sampledata.js"></script>-->
    <!--<script src="/Public/plugins/jqvmap/maps/jquery.vmap.world.js"></script>-->
    <!--<script src="/Public/plugins/sparkline/js/jquery.sparkline.min.js"></script>-->

    <!-- Theme JS -->
    <script src="/Public/js/jquery.mmenu.min.js"></script>
    <script src="/Public/js/core.min.js"></script>

    <!-- Pages JS -->
    <!--<script src="/Public/js/pages/index.js"></script>-->
    <!-- end: JavaScript-->

</html>