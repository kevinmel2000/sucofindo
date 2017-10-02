<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class V1_dao extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function client_check($username, $password, $client) {
		$this->db->where('username', $username);
		$this->db->where('client', $client);
		$this->db->where('password', md5($password));
		return $this->db->get('clients');
    }
}