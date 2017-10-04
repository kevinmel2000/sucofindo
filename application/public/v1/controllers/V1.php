<?php 

/* huruf awal kelas usahakan besar, karena di server production case sensitif */
class V1 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array("v1_dao"));
	}
/*tester saja*/
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
			case "inspeksi-rig" :
				$this->load->view("inspeksi-rig");
			break;
			case "kalibrasi" :
				$this->load->view("kalibrasi");
			break;
			case "konsultasi" : 
				$this->load->view("konsultasi");
			break;
			case "octg" :
				$this->load->view("octg");
			break;
			case "survey-cargo" :
				$this->load->view("survey-cargo");
			break;
			case "client-room" :
				$data['csrf'] = array(
					'name' => $this->security->get_csrf_token_name(),
					'hash' => $this->security->get_csrf_hash()
				);

				$this->load->view("client-room",$data);
			break;
			default :
				$this->load->view("error-404");
			break;
		}
		$this->load->view("public/footer");
	}
}