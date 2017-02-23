<?php
	class Gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
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
			
			
			$this->input->post("gosmgoals");
			$this->input->post("gosmobj");
			$this->input->post("gosmdes");
			$this->input->post("gosmmeas");
			$this->input->post("gosmdr");
			$this->input->post("gosmsfromdate");
			$this->input->post("gosmetodate");
			$this->input->post("gosmfromtime");
			$this->input->post("gosmtotime");
			$this->input->post("gosmvenue");
			$this->input->post("gosmbug");
			$this->input->post("gosmnat1");
			$this->input->post("gosmnat2");
			$this->input->post("gosmtype1");
			$this->input->post("gosmtype2");
			$this->input->post("reton");
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_AddGosm');
			}
			else  {
				$this->load->view('ORG_AddGosm');
			}
			
		} 
		
		public function addGosm2(){
			
		}
		
		public function addGosm3(){
			
		}
		
		public function loadSelectViewGosm(){
			
		}
		
		public function selectViewGosm(){
			$this->load->view('CSO_GOSM2');
		}
		
		public function viewGosm(){
			
		}
		
	}
?>