<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoDao extends CI_Model {

	private $table = "pelni_info";

    public function __construct() {
        parent::__construct();
    }

    public function save($data = array()) {
    	if(is_array($data)) {
    		$this->db->insert($this->table, $data); 
    		return $this->db->insert_id();
    	}

    	return 0;
    }
}