<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/concept/ICrud_model.php";

class Menu_model extends CI_Model 
{

	private $table = "APP_MENU";

	public function get_all_items()
	{
		return $this->db->get($this->table);
	}

    public  function get_menu_by_reference($reference=0) 
    {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('REFERENCE', $reference); 
		return $this->db->get();
    }

    public  function get_item_by_menu_id($menu_id=0) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('MENU_ID', $menu_id); 
		return $this->db->get();
    }
}
