<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page_static extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array("User_model","User_group_model","Menu_model"));

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/black/easyui.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/icon.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/plugins/easyui/themes/color.css" rel="stylesheet" />';

    	$this->data['html_js'] = '
    		<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js"></script>
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
			<script src="'.base_url().'assets/admin/plugins/easyui/jquery.easyui.min.js"></script>
			<script>
				$(document).ready(function() {
					App.init();
				});
			</script>';	
		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);
	}

	public function index()
	{
		$this->data['title'] = "Page Static Management";
		$this->load->view('admin/header',$this->data);
		$this->load->view('page_static_view',$this->data);
		$this->load->view('admin/footer',$this->data);
	}

	public function page_list_rest()
	{
		$json_object = new stdClass();
		$json_object->total = 3;
		$json_object->rows  = array();
		$node = new stdClass();
		$node->id = "100308";
		$node->page_title = "Home";
		$node->url = "http://localhost/sucofindo/index.php/home";
		$node->status = "Y";
		$node->function = '<button type="button" class="btn btn-primary btn-xs button-edit" onclick="window.location.href=\'http://localhost/sucofindo/index.php/page_static/edit/1\'"><i class="glyphicon glyphicon-pencil"></i> Edit</button>&nbsp;<button type="button" class="btn btn-primary btn-xs button-edit" onclick="window.location.href=\'http://localhost/sucofindo/index.php/page_static/delete/1\'"><i class="glyphicon glyphicon-trash"></i> Remove</button>';
		$json_object->rows[] = $node;
		$node = new stdClass();
		$node->id = "100308";
		$node->page_title = "About Me";
		$node->url = "http://localhost/sucofindo/index.php/about_me";
		$node->status = "Y";
		$node->function = '<button type="button" class="btn btn-primary btn-xs button-edit" onclick="window.location.href=\'http://localhost/sucofindo/index.php/page_static/edit/1\'"><i class="glyphicon glyphicon-pencil"></i> Edit</button>&nbsp;<button type="button" class="btn btn-primary btn-xs button-edit" onclick="window.location.href=\'http://localhost/sucofindo/index.php/page_static/delete/1\'"><i class="glyphicon glyphicon-trash"></i> Remove</button>';
		$json_object->rows[] = $node;

		header('Content-Type: application/json');
		echo json_encode($json_object);
	}
}