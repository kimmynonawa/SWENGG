<?php
	class Gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model('Gosm_model');
			$this->load->model('Org_model');
			$this->load->model('Activity_model');
		}
		
		public function loadAddGosm1(){
			$this->load->view('ORG_AddGosm');
		}
		
		public function loadAddGosm2(){
			$this->load->view('ORG_AddGosm2');
		}
		
		public function loadAddGosm3(){
			$this->load->view('ORG_AddGosm3');
		}
		
		public function addGosm1(){
			$this->input->post("gosmgoals");
			$this->input->post("gosmobj");
			$this->input->post("gosmdes");
			$this->input->post("gosmmeas");
			$this->input->post("gosmdr");
			$this->input->post("gosmsfromdate");
			$this->input->post("gosmetodate");
			$this->input->post("gosmfromtime");
			$this->input->post("gosmtotime");
			$this->input->post("gosmvenue");
			$this->input->post("gosmbug");
			$this->input->post("gosmnat1");
			$this->input->post("gosmnat2");
			$this->input->post("gosmtype1");
			$this->input->post("gosmtype2");
			$this->input->post("reton");
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_AddGosm');
			}
			else  {
				$this->load->view('ORG_AddGosm');
			}
			
		} 
		
		public function addGosm2(){
			
		}
		
		public function addGosm3(){
			
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
			
			$cencommcomm = $this->Gosm_model->getCenComm(1, 1);
			$cencommdocu = $this->Gosm_model->getCenComm(1, 2);
			$cencommexte = $this->Gosm_model->getCenComm(1, 3);
			$cencommfina = $this->Gosm_model->getCenComm(1, 4);
			$cencommhr   = $this->Gosm_model->getCenComm(1, 5);
			$cencomminte = $this->Gosm_model->getCenComm(1, 6);
			$cencommprom = $this->Gosm_model->getCenComm(1, 7);
			
			$othersequi = $this->Gosm_model->getOthers(1, 1);
			$othershost = $this->Gosm_model->getOthers(1, 2);
			$othersphot = $this->Gosm_model->getOthers(1, 3);
			$othersspea = $this->Gosm_model->getOthers(1, 4);
			$othersspon = $this->Gosm_model->getOthers(1, 5);
			$othersvide = $this->Gosm_model->getOthers(1, 6);
			$data = 
			array(
				"activity" => $gosmdetails, "cencommcomm" => $cencommcomm, "cencommdocu" => $cencommdocu, 
				"cencommexte" => $cencommexte, "cencommfina" => $cencommfina, "cencommhr" => $cencommhr,
				"cencomminte" => $cencomminte, "cencommprom" => $cencommprom,
				"othersequi" => $othersequi, "othershost" => $othershost, "othersphot" => $othersphot,
				"othersspea" => $othersspea, "othersspon" => $othersspon, "othersvide" => $othersvide
				);
			$this->load->view('CSO_GOSM2', $data);
			
		}
		
		
		
	}
?>