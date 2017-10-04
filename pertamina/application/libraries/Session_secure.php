<?php
class Session_secure {
	public function active_or_redirect($page_redirect="") {
		$CI =& get_instance();
		$osess = $CI->session->userdata("osess");
		if(!isset($osess)) {
			redirect($page_redirect);
		}
	}
} ?>