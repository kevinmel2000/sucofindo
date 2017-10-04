<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH."/concept/ICrud_controller.php";

class Project extends CI_Controller implements ICrud_controller {

	public function __construct() {
		parent::__construct();

		$this->load->model(array("Project_dao","Projcat_dao"));
		/* checking session is active or not */
		//$this->session_secure->active_or_redirect("login");

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />';

		$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/js/select2.min.js"></script>

			<script>
				$(document).ready(function() {
					App.init();
					$("#master-data").addClass("active");
					$(".select2").select2();
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
			array("admin/header","project","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project Category</small>",
				"project" => $this->Project_dao->get_all_items_by_join(),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project") 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function preview_form($id=0) {
		$this->template->view(
			/* template view*/
			array("admin/header","project_view","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project</small>",
				"project" => $this->Project_dao->get_item_by_join_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project"), 
						array("link" => "javascript:;","text" => "Edit Project"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function add_form() {
		$this->template->view(
			/* template view*/
			array("admin/header","project_add","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project View",
				"osess" => $this->session->userdata("osess"),
				"projcat" => $this->Projcat_dao->get_all_items(),
				"page_header" => "Project <small>Project</small>",
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project"), 
						array("link" => "javascript:;","text" => "Create Project"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function add_data() {
		$projcat_id = $this->input->post("projcat_id");
		$project_name = $this->input->post("project_name");

		$this->form_validation->set_rules('project_name', 'Project Name', 'trim|required');
		$this->form_validation->set_rules('projcat_id', 'Project Category Name', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->add_form();
		} else {
			$this->Project_dao->add(
				array(
					"project_name" => $project_name, 
					"projcat_id" => $projcat_id));
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

			redirect("project");	
		}	
	}

	public function edit_form($id) {
		$this->template->view(
			/* template view*/
			array("admin/header","project_edit","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project</small>",
				"project" => $this->Project_dao->get_item_by_join_id($id),
				"projcat" => $this->Projcat_dao->get_all_items(),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project"), 
						array("link" => "javascript:;","text" => "Edit Project"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function update_data() {
		$project_id = $this->input->post("project_id");
		$project_name = $this->input->post("project_name");
		$projcat_id = $this->input->post("projcat_id");

		$array_data = array(
			"project_name" => $project_name,
			"projcat_id" => $projcat_id
			);
		$this->Project_dao->update($array_data,$project_id);

		redirect("project");	
	}

	public function confirm_delete($id) {
		$this->template->view(
			/* template view*/
			array("admin/header","project_confirm_delete","admin/footer"), 
			/* pass data */
			array(
				"title" => "Project View",
				"osess" => $this->session->userdata("osess"),
				"page_header" => "Project <small>Project</small>",
				"project" => $this->Project_dao->get_item_by_id($id),
				"breadcrumb" => $this->template->breadcrumb(
					"<ol class=\"breadcrumb pull-right\">", 
					"</ol>",
					array(
						array("link" => "javascript:;","text" => "Home"),
						array("link" => "javascript:;","text" => "Master Data"),
						array("link" => "javascript:;","text" => "Project"), 
						array("link" => "javascript:;","text" => "Confirm Delete"), 
					)
				)),
			/* pass class data */
			$this->data);
	}

	public function delete_data() {
		$project_id = $this->input->post("project_id");

		$this->form_validation->set_rules('project_id', 'Project ID', 'trim|required');	

		if ($this->form_validation->run() == FALSE) {
			redirect("project");
		} else {
			$this->Project_dao->delete($project_id);
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

			redirect("project");	
		}	
	}
}

?>