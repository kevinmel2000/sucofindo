<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	private $data = array();

	public function __construct() {
		parent::__construct();

		/* checking session is active or not */
		$this->session_secure->active_or_redirect("login");

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />';
		$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/js/select2.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/table-manage-default.demo.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script>
				$(document).ready(function() {
					App.init();
					TableManageDefault.init();
					$("#report-form").addClass("active");
					$("#data-table_length").addClass("pull-left");
					$(".select2").select2();
				});
			</script>';
		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
		$this->data["front_message"] = $this->session->flashdata("front_message");
	}

	public function index(){ 
		$this->template->view(
			/* template view*/
			array("admin/header","report","admin/footer"), 
			/* pass data */
			array(
				"title" => "General Report View",
				"osess" => $this->session->userdata("osess"),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "General Report") 
					)
				)),
			/* pass class data */
			$this->data);
	}

}