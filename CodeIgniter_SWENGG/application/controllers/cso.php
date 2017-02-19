<?php
	class cso extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
		}
		
		public function homepage() {
			$this->load->view('CSO_Home');
		}
		
		public function addNewOrganization(){
			
		}
		
		public function calendar (){
			
		}
	
	}
?>