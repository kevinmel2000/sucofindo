<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasi extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view("public/header",$data);
		$this->load->view("konsultasi",$data);
		$this->load->view("public/footer",$data);
	}
}
