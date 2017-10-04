<!doctype html>
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
    
<head>
        <title>SUCOFINDO - Superintending Company In Indonesia</title>
        <!--meta info-->
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <link rel="shortcut icon" type="image/x-icon" href="#">
        <!--web fonts-->
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic' rel='stylesheet' type='text/css'>
        <!--libs css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/plugins/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/plugins/owl-carousel/owl.transitions.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/plugins/jackbox/css/jackbox.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>assets/public/sucofindo/plugins/rs-plugin/css/settings.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/plugins/colorpicker/colorpicker.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--theme css-->
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/css/theme-animate.css">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url(); ?>assets/public/sucofindo/css/style.css">
    </head>
    <?php echo isset($css) ? $css : ""; ?>
    <body class="sticky_menu">
        <!--layout-->
        <div class="wide_layout bg_light">
            <!--header markup-->
            <header role="banner" class="relative">
                <span class="gradient_line"></span>
                <!--top part-->
                <section class="header_top_part">
                    <div class="container">
                        <div class="row">
                            <!--contact info-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_xs_align_c">
                                <ul class="hr_list fs_small color_grey_light">
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-phone-1"></i></span>(021) 7983666 Ext. 1116, 1124
                                    </li>
                                    <li class="m_right_20 f_xs_none m_xs_right_0 m_xs_bottom_5">
                                        <a href="mailto:#" class="color_grey_light d_inline_b color_black_hover"><span class="circle icon_wrap_size_1 d_inline_m m_right_8"><i class="icon-mail-alt"></i></span>    customer.service@sucofindo.co.id</a>
                                    </li>
                                </ul>
                            </div>
                            <!--social icons-->
                            <div class="col-lg-6 col-md-6 col-sm-6 t_align_r t_xs_align_c">
                                <ul class="hr_list d_inline_b social_icons">
                                    <li class="m_right_8"><a href="#"><img src="<?php echo base_url(); ?>assets/sucofindo/images/flags/us.png" style="margin-top: 5px;"></a></li>
                                    <li class="m_right_8"><a href="#"><img src="<?php echo base_url(); ?>assets/sucofindo/images/flags/id.png" style="margin-top: 5px;"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <hr>
                <!--header bottom part-->
                <section class="header_bottom_part bg_light">
                    <div class="container">
                        <div class="d_table w_full d_xs_block">
                            <!--logo-->
                            <div class="col-lg-2 col-md-2 col-sm-2 d_table_cell d_xs_block f_none v_align_m logo t_xs_align_c">
                                <a href="<?php echo base_url(); ?>" class="d_inline_m m_xs_top_20 m_xs_bottom_20">
                                    <img src="<?php echo base_url(); ?>assets/sucofindo/images/logo/logo.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-10 t_align_r d_table_cell d_xs_block f_none">
                                <div class="relative clearfix t_align_r">
                                    <button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
                                        <i class="icon-menu"></i>
                                    </button>
                                    <!--main navigation-->
                                    <nav role="navigation" class="d_inline_m d_xs_none m_xs_right_0 m_right_15 t_align_l m_xs_bottom_15">
                                        <ul class="hr_list main_menu fw_light">
                                            <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                <a class="color_dark fs_large relative r_xs_corners" href="<?php echo base_url(); ?>">Home
                                                </a>
                                            </li>
                                            <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                <a class="color_dark fs_large relative r_xs_corners" href="javascript:;">Tentang Kami
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>    
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/about-us/" class="d_block color_dark relative">Tentang SUCOFINDO</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="container3d relative f_xs_none m_xs_bottom_5">

                                                <a class="color_dark fs_large relative r_xs_corners" href="#">Layanan Kami
                                                    <i class="icon-angle-down d_inline_m r_xs_corners"></i>
                                                </a>
                                                <!--sub menu-->

                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/survey-cargo" class="d_block color_dark relative">Survey Cargo</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/inspeksi-rig" class="d_block color_dark relative">Inspeksi Rig</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/octg" class="d_block color_dark relative">OCTG</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/kalibrasi" class="d_block color_dark relative">Kalibrasi</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/konsultasi" class="d_block color_dark relative">Konsultasi</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            

                                            <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                <a class="color_dark fs_large relative r_xs_corners" href="shortcodes_elements.html">Layanan Pelanggan
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/contact-us/" class="d_block color_dark relative">Hubungi Kami</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="container3d relative f_xs_none m_xs_bottom_5">
                                                <a class="color_dark fs_large relative r_xs_corners" href="javascript:;">Klien
                                                    <i class="icon-angle-down d_inline_m"></i>
                                                </a>
                                                <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                                                    <li>
                                                        <a href="<?php echo base_url(); ?>index.php/v1/page/client-room/" class="d_block color_dark relative">Client Room</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!--searchform button-->
                                    <div class="relative d_inline_m search_buttons d_xs_none">
                                        <button class="icon_wrap_size_2 circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-cancel"></i></button>
                                        <button class="icon_wrap_size_2 active circle color_grey_light_2 tr_all color_purple_hover"><i class="icon-search"></i></button>
                                    </div>
                                    <!--searchform-->
                                    <form role="search" class="bg_light animate_ vc_child t_align_r fw_light tr_all trf_xs_none">
                                        <input type="text" name="search" placeholder="Search" class="r_corners d_inline_m">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </header>