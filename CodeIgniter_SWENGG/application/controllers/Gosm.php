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
			$this->load->view('ORG_AddGosm');
		}
		
		public function createGosm(){
			
				
				$data = array(
					'gosmgoals'  => $this->input->post("gosmgoals"),
					'gosmobj'  => $this->input->post("gosmobj"),
					'gosmdes'  => $this->input->post("gosmdes"),
					'gosmmeas'  => $this->input->post("gosmmeas"),
					'gosmdr'  => $this->input->post("gosmdr"),
					'gosmsfromdate'  => $this->input->post("gosmsfromdate"),
					'gosmetodate'  => $this->input->post("gosmetodate"),
					'gosmfromtime'  => $this->input->post("gosmfromtime"),
					'gosmtotime'  => $this->input->post("gosmgoals"),
					'gosmvenue'  => $this->input->post("gosmtotime"),
					'gosmbug'  => $this->input->post("gosmbug"),
					'gosmnat1'  => $this->input->post("gosmgoals"),
					'gosmnat2'  => $this->input->post("gosmnat1"),
					'gosmtype1'  => $this->input->post("gosmtype1"),
					'gosmtype2'  => $this->input->post("gosmtype2"),
					'reton'  => $this->input->post("reton")
				);
				
				$name = 'kim';
				
				$this->session->set_userdata('name', $name);
				$this->session->set_userdata('data', $data);
				$this->load->view('ORG_AddGosm2');
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
			
			$data = 
			array(
				"activity" => $gosmdetails
				);
			$this->load->view('CSO_GOSM2', $data);
			
		}
		
		
		
	}
?>