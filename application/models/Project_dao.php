<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/concept/ICrud_model.php";

class Project_dao extends CI_Model implements ICrud_model {

	private $table = "project";

    public function __construct() {
        parent::__construct();
    }

    public function get_all_items() {
    	return $this->db->get($this->table);
	}

	public function get_item_by_id($id) {
		$this->db->where("project_id",$id);
		return $this->db->get($this->table);
	}

	public function add($array_data) {
		$this->db->insert($this->table, $array_data); 
	}

	public function update($array_data, $id=0) {
		$this->db->where('project_id', $id);
		$this->db->update($this->table, $array_data); 
	}

	public function delete($id=0) {
		$this->db->delete($this->table, array('project_id' => $id)); 
	}

	// custom
	public function get_all_items_by_join() {
		$this->db->select('p.project_name, p.project_id, pjc.projcat_name');
		$this->db->from('project p');
		$this->db->join('projcat pjc', 'p.projcat_id = pjc.projcat_id', 'left');
		return $this->db->get(); 
	}

	public function get_item_by_join_id($id) {
		$this->db->select('p.project_name, p.project_id, pjc.projcat_name, pjc.projcat_id');
		$this->db->from('project p');
		$this->db->join('projcat pjc', 'p.projcat_id = pjc.projcat_id', 'left');
		$this->db->where('p.project_id', $id);
		return $this->db->get(); 	
	}

	public function get_item_by_projcat_id($projcat_id) {
		$this->db->where("projcat_id",$projcat_id);
		return $this->db->get($this->table);
	}
}