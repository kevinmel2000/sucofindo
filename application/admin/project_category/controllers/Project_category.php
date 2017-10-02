<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/concept/ICrud_controller.php";

class Project_category extends CI_Controller implements ICrud_controller {

	public function __construct() {
		parent::__construct();

		$this->load->model(array("Projcat_dao"));
		/* checking session is active or not */
		//$this->session_secure->active_or_redirect("login");

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />';

		$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script>
				$(document).ready(function() {
					App.init();
					$("#master-data").addClass("active");
				});
			</script>';

		$this->data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->data["front_message"] = $this->session->flashdata("front_message");
	}

	public function index() {
		$this->template->view(
			/* template view*/
			array("admin/header","projcat","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project Category View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"projcat" => $this->Projcat_dao->get_all_items(),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project Category") 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function preview_form($id=0) {
		$this->template->view(
			/* template view*/
			array("admin/header","projcat_view","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project Category View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"projcat" => $this->Projcat_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project Category"), 
						array("link" => "javascript:;","text" => "Edit Project Category"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function add_form() {
		$this->template->view(
			/* template view*/
			array("admin/header","projcat_add","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project Category View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project Category"), 
						array("link" => "javascript:;","text" => "Add Project Category"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function add_data() {
		$projcat_name = $this->input->post("projcat_name");

		$this->form_validation->set_rules('projcat_name', 'Project Category Name', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->add_form();
		} else {
			$this->Projcat_dao->add(array("projcat_name" => $projcat_name));
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

			redirect("projcat");	
		}	
	}

	public function edit_form($id) {
		$this->template->view(
			/* template view*/
			array("admin/header","projcat_edit","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project Category View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"projcat" => $this->Projcat_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project Category"), 
						array("link" => "javascript:;","text" => "Edit Project Category"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function update_data() {
		$projcat_id = $this->input->post("projcat_id");
		$projcat_name = $this->input->post("projcat_name");

		$array_data = array(
			"projcat_name" => $projcat_name
			);
		$this->Projcat_dao->update($array_data,$projcat_id);

		redirect("projcat");	
	}

	public function confirm_delete($id) {
		$this->template->view(
			/* template view*/
			array("admin/header","projcat_confirm_delete","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project Category View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"projcat" => $this->Projcat_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project Category"), 
						array("link" => "javascript:;","text" => "Confirm Delete"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function delete_data() {
		$projcat_id = $this->input->post("projcat_id");

		$this->form_validation->set_rules('projcat_id', 'Project Category ID', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			redirect("projcat");
		} else {
			$this->Projcat_dao->delete($projcat_id);
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

			redirect("projcat");	
		}	
	}
}

?>