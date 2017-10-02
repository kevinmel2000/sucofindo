<?php 

class V1 extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view("public/header");
		$this->load->view("v1");
		$this->load->view("public/footer");
	}

	public function page($p="default") {
		$this->load->view("public/header");
		switch($p) {
			case "about-us" :
				$this->load->view("about-us");
			break;
			case "contact-us" :
				$this->load->view("contact-us");
			break;
			case "client-room" :
				$data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);

				$this->load->view("client-room",$data);
			break;
			default :
				echo "Sorry, page not found!";
			break;
		}
		$this->load->view("public/footer");
	}

	public function client_auth() {
		echo $client   = $this->input->post("cln");
		echo $user     = $this->input->post("usr");
		echo $password = $this->input->post("pwd");
	}
}