<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

	<head>
	
		<!-- Basic -->
    	<meta charset="UTF-8" />

		<title>Register</title>

		<!-- Mobile Metas -->
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Vendor CSS-->
		<link href="/Public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/Public/vendor/skycons/css/skycons.css" rel="stylesheet" />
		<link href="/Public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
		
		<!-- Plugins CSS-->
		<link href="/Public/plugins/bootkit/css/bootkit.css" rel="stylesheet" />	
		
		<!-- Theme CSS -->
		<link href="/Public/css/jquery.mmenu.css" rel="stylesheet" />
		
		<!-- Page CSS -->		
		<link href="/Public/css/style.css" rel="stylesheet" />
		<link href="/Public/css/add-ons.min.css" rel="stylesheet" />
		
		<style>
			footer {
				display: none;
			}
		</style>
		
		<!-- end: CSS file-->	
	    
		
		<!-- Head Libs -->
		<script src="/Public/plugins/modernizr/js/modernizr.js"></script>
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->		
		
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
										<h4>New Account</h4>
									</div>									
									<form class="form-horizontal register" action="<?php echo U('login/register');?>" method="post">
										<div class="bk-padding-left-20 bk-padding-right-20">
											<div class="form-group">
												<label>UserName</label>
												<input name="username" type="text" class="form-control" placeholder="用户名" id="fullname"/>
											</div>
<!--											<div class="form-group">
												<label>E-mail Address</label>
												<input name="email" type="email" class="form-control" placeholder="Email Address" id="username"/>
											</div>-->
											<div class="form-group">
												<div class="row">
													<div class="col-sm-6">
														<label>Password</label>
														<input name="password" type="password" class="form-control bk-margin-bottom-10" placeholder="密码" id="password"/>
													</div>
													<div class="col-sm-6">
														<label>Password Confirm</label>
														<input name="passwordConfirm" type="password" class="form-control bk-margin-bottom-10" placeholder="确认密码" id="passwordConfirm"/>
													</div>
												</div>
											</div>
											<div class="row bk-margin-top-20 bk-margin-bottom-10">
												<div class="col-sm-8">
													<div class="checkbox-custom checkbox-default">
														<input id="AgreeTerms" name="agreeterms" type="checkbox"/>
														<!--<label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>-->
													</div>
												</div>
												<div class="col-sm-4 text-right">
													<button type="submit" class="btn btn-primary hidden-xs">Register</button>
													<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs bk-margin-top-20">Register</button>
												</div>
											</div>											
											<div class="text-with-hr">
												<span>or use otners fuction</span>
											</div>											
											<div class="text-center bk-margin-top-10 bk-margin-bottom-30">
												<a class="btn btn-facebook bk-margin-bottom-15 bk-margin-5">Forget Password
													<!--<i class="fa fa-facebook"></i>-->
												</a>
												<a class="btn btn-twitter bk-margin-bottom-15 bk-margin-5" href="<?php echo U('login/modify');?>">Modify password
													<!--<i class="fa fa-twitter"></i>-->
												</a>
											</div>
											<p class="text-center">Already have an account? <a href="<?php echo U('login/login');?>">Log In!</a>
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
		
		
		<!-- start: JavaScript-->
		
		<!-- Vendor JS-->				
		<script src="/Public/vendor/js/jquery.min.js"></script>
		<script src="/Public/vendor/js/jquery-2.1.1.min.js"></script>
		<script src="/Public/vendor/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="/Public/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="/Public/vendor/skycons/js/skycons.js"></script>	
		
		<!-- Plugins JS-->
		<script src="/Public/plugins/bootkit/js/bootkit.js"></script>
		
		<!-- Theme JS -->		
		<script src="/Public/js/jquery.mmenu.min.js"></script>
		<script src="/Public/js/core.min.js"></script>
		
		<!-- Pages JS -->
		<script src="/Public/js/pages/page-register.js"></script>
		
		<!-- end: JavaScript-->
		
	</body>
	
</html>