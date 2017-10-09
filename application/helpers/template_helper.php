<?php 

/**
 * Fungsi untuk mengambil setting template
 */
function get_setting($setting_name) 
{
	$CI =& get_instance();
	$CI->load->model("Setting_model");
	return $CI->Setting_model->get_item($setting_name);
} 


?>