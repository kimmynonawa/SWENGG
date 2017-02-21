<?php
	class Org extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('encrypt');
			$this->load->model("Org_model");
		}
		
		public function loadAdd(){
			$this->load->view('CSO_NewOrg');
		}
		
		public function add(){
			
			$this->input->post("name");
			$this->input->post("username");
			$this->input->post("password");
			$this->input->post("confirmPassword");
			$this->input->post("email");
			
			//START of form validation
			$this->form_validation->set_rules(
				'name', 'Name of Organization', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'username', 'Username', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'password', 'Password', 
				'required',
				array(
					'required'      => 'You have not provided %s.'
				)
			);
			
			$this->form_validation->set_rules(
				'confirmPassword', 'Password Confirmation', 
				'required|matches[password]',
				array(
					'required'      => 'You have not provided %s.',
					//'matches'	=> 'The password and password confirmation did not match'
				)
			);
			
			$this->form_validation->set_rules(
				'email', 'Email', 
				'required|valid_email',
				array(
					'required'      => 'You have not provided %s.',
					'valid_email'	=> 'The input is not a valid $s'
				)
			);
			//END of form validation
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('CSO_NewOrg');
			}
			else  {
				$encrypted = $this->encrypt->encode($this->input->post("password"));
				$this->Org_model->addOrg($this->input->post("name"),$this->input->post("username"),$encrypted,$this->input->post("email"));
				$data = array ("success" => "true");
				$this->load->view('CSO_NewOrg', $data);
			}
			
		}
		
	}
?>