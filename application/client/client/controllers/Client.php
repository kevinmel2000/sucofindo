<?php 

class Client extends CI_Controller {
	private $data;

	public function __construct() {
		parent::__construct();
		$this->load->model(array("ClientDao","PelniDao"));

		if($this->uri->segment(2) == 'auth'){
		} else {
			if($this->session->userdata("oclient") == null) {
				$this->session->set_flashdata('error_login_client', 'Access denied !');
				redirect("v1/page/client-room/");
			}
		}

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
		    <link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
			<link href="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
    		<link href="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />';
		    

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

			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/gritter/js/jquery.gritter.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.time.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.resize.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/flot/jquery.flot.pie.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/sparkline/jquery.sparkline.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>

			<script src="'.base_url().'assets/admin/color-admin/assets/plugins/bootstrap-wizard/js/bwizard.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/form-wizards.demo.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/dashboard.min.js"></script>
			<script src="'.base_url().'assets/admin/color-admin/assets/js/apps.min.js"></script>

			<script src="'.base_url().'assets/admin/color-admin/assets/js/form-plugins.demo.min.js"></script>
			<script>
			    $(document).ready(function() {

			        App.init();
			        Dashboard.init();
			        FormWizard.init();
			        FormPlugins.init();
			        //$("#general-form").addClass("active");
			    });

				  $(".selectpicker").on("change", function(){
				    var selected = $(this).find("option:selected").val();
				    alert(selected);
				  });
			</script>';
	}

	public function index() {
		$this->data['title'] = "Home";
		$this->data['oclient'] = $this->session->userdata("oclient");
		$this->load->view("client/header",$this->data);
		$this->load->view("home", $this->data);
		$this->load->view("client/footer", $this->data);
	}

	public function page($p="default") {
		$this->data['oclient'] = $this->session->userdata("oclient");
		$this->load->view("client/header",$this->data);
		switch($p) {
			case "home" :
				$this->data['title'] = "Home";
				$this->load->view("home", $this->data);
			break;
			case "general-form" :
				$this->data['title'] = "General Form";
				$this->load->view("general-form", $this->data);
			break;
			case "pelni-form" :
				$this->data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);
				$this->data['title'] = "Pelni Form";
				$this->load->view("pelni-form", $this->data);
			break;
			case "pertamina-form" :
				$this->data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);
				$this->data['title'] = "Pertamina Form";
				$this->load->view("pertamina-form", $this->data);
			break;
			case "pelni-report" :
				$this->load->view("pelni-report", $this->data);
			break;
			case "pln-form" :
				$this->data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);
				$this->data['title'] = "Pln Form";
				$this->load->view("pln-form", $this->data);
			break;
			default :
				$this->data['title'] = "Error 404";
				$this->load->view("error-404", $this->data);
			break;
		}
		$this->load->view("client/footer",$this->data);
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect();
	}

	public function auth() {
		$client   = $this->input->post("cln");
		$username = $this->input->post("usr");
		$password = $this->input->post("pwd");
		$result_login = $this->ClientDao->clientCheck($username, $password, $client);
		if($result_login->num_rows() > 0) {
			foreach($result_login->result() as $row) {
				$o = new stdClass();
				$o->username = $row->username;
				$o->firstname = $row->firstname;
				$o->lastname = $row->lastname;
				$o->email = $row->email;
				$o->phone_number =  $row->phone_number;
				$o->photo = $row->photo;
				$o->created_date = $row->created_date;
				$o->edited_date = $row->edited_date;
				$o->active = $row->active;

				/* client identifier setting */
				$o->client_logo = $row->client_logo;
				$o->client_site = $row->client_site;
				$o->client_name = $row->client_name;

				$this->session->set_userdata("oclient",$o);
			}	
			redirect('/client', 'refresh');
		} else {
			$this->session->set_flashdata('error_login_client', 'Username or password incorrect !');
			redirect('/v1/page/client-room/', 'refresh');
		}
	}
}