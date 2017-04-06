<?php
	class Cso extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
		}

		public function viewPreacts(){
			$this->load->view("CSO_ViewPreActs");
		}

		public function viewCSOHome(){
			$this->load->view("CSO_Home");
		}
	}
?>