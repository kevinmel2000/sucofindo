<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kalibrasi extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view("public/header",$data);
		$this->load->view("kalibrasi",$data);
		$this->load->view("public/footer",$data);
	}
}
