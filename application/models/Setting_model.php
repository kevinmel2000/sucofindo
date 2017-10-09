<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_model extends CI_Model 
{

	private $table = "APP_SETTING";

	/**
	 * Fungsi untuk mengambil item setting 
	 */
    public  function get_item($setting_name) 
    {
		$this->db->select('SETTING_VALUE');
		$this->db->from($this->table);
		$this->db->where('SETTING_NAME', $setting_name); 
		$query = $this->db->get();

		$result = "";
		foreach ($query->result() as $row) {
		    $result = $row->SETTING_VALUE;
		}

		return $result;
    }
}
