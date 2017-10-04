<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {
	private $data = array();
	
	public function __construct() {
		parent::__construct();		
		$this->load->model(array("Process_data"));
		
		/* checking session is active or not */
		$this->session_secure->active_or_redirect("login");

		$this->data['html_css'] = '
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
		    <link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
		    <link href="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />
		    <link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />';

		$this->data['html_js'] = '
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/masked-input/masked-input.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/password-indicator/js/password-indicator.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/select2/dist/js/select2.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/form-wizards.demo.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script src="'.base_url().'assets/admin/color-admin/assets/js/form-plugins.demo.min.js"></script>
			<script>
			    $(document).ready(function() {
			        App.init();
			        FormWizard.init();
			        FormPlugins.init();
			        $("#general-form").addClass("active");
			    });

				  $(".selectpicker").on("change", function(){
				    var selected = $(this).find("option:selected").val();
				    alert(selected);
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
			array("admin/header","input","admin/footer"), 
			/* pass data */
			array(
				"title" => "Dashboard View",
				"osess" => $this->session->userdata("osess")),
			/* pass class data */
			$this->data);
	}
	
	public function add_form() {

		$this->template->view(
			/* template view*/
			array("admin/header","input","admin/footer"), 
			/* pass data */
			array(
				"title" => "input data",
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
		
		$vessel = $this->input->post("vessel");
		echo($vessel);
		$barge = $this->input->post("barge");
		$port = $this->input->post("port");
		$datetimepicker1 = $this->input->post("datetimepicker1");		
		$deliv_order_kl = $this->input->post("deliv_order_kl");
		$deliv_order_kl15 = $this->input->post("deliv_order_kl15");
		$bar_fig_afterload_kl = $this->input->post("bar_fig_afterload_kl");
		$bar_fig_afterload_kl15 = $this->input->post("bar_fig_afterload_kl15");
		$bar_fig_bfdc_kl = $this->input->post("bar_fig_bfdc_kl");
		$bar_fig_bfdc_kl15 = $this->input->post("bar_fig_bfdc_kl15");		
		$bar_fig_afdc_kl = $this->input->post("bar_fig_afdc_kl");
		$bar_fig_afdc_kl15 = $this->input->post("bar_fig_afdc_kl15");
		$ship_rec_kl = $this->input->post("ship_rec_kl");
		$ship_rec_kl15 = $this->input->post("ship_rec_kl15");	
		
		$dataform = array(
		    'vessel' => $vessel,
			'barge' => $barge,
			'port' => $port,
			'datetimepicker1' => $datetimepicker1,		
			'deliv_order_kl' => $deliv_order_kl,
			'deliv_order_kl15' => $deliv_order_kl15,
			'bar_fig_afterload_kl' => $bar_fig_afterload_kl,
			'bar_fig_afterload_kl15' => $bar_fig_afterload_kl15,
			'bar_fig_bfdc_kl' => $bar_fig_bfdc_kl,
			'bar_fig_bfdc_kl15' => $bar_fig_bfdc_kl15,		
			'bar_fig_afdc_kl' => $bar_fig_afdc_kl,
			'bar_fig_afdc_kl15' => $bar_fig_afdc_kl15,
			'ship_rec_kl' => $ship_rec_kl,
			'ship_rec_kl15' => $ship_rec_kl15
		);
		
		/* $this->form_validation->set_rules('vessel', 'Vesel name', 'trim|required');
		$this->form_validation->set_rules('barge', 'Barge Name', 'trim|required');		

		if ($this->form_validation->run() == FALSE) {
			$this->add_form();
		} else { */
			$this->Process_data->add($dataform);
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

			redirect("input");	
		//}	
	}
}
