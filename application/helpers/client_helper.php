<?php 
function client_session($sess_name="default") {
	$CI =& get_instance();
	$oclient = $CI->session->userdata("oclient");
	if($oclient != null) {
		return $oclient->$sess_name;
	}
}
?>