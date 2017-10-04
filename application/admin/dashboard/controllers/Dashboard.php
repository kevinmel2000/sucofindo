<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	private $data;

	public function __construct() {
		parent::__construct();
		$this->load->model(array("Projcat_dao"));
		$this->load->library(array("Dynamic_menu"));

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />';

    	$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/js/jquery.gritter.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.time.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.resize.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.pie.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/sparkline/jquery.sparkline.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/dashboard.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script>
				$(document).ready(function() {
					App.init();
					Dashboard.init();
					$("#dashboard").addClass("active");
				});
			</script>';	

		$this->data['projcat'] = $this->Projcat_dao->get_all_items();
		$this->data['menu']    = $this->dynamic_menu->buildMenu(0);
	}

	public function index(){ 
		$this->template->view(
			/* template view*/
			array("admin/header","dashboard","admin/footer"), 
			/* pass data */
			array(
				"title" => "Dashboard View",
				"osess" => $this->session->userdata("osess")),
			/* pass class data */
			$this->data);
	}
}
