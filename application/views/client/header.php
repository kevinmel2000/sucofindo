<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title><?php echo isset($title) ? $title : ''; ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/admin/color-admin/assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<?php echo isset($html_css) ? $html_css : ""; ?>

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="<?php echo base_url(); ?>" class="navbar-brand"><img src="<?php echo isset($oclient->client_logo) ? $oclient->client_logo : ''; ?>" width="<?php echo getSetting('logo_width'); ?>" height="<?php echo getSetting('logo_height'); ?>" /></a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li>
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search something.." />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">0</span>
						</a>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php echo base_url(); ?>uploads/profile/<?php echo isset($oclient->photo) ? $oclient->photo : ''; ?>" alt="<?php echo isset($oclient->firstname) ? $oclient->firstname : ''; ?> <?php echo isset($oclient->lastname) ? $oclient->lastname : ''; ?>" /> 
							<span class="hidden-xs"><?php echo isset($oclient->firstname) ? $oclient->firstname : ''; ?> <?php echo isset($oclient->lastname) ? $oclient->lastname : ''; ?></span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="<?php echo base_url(); ?>index.php/client/logout/">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="<?php echo base_url(); ?>uploads/profile/<?php echo isset($oclient->photo) ? $oclient->photo : ''; ?>" alt="" /></a>
						</div>
						<div class="info">
							<?php echo isset($oclient->username) ? $oclient->username : ''; ?>
							<small>Administrator</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li id="dashboard" class="has-sub">
						<a href="<?php echo base_url(); ?>index.php/client/page/home">
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
					</li>

					<li id="general-form" class="has-sub">
					<?php if(client_session('client_site') == 'pertamina') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pertamina-form">
					<?php } else if(client_session('client_site') == 'pelni') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pelni-form">
					<?php } else if(client_session('client_site') == 'pln') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pln-form">
					<?php } else { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/general-form">
					<?php } ?>
							<i class="fa fa-inbox"></i> 
							<span>General Form</span>
						</a>
					</li>
					<li id="logout" class="has-sub">
					<?php if(client_session('client_site') == 'pertamina') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pertamina-report">
					<?php } else if(client_session('client_site') == 'pelni') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pelni-report">
					<?php } else if(client_session('client_site') == 'pln') { ?>
						<a href="<?php echo base_url(); ?>index.php/client/page/pln-report">
					<?php } else { ?>
						<a href="<?php echo base_url(); ?>index.php/client">
					<?php } ?>
							<i class="fa fa-bar-chart"></i> 
							<span>Report</span>
						</a>
					</li>
					<li id="logout" class="has-sub">
						<a href="<?php echo base_url(); ?>index.php/client/logout/">
							<i class="fa fa-sign-out"></i> 
							<span>Logout</span>
						</a>
					</li>
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify" target="_top"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
			        <!-- end sidebar minify button -->
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->