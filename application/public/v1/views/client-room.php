
			<section class="section_offset">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h4 class="color_dark fw_light m_bottom_15 heading_1">Client Room</h4>
							<hr class="m_bottom_10">
							<form method="post" action="<?php echo base_url(); ?>index.php/v1/client_auth" id="form_1" class="fw_light">
								<ul>
									<li class="m_bottom_10 m_xs_bottom_15">
										<label class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Client</label>
										<div class="custom_select d_inline_m w_sm_full inline_select">
											<div class="select_title r_corners fw_light color_grey">Please select</div>
											<ul class="select_list r_corners wrapper shadow_1 bg_light tr_all"></ul>
											<select name="cln" class="d_none">
												<option value="PT. PERTAMINA (Persero)"></option>
												<option value="Pelayaran Nasional Indonesia (Pelni)"></option>
												<option value="PT. PLN (Persero)"> </option>
											</select>
										</div>
									</li>
									
									<li class="m_bottom_10 m_xs_bottom_15">
										<label class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Username</label>
										<div class="custom_select d_inline_m w_sm_full inline_select ">
											<input type="text" name="usr" class="r_corners bg_light w_full fw_light">
										</div>
									</li>
									<li class="m_bottom_10 m_xs_bottom_15">
										<label class="d_inline_m d_sm_block w_sm_auto m_sm_bottom_5">Password</label>
										<div class="custom_select d_inline_m w_sm_full inline_select ">
											<input type="password" name="pwd" class="r_corners bg_light w_full fw_light">
										</div>
									</li>

									<li class="m_bottom_10">
										<input type="hidden" name="<?php echo $csrf['name']; ?>" class="r_corners bg_light w_full fw_light" value="<?php echo $csrf['hash']; ?>">
										<button class="button_type_5 color_blue transparent r_corners fs_medium tr_all m_right_10 m_sm_bottom_10">Submit</button>
									</li>
								</ul>
							</form>
							
						</div>
					</div>
					
				</div>
			</section>
			<hr class="divider_type_2">
			<!--footer-->
			<footer role="contentinfo" class="bg_light_3" id="#footer_1">
				<!--top part-->
				<section class="footer_top_part">
					<div class="container relative">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="row">
									
									<div class="col-lg-3 col-md-3 col-sm-6 m_bottom_20 m_sm_bottom_30">
										<h5 class="color_dark fw_light m_bottom_25">Sinergi BUMN, Sucofindo – Kimia Farma Kerja Sama di Bidang Laboratorium Klinis</h5>
										
										<a href="#" target="_blank">Berlangganan Siaran Pers</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Kontak Pers</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Siaran Pers</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Berita Terkini</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Artikel</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Agenda</a><hr class="m_bottom_5">
									</div>
									
									<div class="col-lg-3 col-md-3 col-sm-6 m_bottom_20 m_sm_bottom_30">
										<h5 class="color_dark fw_light m_bottom_25">Referensi</h5>
										
										<a href="#" target="_blank">Publikasi</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Standar dan Peraturan</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Pustaka SUCOFINDO</a><hr class="m_bottom_5">
									</div>

									<div class="col-lg-3 col-md-3 col-sm-6 m_bottom_20 m_sm_bottom_30">
										<h5 class="color_dark fw_light m_bottom_25">Keterbukaan Informasi Publik</h5>
										
										<a href="#" target="_blank">Layanan Informasi Publik</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Maklumat</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Struktur Organisasi PPID</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Jenis Informasi</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Mekanisma Permohonan Informasi</a><hr class="m_bottom_5">
										<a href="#" target="_blank">Mekanisme Keberatan</a><hr class="m_bottom_5">
									</div>

									<div class="col-lg-3 col-md-3 col-sm-6 m_bottom_20 m_sm_bottom_30">
										<h5 class="color_dark fw_light m_bottom_25">Quick Link</h5>
										<ul class="hr_list social_icons">
											<!--tooltip_container class is required-->
											<li class="m_right_15 m_bottom_15 m_sm_right_0 tooltip_container m_xs_right_15">
												<!--tooltip-->
												<span class="d_block r_corners color_default tooltip fs_small tr_all">Arsip</span>
												<a href="#" class="d_block googleplus icon_wrap_size_2 circle color_grey_light_2" >
													<i class="fa fa-book fa-fw" style="margin-top: 7px;"></i>
												</a>
											</li>
											<li class="m_right_15 m_bottom_15 tooltip_container">
												<!--tooltip-->
												<span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Facebook</span>
												<a href="#" class="d_block facebook icon_wrap_size_2 circle color_grey_light_2">
													<i class="icon-facebook fs_small"></i>
												</a>
											</li>
											<li class="m_right_15 m_bottom_15 tooltip_container">
												<!--tooltip-->
												<span class="d_block r_corners color_default tooltip fs_small tr_all">Follow Us on Twitter</span>
												<a href="#" class="d_block twitter icon_wrap_size_2 circle color_grey_light_2">
													<i class="icon-twitter fs_small"></i>
												</a>
											</li>
											<li class="m_bottom_15 m_md_right_15 tooltip_container">
												<!--tooltip-->
												<span class="d_block r_corners color_default tooltip fs_small tr_all">Feeds</span>
												<a href="#" class="d_block dribbble icon_wrap_size_2 circle color_grey_light_2">
													<i class="fa fa-feed fa-fw" style="margin-top: 7px;"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						
						</div>
					</div>
				</section>
				<!--bottom part-->
				<section class="footer_bottom_part t_align_c color_grey bg_light_4 fw_light">
					<p>&copy; 2017 SUCOFINDO. All Rights Reserved.</p>
				</section>
			</footer>
		</div>
		<!--back to top button-->
		<button id="back_to_top" class="circle icon_wrap_size_2 color_blue_hover color_grey_light_4 tr_all d_md_none">
			<i class="icon-angle-up fs_large"></i>
		</button>