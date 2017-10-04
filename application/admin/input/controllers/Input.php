<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function __construct() {
		parent::__construct();

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
}
