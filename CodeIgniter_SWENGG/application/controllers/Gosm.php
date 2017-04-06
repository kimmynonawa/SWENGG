<?php
	class Gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');

			$this->load->model('Gosm_model');
			$this->load->model('Org_model');
			$this->load->model('PreActivity_model');
		}
		

		// This serves as a function for adding new activities in the GOSM
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function load a page that will inform the user of the success in adding an activity to the GOSM
		public function add(){
			//Start Form Validation
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
				'reto', 'Related to', 
				'required',
				array(
					'required'      => 'You have not provided %s.',
				)
			);
			//End Form Validation
			
			//If Error
			if ($this->form_validation->run() == FALSE){
				$res4 = $this->PreActivity_model->getActivityType();
				$res3 = $this->PreActivity_model->getActivityNature();
				$data = array('actnat' => $res3, 'acttype' => $res4);
				$this->load->view('ORG_AddGosm', $data);
			}
			//If success
			else{
				
				//Array for Insert
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
					'gosmnat'  => $this->input->post("natact"),
					'gosmtype'  => $this->input->post("typeact"),
				);
				$org = $this->session->userdata('org')[0]['userID'];
				
				//Check if related to 
				if ($this->input->post("reto") == 'yes'){
					$reto = 1;
				}
				else{
					$reto = 0;
				}
				
				//Insert new Activity
				$this->Gosm_model->insertActivity($data, $org, $reto);
				$data = array ("success" => "true");
				
				$this->load->view('ORG_AddGosm', $data);
			}
			
		} 
		
		// This serves as a function for CSO to view the activities listed in organization
		// @return this function will load the page to view oganization activities
		public function viewCSOGosm1(){
			$res = $this->Org_model->getOrg();
			$data = (array("orgs" => $res));
			$this->load->view('CSO_GOSM', $data);
		}
		
		// This serves as a function for dropdown population
		// @return a json array of a list of activities of an organization
		public function viewCSOGosm2(){
			header("Content-type: application/json");
			$res = $this->Gosm_model->getAct($this->input->post('org'));
			echo json_encode($res);
			
		}
		
		// This serves as a function for CSO to view GOSM details
		// @return this function will load the page to view GOSM details
		public function viewCSOGosm3(){
			$gosmdetails = $this->Gosm_model->getGosmDetails($this->input->post('gosmcsoact'));
			$data = array("activity" => $gosmdetails);
			$this->load->view('CSO_GOSM2', $data);
			
		}
		
		// This serves as a function for organizations to view the activities listed in their GOSM
		// @return this function will load the page to view GOSM activities
		public function viewORGGosm1(){
			$res = $this->Gosm_model->getAct($this->session->userdata('org')[0]['userID']);
			$data = (array("acts" => $res));
			$this->load->view('ORG_GOSM', $data);
		}
		
		//GOSM(ACTIVITIES) Details - ORG side
		// This serves as a function for organizations to view GOSM details
		// @return this function will load the page to view GOSM details
		public function viewORGGosm2(){
			$gosmdetails = $this->Gosm_model->getGosmDetails($this->input->post('gosmactivityorg'));
			$data = array("activity" => $gosmdetails);
			$this->load->view('ORG_GOSM2', $data);
		}
		
		public function accept(){
			$this->form_validation->set_rules(
				'term', 'Term', 'required'
			);
			if ($this->form_validation->run() == FALSE){
				$term = $this->Gosm_model->getTerm();
				$data = array('term' => $term);
				$this->load->view('CSO_AcceptGosm', $data);
			}
			else{
				echo $this->input->post('term');
				echo $this->input->post('endDate');
				$this->Gosm_model->updateTerm($this->input->post('term'), $this->input->post('sy'), $this->input->post('startDate'), $this->input->post('endDate'));
				$term = $this->Gosm_model->getTerm();
				$data = array('term' => $term);
				$this->load->view('CSO_AcceptGosm', $data);
			}
		}
		
		
		
	}
?>