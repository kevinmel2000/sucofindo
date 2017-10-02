<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		$data = array();
		$data['error_message'] = $this->session->flashdata('login_message');
		$data['csrf'] = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$this->load->view("login",$data);
	}

	public function auth() {

		$this->load->model("login_dao");

		/* Attempt sementara no limit */
		$attempt = ((int) $this->session->userdata("attempt"))+1;

		/* If attempt > 3 do something */
		if($attempt > 3) { /* do something */}

		$this->session->set_userdata("attempt",$attempt);

		/* Get data form login form */
		$username = $this->input->post("un");
		$password = $this->input->post("ps");

		/* Set rules */
		$this->form_validation->set_rules('un', 'Username', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('ps', 'Password', 'trim|required|min_length[5]|max_length[12]');

		/* Form validation */
		if ($this->form_validation->run() == FALSE) {

			$this->session->set_userdata("attempt",1);
			$this->session->set_flashdata('login_message', '<i class="fa fa-info-circle"></i> Username or password incorrect, please try again!');
			redirect("login");

		} else {

			/* checking database */
			$result_login = $this->login_dao->user_check($username,$password);
			if($result_login->num_rows > 0) {

				foreach($result_login->result as $row) {
					$o = new stdClass();
					$o->username = $row->username;
					$o->firstname = $row->firstname;
					$o->lastname = $row->lastname;
					$o->email = $row->email;
					$o->phone_number =  $row->phone_number;
					$o->photo = $row->photo;
					$o->created_date = $row->created_date;
					$o->modified_date = $row->modified_date;
					$o->active = $row->active;
					$this->session->set_userdata("osess",$o);
				}

				/* clear session attempt */
				$this->session->unset_userdata("attempt");

				redirect("dashboard");

			} else {
				
				$this->session->set_flashdata('login_message', '<i class="fa fa-info-circle"></i> Username or password incorrect, please try again!');
				redirect("login?attempt=".$attempt);
			}
		}
	}
}