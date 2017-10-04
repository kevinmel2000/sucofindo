<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<head>
	<meta charset="utf-8" />
	<title><?php echo getSetting('login_title'); ?></title>
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

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<style>
	/* efek garis loading */
	.pace-progress, .pace::before {
		top : 0 !important;
	}
	/* image rotary */
	.pace .pace-activity {
		top : 0 !important;
	}
	</style>

</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image"><img src="<?php echo getSetting('cover_image'); ?>" data-id="login-cover-image" alt="" /></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                	<small>&nbsp;</small>
                   <center> <img width="<?php echo getSetting('brand_width'); ?>" height="<?php echo getSetting('brand_height'); ?>" src="<?php echo getSetting('brand_logo'); ?>" /></center>
                    
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="<?php echo base_url(); ?>index.php/login/auth/" method="POST" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input type="text" class="form-control input-lg" name="un" placeholder="Username" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" name="ps" placeholder="Password" />
                    </div>
                    <div class="login-buttons">
                    	<input type="hidden" name="t" value="login" />
						<input type="hidden" name="<?php echo $csrf['name']; ?>" value="<?php echo $csrf['hash'];?>" />
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/js/login-v2.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/admin/color-admin/assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->	

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
</body>
</html>