<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>SUCOFINDO Cargo &amp; Bunker Monitoring Information System | Beranda</title>
        
        <link href="<?php echo base_url(); ?>assets/public/sucofindo/default.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/public/sucofindo/fonts.css" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/public/sucofindo/bootstrap.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url(); ?>assets/public/sucofindo/superfish-master/dist/css/superfish.css" rel="stylesheet" type="text/css">

        <link href="<?php echo base_url(); ?>assets/public/sucofindo/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url(); ?>assets/public/sucofindo/jquery-ui.css" rel="stylesheet" type="text/css">

        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/public/sucofindo/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/public/sucofindo/sau.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/public/sucofindo/sau.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/public/sucofindo/superfish-master/dist/js/hoverIntent.js"></script>
        <script language="javascript" type="text/javascript" src="<?php echo base_url();?>assets/public/sucofindo/superfish-master/dist/js/superfish.js"></script>
        
        <script>
            $(document).ready(function() {
                $('#apps-menu').superfish();
            });
        </script>

    </head>
    <body>
        <header>
            <div class="container">
                <div id="left-header" class="pull-left">
                    <div class="logo"><img src="<?php echo base_url(); ?>assets/public/sucofindo/logo-sci.jpg" style="padding-top:15px;width:100px;"></div>
                    <div class="title-container-left">
                        <div class="small-title">| SBU HULU MIGAS DAN PRODUK MIGAS</div>
                    </div>
                    <div class="title-container-right">
                        <div class="main-title">Custody Transfer</div>
                        <div class="main-title">Monitoring System</div>
                    </div>
                </div>
            </div>
            <nav>
                <div class="container">
                    <ul id="apps-menu" class="sf-menu sf-arrows">
                        <li id="li-home">
                            <a href="<?php echo base_url(); ?>index.php/home/" title="Beranda">Beranda</a>
                        </li>
                        <li id="li-about-us" class="">
                            <a href="<?php echo base_url(); ?>index.php/about-us/" title="Tentang Kami">Tentang Kami</a>
                        </li>
                        <li id="li-layanan-kami">
                            <a class="sf-with-ul" href="#" title="Layanan Kami">Layanan Kami</a>
                            <ul style="display: none;">
                                <li><a href="<?php echo base_url(); ?>index.php/survey-cargo/">Survey Cargo</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/inspeksi-rig/">Inspeksi Rig</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/octg/">OCTG</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/kalibrasi/">Kalibrasi</a></li>
                                <li><a href="<?php echo base_url(); ?>index.php/konsultasi/">Konsultasi</a></li>
                            </ul>
                        </li>
                        <li id="li-login">
                            <a href="<?php echo base_url(); ?>index.php/login/" title="Login">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div id="notice">
            <div class="container">
                <!--
                    <div class="notice-info">
                    	<div class="notice-title">Info Terkini</div>
                    	<div id="notice-slider" class="notice-group">
                    		<div class="notice-list">
                    				<span class="label label-primary">09/05/2016</span>
                    		</div>
                    	</div>
                    </div>-->
            </div>
        </div>