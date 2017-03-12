<?php
	class Account extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model("Account_model");
			$this->load->model("Gosm_model");
			$this->load->model("Preacts_model");
			$this->load->library('session');
		}
		
		public function logout(){
			$this->session->sess_destroy();
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
				$type = $this->Account_model->checkLogin($this->input->post('Username'),$this->input->post('Password'));
				if($type == null){
					$data = array("wrong" => "true");
					$this->load->view('login', $data);
				}
				else if ($type[0]['type'] == "1"){//if login as cso redirect to cso homepage
					$org = $this->Account_model->getID($this->input->post('Username'),$this->input->post('Password'));
					$this->session->set_userdata('org', $org);
					redirect('account/cso');
				}
				else if ($type[0]['type'] == "2"){//if login as org redirect to org homepage
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
		
		public function cso(){
			$preacts = $this->Preacts_model->get();
			$data = (array("preacts" => $preacts));
			$this->load->view('CSO_Home', $data);
		}
		
		public function org(){
			$this->load->view('ORG_Home');
		}
		
		
		
	}
?>