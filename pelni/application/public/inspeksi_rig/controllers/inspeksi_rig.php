<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inspeksi_rig extends CI_Controller {

	public function index()
	{
		$data = array();
		$this->load->view("public/header",$data);
		$this->load->view("inspeksi_rig",$data);
		$this->load->view("public/footer",$data);
	}
}
