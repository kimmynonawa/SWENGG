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
		
		public function loadCreateGosm(){
			
			$res1 = $this->Gosm_model->getActivityNature();
			$res2 = $this->Gosm_model->getActivityType();
			$data = array("activityNature" => $res1, "activityType" => $res2);
			$this->load->view('ORG_AddGosm', $data);
		}
		
		public function createGosm(){
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_AddGosm');
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
				$org = 2;
				$gosm = 1;
				
				if ($this->input->post("reto") == 'yes'){
					$reto = 1;
				}
				else{
					$reto = 0;
				}
				
				$this->Gosm_model->insertActivity($data, $org, $gosm, $reto);
				$this->load->view('ORG_AddGosm');
			}
			
				
		} 
		
		public function createGosm2(){
			
			$this->session->set_userdata('phname', $this->input->post('phname'));
			$this->load->view('ORG_AddGosm3');
		}
		
		public function createGosm3(){
			
		}
		
		public function selectViewGosm(){
			$res = $this->Org_model->getOrg();
			$data = (array("orgs" => $res));
			$this->load->view('CSO_GOSM', $data);
		}
		
		public function selectViewGosm2(){
			header("Content-type: application/json");
			$res = $this->Activity_model->getAct($this->input->post('org'));
			echo json_encode($res);
			
		}
		
		public function viewGosm(){
			$gosmdetails = $this->Gosm_model->getGosmDetails(1);
			
			$data = array("activity" => $gosmdetails);
			$this->load->view('CSO_GOSM2', $data);
			
		}
		
		
		
	}
?>