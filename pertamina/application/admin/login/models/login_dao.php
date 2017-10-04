<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_dao extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function user_check($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('users');
		$o = new stdClass();
		$o->num_rows = $query->num_rows();
		$o->result   = $query->result();
		return $o;
    }
}