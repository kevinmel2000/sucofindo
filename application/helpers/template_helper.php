<?php 
function getSetting($setting_name) {
	$CI =& get_instance();
	$CI->db->select('setting_value');
	$CI->db->from('setting');
	$CI->db->where('setting_name', $setting_name); 
	$query = $CI->db->get();

	$result = "";
	foreach ($query->result() as $row)
	{
	    $result = $row->setting_value;
	}

	return $result;
}
?>