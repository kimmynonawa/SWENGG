<?php
	class Org extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('encrypt');
			$this->load->model("Org_model");
			$this->load->library('session');
		}
		
		//ADD NEW ORG
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

		public function viewPreActs(){
			$this->load->view('ORG_ViewPreActs');
		}

		public function viewPreActs2(){
			$this->load->view('ORG_ViewPreActs2');
		}

		public function viewAform(){
			$this->load->view('ORG_ViewPreActs_Aform');
		}

		public function viewppr(){
			$this->load->view('ORG_ViewPreActs_PPR');
		}
		public function viewApprovalChangeAct(){
			$this->load->view('ORG_ViewPreActs_ApprovalChangeAct');
		}
		public function viewApprovalChangeActWithDes(){
			$this->load->view('ORG_ViewPreActs_ApprovalChangeActWithDes');
		}
		public function viewTrademark(){
			$this->load->view('ORG_ViewPreActs_Trademark');
		}
		public function viewContestMechanics(){
			$this->load->view('ORG_ViewPreActs_ContestMechanics');
		}
		public function viewFoodEntry(){
			$this->load->view('ORG_ViewPreActs_FoodEntry');
		}
		public function viewListOfParticipants(){
			$this->load->view('ORG_ViewPreActs_ListOfParticipants');
		}
		public function viewMinorPub(){
			$this->load->view('ORG_ViewPreActs_MinorPub');
		}
		public function viewSAS(){
			$this->load->view('ORG_ViewPreActs_SAS');
		}
		public function viewSPCA(){
			$this->load->view('ORG_ViewPreActs_SPCA');
		}
		public function fillOutOtherReq(){
			$this->load->view('ORG_FillOutOtherReq');
		}
		public function fillOutOtherReq2(){
			$this->load->view('ORG_FillOutOtherReq2');
		}
		//CSO controllers
		public function CSOviewPreActs(){
			$this->load->view('CSO_ViewPreActs');
		}
		public function CSOviewPreActs2(){
			$this->load->view('CSO_ViewPreActs2');
		}

		public function CSOviewAform(){
			$this->load->view('CSO_ViewPreActs_Aform');
		}
		
		public function CSOviewppr(){
			$this->load->view('CSO_ViewPreActs_PPR');
		}
		public function CSOviewApprovalChangeAct(){
			$this->load->view('CSO_ViewPreActs_ApprovalChangeAct');
		}
		public function CSOviewApprovalChangeActWithDes(){
			$this->load->view('CSO_ViewPreActs_ApprovalChangeActWithDes');
		}
		public function CSOviewTrademark(){
			$this->load->view('CSO_ViewPreActs_Trademark');
		}
		public function CSOviewContestMechanics(){
			$this->load->view('CSO_ViewPreActs_ContestMechanics');
		}
		public function CSOviewFoodEntry(){
			$this->load->view('CSO_ViewPreActs_FoodEntry');
		}
		public function CSOviewListOfParticipants(){
			$this->load->view('CSO_ViewPreActs_ListOfParticipants');
		}
		public function CSOviewMinorPub(){
			$this->load->view('CSO_ViewPreActs_MinorPub');
		}
		public function CSOviewSAS(){
			$this->load->view('CSO_ViewPreActs_SAS');
		}
		public function CSOviewSPCA(){
			$this->load->view('CSO_ViewPreActs_SPCA');
		}
	}
?>