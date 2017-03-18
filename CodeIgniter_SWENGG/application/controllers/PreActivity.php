<?php
	class PreActivity extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Activity_model');
			$this->load->model('PreActivity_model');
		}
		
		public function getActivityNature(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityNature($this->input->post('actoff'));
			echo json_encode($res);
		}
		
		public function getActivityType(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityType($this->input->post('prooff'));
			echo json_encode($res);
		}
		
		public function preacts(){
			$this->load->view('ORG_PreAct');
		}
		
		public function preacts2(){
			if ($this->input->post('yesno') == 'yes'){
				redirect('preActivity/aformGOSM');
			}
			else if ($this->input->post('yesno') == 'no'){
				redirect('preActivity/sas');
			}
		}
		
		public function aformSAS(){
			$this->load->view('ORG_PreAct_AFormSAS');
		}

		public function aformNotInGOSM(){
			$this->load->view('ORG_PreAct_AFormNotInGOSM');
		}
		
		public function aformGOSM(){
			//Start AFORM Form Validation
			$this->form_validation->set_rules(
				'actName', 'Activity Name', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'natact', 'Nature of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'typeact', 'Type of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'reachType', 'Reach of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			//End AFORM Form Validation
			
			//If error
			if ($this->form_validation->run() == FALSE){
				$res2 = $this->PreActivity_model->getActivityReach();
				$org  = $this->session->userdata('org')[0]['userID'];
				$res  = $this->Activity_model->getAct($org);
				$data = array("activity" => $res, "reach" => $res2);
				
				$this->load->view('ORG_PreAct_AFormGOSM', $data);
			}
			//If success
			else{
				$aform1 = array( 
					'actName' => $this->input->post('actName'),
					'natact' => $this->input->post('natact'),
					'typeact' => $this->input->post('typeact'),
					'reachType' => $this->input->post('reachType')
				);
				$this->session->set_userdata('aform1', $aform1);
				
				$this->load->view('ORG_PreAct_AForm2');
			}
		}
		
		public function aform2(){
			//Start AFORM Form Validation
			$this->form_validation->set_rules(
				'venue', 'Venue', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'enmp', 'Expected Number of Member Participants', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'enp', 'Expected Number of Participants', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			//End AFORM Form Validation
			
			//
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_AForm2');
			}
			else{
				$aform2_1 = array( 
					'venue' => $this->input->post('venue'),
					'enmp' => $this->input->post('enmp'),
					'enp' => $this->input->post('enp')
				);
				
				$this->session->set_userdata('sDate', $this->input->post('sDate'));
				$this->session->set_userdata('s1Time', $this->input->post('s1Time'));
				$this->session->set_userdata('s2Time', $this->input->post('e1Time'));
				
				
				$this->session->set_userdata('drsDate', $this->input->post('drsDate'));
				$this->session->set_userdata('dreDate', $this->input->post('dreDate'));
				$this->session->set_userdata('s2Time', $this->input->post('s2Time'));
				$this->session->set_userdata('e2Time', $this->input->post('e2Time'));
				
				$this->load->view('ORG_PreAct_AForm2');
			}
		}
		
		
		
		public function listOfParticipants(){
			
			$this->form_validation->set_rules(
				'id', 'ID Number', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'lName', 'Last Name', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'fName', 'First Name', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'mName', 'Middle Name', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			$this->form_validation->set_rules(
				'age', 'Age', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			if ($this->form_validation->run() == FALSE){
				echo 2;
				$this->load->view('ORG_PreAct_ListOfParticipants');
			}
			else{
				echo 1;
				$this->session->set_userdata('id', $this->input->post('id'));
				$this->session->set_userdata('lName', $this->input->post('lName'));
				$this->session->set_userdata('fName', $this->input->post('fName'));
				$this->session->set_userdata('mName', $this->input->post('mName'));
				$this->session->set_userdata('age', $this->input->post('age'));
				var_dump ($this->session->userdata('id'));
				$this->load->view('ORG_PreAct_ListOfParticipants');
			}
			
			
		}
		
		public function yo(){
			$this->load->view('ORG_PreAct_ListOfParticipants');
		}
		
		public function changeActDetails(){
			$this->load->view('ORG_PreAct_ApprovalChangeActDetails');
		}
		
		public function changeActDetails2(){
			$this->load->view('ORG_PreAct_ApprovalChangeActDetails_ComDes');
		}
		public function changeActDetails_Change(){
			$this->load->view('ORG_PreAct_ApprovalChangeActDetails_Change');
		}
		public function changeActDetails_Cancel(){
			$this->load->view('ORG_PreAct_ApprovalChangeActDetails_Cancel');
		}

		
	}
?>