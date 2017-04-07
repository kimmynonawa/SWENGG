<?php
	class Account extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model("Account_model");
			$this->load->model("Org_model");
			$this->load->model("p_forms_model");
			$this->load->model("Gosm_model");
			$this->load->library('session');
		}
		
		// This serves as a function to log the user out
		public function logout(){
			$this->session->sess_destroy();
			$this->load->view('login');
		}
		
		// This serves as a function to log the user in
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the proper home page if validation returns TRUE
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
				$type = $this->Account_model->checkLogin($this->input->post('Username'),$this->input->post('Password'));
				if($type == null){
					$data = array("wrong" => "true");
					$this->load->view('login', $data);
				}
				else if ($type[0]['usertypeID'] == "1"){//if login as cso redirect to cso homepage
					$org = $this->Account_model->getID($this->input->post('Username'),$this->input->post('Password'));
					$this->session->set_userdata('org', $org);
					redirect('account/cso');
				}
				else if ($type[0]['usertypeID'] == "2"){//if login as org redirect to org homepage
					$org = $this->Account_model->getID($this->input->post('Username'),$this->input->post('Password'));
					$this->session->set_userdata('org', $org);
					redirect('account/org');
				}
				else{
					var_dump($type);
					echo("error");
				}
				
			}
			
		}
		
		// This serves as a function to load a CSO user's homepage
		public function cso(){
			$data['groups'] = $this->Account_model->getWeekActsWithPreActs();
			$data['groups2'] = $this->Account_model->getWeekActsNoPreActs();
			$data['groups3'] = $this->Account_model->getRecentActs();

			$this->load->view('CSO_Home', $data);
		}
		
		// This serves as a function to load an Organization's homepage
		public function org(){
			$org=$this->session->userdata('org')[0]['userID'];
			$data['groups'] = $this->Account_model->getWeekActsOrgWithPreActs($org);
			$data['groups2'] = $this->Account_model->getWeekActsOrgNoPreActs($org);
			$data['groups3'] = $this->Account_model->getRecentActsOrg($org);
			$this->load->view('ORG_Home',$data);
		}
		
		
		
	}
?>