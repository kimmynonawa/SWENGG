<?php
	class Account extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
		}
		
		public function loadLogin(){
			$this->load->view('login');
		}
		
		public function login() {
			
			$this->form_validation->set_rules(
				'Username', 'Username', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'Password', 'Password', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('login');
			}
			
			else{
				/**
				$type = model that will return the type
				if ($type == 1){//if login as cso redirect to cso homepage
					redirect("Csohomepage");
				}
				if ($type == 2){//if login as org redirect to org homepage
					redirect("Orghomepage");
				}
				else{//wrong login
					$data = array("wrong" => "true");
					$this->load->view('login', $data);
				}
				**/
				redirect("Cso/homepage");
			}
			
		}
		
		public function cso(){
			$this->load->view('CSO_Home');
		}
		
	}
?>