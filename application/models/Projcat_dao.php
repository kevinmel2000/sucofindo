<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/concept/ICrud_model.php";

class Projcat_dao extends CI_Model implements ICrud_model {

	private $table = "projcat";

    public function __construct() {
        parent::__construct();
    }

    public function get_all_items() {
    	return $this->db->get($this->table);
	}

	public function get_item_by_id($id) {
		$this->db->where("projcat_id",$id);
		return $this->db->get($this->table);
	}

	public function add($array_data) {
		$this->db->insert($this->table, $array_data); 
	}

	public function update($array_data, $id=0) {
		$this->db->where('projcat_id', $id);
		$this->db->update($this->table, $array_data); 
	}

	public function delete($id=0) {
		$this->db->delete($this->table, array('projcat_id' => $id)); 
	}
}