<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Survey_cargo extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view("public/header",$data);
		$this->load->view("survey_cargo",$data);
		$this->load->view("public/footer",$data);
	}
}
