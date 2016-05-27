<!DOCTYPE html>

<html>

	<head>
		<!-- Meta Details Start -->
		<meta charset="utf-8">
		<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<META HTTP-EQUIV="Content-Language" CONTENT="fr-FR">
		<META name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Meta Details End -->

		<!-- Title Start -->
		<title><?php echo $title; ?></title>
		<!-- Title End -->

		<!-- CSS Files Include Start -->
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/theme/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/theme/css/style.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/theme/font-awesome/css/font-awesome.css'); ?>">
		<link rel="stylesheet" href="<?php echo site_url('assets/plugins/theme/css/animate.css'); ?>">

		<!-- CSS Files Include End -->
	</head>

	<body class="top-navigation">

		<div id="wrapper">
			<div id="page-wrapper" class="gray-bg">
				<div class="row border-bottom white-bg">
					<nav class="navbar navbar-static-top" role="navigation">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<i class="fa fa-reorder"></i>
							</button>
							<a href="#" class="navbar-brand">Angular</a>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="dropdown active">
									<a aria-expanded="false" role="button" href="#">stats</a>
								</li>
							</ul>
							<ul class="nav navbar-top-links navbar-right">
								<li>
									<a href="login.html">
										<i class="fa fa-sign-out"></i> Log out
									</a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
				<div class="wrapper wrapper-content" ng-app="stats">
					<div class="row">
						<div class="col-lg-12">
							<div ui-view></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<input type="hidden" value="<?php echo site_url(); ?>" id="BaseUrl" name="BaseUrl">
		<input type="hidden" value="<?php echo $id_opt_campaign; ?>" id="IdoptCampaign" name="IdoptCampaign">
		<!-- Script Includ Start -->
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/theme/js/jquery-2.1.1.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/theme/js/inspinia.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/theme/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/theme/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/theme/js/bootstrap.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/angular/angular.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/angular/angular-ui-router.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/plugins/angular/angular-ocLazyLoad.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/js/app/app.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/js/app/config/statsConfig.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/js/app/service/statsService.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/js/app/directive/statsDirective.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo site_url('assets/js/app/controller/statsController.js'); ?>"></script>
		<!-- Script Includ End -->
	</body>
</html>