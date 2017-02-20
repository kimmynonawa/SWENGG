<?php
	class gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
		}
		
		public function loadAddGosm1(){
			$this->load->view('ORG_AddGosm');
		}
		
		public function loadAddGosm2(){
			$this->load->view('ORG_AddGosm2');
		}
		
		public function loadAddGosm3(){
			$this->load->view('ORG_AddGosm3');
		}
		
		public function addGosm1(){
			$this->load->library('form_validation');
			
			$this->input->post("goals");
			$this->input->post("objectives");
			$this->input->post("description");
			$this->input->post("measures");
			$this->input->post("targetdate");
			$this->input->post("fromdate");
			$this->input->post("todate");
			$this->input->post("time");
			$this->input->post("venue");
			$this->input->post("nature1");
			$this->input->post("nature2");
			$this->input->post("time");
		} 
		
		public function addGosm2(){
			
		}
		
		public function addGosm3(){
			
		}
	}
?>