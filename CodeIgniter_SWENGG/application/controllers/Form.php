<?php
	class Form extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
		}
		
		public function loadAdd(){
			$this->load->view('ORG_PreAct_AForm');
		}
	}
?>