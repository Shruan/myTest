<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Basic -->
    	<meta charset="UTF-8" />
		<title>Admin Menu</title>
		<!-- Mobile Metas -->
	    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />-->
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
											<?php if(is_array($waits1)): $i = 0; $__LIST__ = $waits1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wait1): $mod = ($i % 2 );++$i;?><span class="pull-right label label-danger p_label"><?php echo ($wait1); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
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
		type:'GET',
		url:'/index.php/Admin/Index/menu',
		data:{

		},
		dataType:'json',
		successs:function(jsonResult){
//			$('.p_label').text(jsonResult);
			alert(jsonResult);
		}

	})
</script>

</html>