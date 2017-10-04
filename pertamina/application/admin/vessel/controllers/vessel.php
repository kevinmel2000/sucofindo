<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vessel extends CI_Controller {
	private $data = array();

	public function __construct() {
		parent::__construct();
		$this->load->model(array("vessel_dao"));

		/* checking session is active or not */
		$this->session_secure->active_or_redirect("login");

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />';
		$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/table-manage-default.demo.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script>
				$(document).ready(function() {
					App.init();
					TableManageDefault.init();
					$("#master-data").addClass("active");
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
			array("admin/header","vessel","admin/footer"), 
			/* pass data */
			array(
				"title" => "Vessel View",
				"osess" => $this->session->userdata("osess"),
				"vessel" => $this->vessel_dao->get_all_items(),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Vessel") 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function preview_form($id=0) {
		$this->template->view(
			/* template view*/
			array("admin/header","vessel_preview","admin/footer"), 
			/* pass data */
			array(
				"title" => "Vessel Preview Data",
				"osess" => $this->session->userdata("osess"),
				"vessel" => $this->vessel_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Vessel"),
						array("link" => "javascript:;","text" => "Preview") 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function edit_form($id=0) {
		$this->template->view(
			/* template view*/
			array("admin/header","vessel_edit","admin/footer"), 
			/* pass data */
			array(
				"title" => "Vessel Edit Data",
				"osess" => $this->session->userdata("osess"),
				"vessel" => $this->vessel_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Vessel"),
						array("link" => "javascript:;","text" => "Edit")
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function confirm_update() {
		$id = $this->input->post("vessel_id");
		$this->data['vessel_id'] = $id;
		$this->data['vessel_name'] = $this->input->post("vessel_name");
		$this->data['vessel_type'] = $this->input->post("vessel_type");

		$this->form_validation->set_rules('vessel_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('vessel_type', 'Password', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			$this->edit_form($id);
		} else {
			$this->template->view(
				/* template view*/
				array("admin/header","vessel_confirm_update","admin/footer"), 
				/* pass data */
				array(
					"title" => "Confirm Update",
					"osess" => $this->session->userdata("osess")
				),
				/* pass class data */
				$this->data);
		}
	}


	public function update_data() {
		$id = $this->input->post("vessel_id");
		$vessel_name = $this->input->post("vessel_name");
		$vessel_type = $this->input->post("vessel_type");

		$this->form_validation->set_rules('vessel_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('vessel_type', 'Password', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			$this->edit_form($id);
		} else {
			$this->vessel_dao->update($vessel_name, $vessel_type, $id);
			$this->session->set_flashdata(
				'front_message', 
				'<div class="row">
	                <div class="col-md-12">
	                    <div class="alert alert-success alert-dismissible" role="alert">
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                      <strong><i class="fa fa-info-circle"></i> Update data success!</strong>
	                    </div>
	                </div>
            	</div>');

			redirect("vessel");	
		}	
	}

	public function add_form() {

		$this->template->view(
			/* template view*/
			array("admin/header","vessel_add","admin/footer"), 
			/* pass data */
			array(
				"title" => "Vessel Add Data",
				"osess" => $this->session->userdata("osess"),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Vessel"),
						array("link" => "javascript:;","text" => "Add")
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function add_data() {
		$vessel_name = $this->input->post("vessel_name");
		$vessel_type = $this->input->post("vessel_type");

		$this->form_validation->set_rules('vessel_name', 'Username', 'trim|required');
		$this->form_validation->set_rules('vessel_type', 'Password', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			$this->add_form();
		} else {
			$this->vessel_dao->add($vessel_name, $vessel_type);
			$this->session->set_flashdata(
				'front_message', 
				'<div class="row">
	                <div class="col-md-12">
	                    <div class="alert alert-success alert-dismissible" role="alert">
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                      <strong><i class="fa fa-info-circle"></i> Add data success!</strong>
	                    </div>
	                </div>
            	</div>');

			redirect("vessel");	
		}	
	}

	public function confirm_delete($id=0) {
		$this->template->view(
			/* template view*/
			array("admin/header","vessel_confirm_delete","admin/footer"), 
			/* pass data */
			array(
				"title" => "Confirm Delete",
				"osess" => $this->session->userdata("osess"),
				"vessel" => $this->vessel_dao->get_item_by_id($id)
			),
			/* pass class data */
			$this->data);
	}

	public function delete_data() {
		$id = $this->input->post("vessel_id");

		$this->form_validation->set_rules('vessel_id', 'Vessel ID', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			$this->add_form();
		} else {
			$this->vessel_dao->delete($id);
			$this->session->set_flashdata(
				'front_message', 
				'<div class="row">
	                <div class="col-md-12">
	                    <div class="alert alert-success alert-dismissible" role="alert">
	                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                      <strong><i class="fa fa-info-circle"></i> Delete data success!</strong>
	                    </div>
	                </div>
            	</div>');

			redirect("vessel");	
		}	
	}

}