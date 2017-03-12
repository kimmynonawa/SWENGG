<?php
	class Gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Gosm_model');
			$this->load->model('Org_model');
			$this->load->model('Activity_model');
		}
		
		public function add(){
			
			$this->form_validation->set_rules(
				'gosmtitle', 'Title', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmgoals', 'Goals', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmobj', 'Objectives', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmdes', 'Description', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmmeas', 'Measures', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmperic', 'Person in Charge', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmfromdate', 'Start Date', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmtodate', 'End Date', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmvenue', 'Venue', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmbug', 'Budget', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmnat', 'Nature of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmnat', 'Nature of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'gosmtype', 'Type of Activity', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules(
				'reto', 'Related to', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			
			if ($this->form_validation->run() == FALSE){
				$res1 = $this->Gosm_model->getActivityNature();
				$res2 = $this->Gosm_model->getActivityType();
				$data = array("activityNature" => $res1, "activityType" => $res2);
				$this->load->view('ORG_AddGosm', $data);
			}
			else{
				$data = array(
					'gosmtitle'  => $this->input->post("gosmtitle"),
					'gosmgoals'  => $this->input->post("gosmgoals"),
					'gosmobj'  => $this->input->post("gosmobj"),
					'gosmdes'  => $this->input->post("gosmdes"),
					'gosmmeas'  => $this->input->post("gosmmeas"),
					'gosmperic'  => $this->input->post("gosmperic"),
					'gosmfromdate'  => $this->input->post("gosmfromdate"),
					'gosmtodate'  => $this->input->post("gosmtodate"),
					'gosmvenue'  => $this->input->post("gosmvenue"),
					'gosmbug'  => $this->input->post("gosmbug"),
					'gosmnat'  => $this->input->post("gosmnat"),
					'gosmtype'  => $this->input->post("gosmtype"),
				);
				$org = $this->session->userdata('org')[0]['userID'];
				$orgname = $this->session->userdata('org')[0]['acronym'];
				$gosm = 1;
				
				if ($this->input->post("reto") == 'yes'){
					$reto = 1;
				}
				else{
					$reto = 0;
				}
				
				$this->Gosm_model->insertActivity($data, $org, $gosm, $reto, $orgname);
				$data = array ("success" => "true");
				$this->load->view('ORG_AddGosm', $data);
			}
			
		} 
		
		
		public function viewCSOGosm1(){
			$res = $this->Org_model->getOrg();
			$data = (array("orgs" => $res));
			$this->load->view('CSO_GOSM', $data);
		}
		
		public function viewCSOGosm2(){
			header("Content-type: application/json");
			$res = $this->Activity_model->getAct($this->input->post('org'));
			echo json_encode($res);
			
		}
		
		public function viewCSOGosm3(){
			$gosmdetails = $this->Gosm_model->getGosmDetails($this->input->post('gosmcsoact'));
			$data = array("activity" => $gosmdetails);
			$this->load->view('CSO_GOSM2', $data);
			
		}
		
		public function viewORGGosm1(){
			$res = $this->Activity_model->getAct($this->session->userdata('org')[0]['userID']);
			$data = (array("acts" => $res));
			$this->load->view('ORG_GOSM', $data);
		}
		
		public function viewORGGosm2(){
			
		}
		
		
		
	}
?>