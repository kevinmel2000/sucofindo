<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Port_dao extends CI_Model {

	private $table = "port";

    public function __construct() {
        parent::__construct();
    }

    public function get_all_items() {
    	return $this->db->get($this->table);
	}

	public function get_item_by_id($id) {
		$this->db->where("id",$id);
		return $this->db->get($this->table);
	}

	public function add($port_name="", $port_type="") {
		$data = array(
		   'port_name' => $port_name ,
		   'port_type' => $port_type 
		);

		$this->db->insert($this->table, $data); 
	}

	public function update($port_name="", $port_type="", $id=0) {
		$data = array(
		   'port_name' => $port_name ,
		   'port_type' => $port_type 
		);

		$this->db->where('id', $id);
		$this->db->update($this->table, $data); 
	}

	public function delete($id=0) {
		$this->db->delete($this->table, array('id' => $id)); 
	}
}