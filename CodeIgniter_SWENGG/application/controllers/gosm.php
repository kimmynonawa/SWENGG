<?php
	class Gosm extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model('Gosm_model');
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
			$this->load->view('CSO_GOSM');
		}
		
		public function viewGosm(){
			$gosmdetails = $this->Gosm_model->getGosmDetails(1);
			
			$cencommcomm = $this->Gosm_model->getCenCommCommunications(1);
			$cencommdocu = $this->Gosm_model->getCenCommDocumentations(1);
			$cencommexte = $this->Gosm_model->getCenCommExternals(1);
			$cencommfina = $this->Gosm_model->getCenCommFinance(1);
			$cencommhr   = $this->Gosm_model->getCenCommHR(1);
			$cencomminte = $this->Gosm_model->getCenCommInternals(1);
			$cencommprom = $this->Gosm_model->getCenCommPromotions(1);
			
			$othersequi = $this->Gosm_model->getOthersEquipments(1);
			$othershost = $this->Gosm_model->getOthersHosts(1);
			$othersphot = $this->Gosm_model->getOthersPhotographers(1);
			$othersspea = $this->Gosm_model->getOthersSpeakers(1);
			$othersspon = $this->Gosm_model->getOthersSponsors(1);
			$othersvide = $this->Gosm_model->getOthersVideographers(1);
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