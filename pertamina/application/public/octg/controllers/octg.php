<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Octg extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view("public/header",$data);
		$this->load->view("octg",$data);
		$this->load->view("public/footer",$data);
	}
}
