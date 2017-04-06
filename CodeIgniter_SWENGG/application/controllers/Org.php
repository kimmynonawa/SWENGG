<?php
	class Org extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('encrypt');
			$this->load->library('session');
			
			$this->load->model("Org_model");
		}
		
		// This serves as a function to add a new organization into the database as a user
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the CSO user of the success in the creation of a new organization
		public function add(){
			
			//START of form validation
			$this->form_validation->set_rules(
				'orgname', 'Name of Organization', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'orgun', 'Username', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'orgpw', 'Password', 
				'required',
				array(
					'required'      => 'You have not provided %s.'
				)
			);
			
			$this->form_validation->set_rules(
				'orgcpw', 'Password Confirmation', 
				'required|matches[orgpw]',
				array(
					'required'      => 'You have not provided %s.',
					'matches'	=> 'The password and password confirmation did not match'
				)
			);
			
			$this->form_validation->set_rules(
				'orgemail', 'Email', 
				'required|valid_email',
				array(
					'required'      => 'You have not provided %s.',
					'valid_email'	=> 'The input is not a valid %s'
				)
			);
			//END of form validation
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('CSO_NewOrg');
			}
			else  {
				$encrypted = $this->encrypt->encode($this->input->post("orgpw"));
				$this->Org_model->addOrg($this->input->post("orgname"),$this->input->post("orgacro"),$this->input->post("orgun"),$encrypted,$this->input->post("orgemail"));
				$data = array ("success" => "true");
				$this->load->view('CSO_NewOrg', $data);
			}
			
		}
		
		public function edit(){
			
			$this->form_validation->set_rules(
				'newemail', 'Email', 'required'
			);
			
			if ($this->form_validation->run() == FALSE){
				$org = $this->Org_model->getOrg();
				$data = array('org' => $org);
				$this->load->view('CSO_EditOrg', $data);
			}
			else{
				$this->Org_model->updateOrg($this->input->post('org'), $this->input->post('newemail'));
				
				$org = $this->Org_model->getOrg();
				$data = array('org' => $org, 'success' => 'true');
				$this->load->view('CSO_EditOrg', $data);
			}
		}
		
		public function getOrgDetails(){
			header("Content-type: application/json");
			$res = $this->Org_model->getOrgDetails($this->input->post('org'));
			echo json_encode($res);
		}

	}
?>