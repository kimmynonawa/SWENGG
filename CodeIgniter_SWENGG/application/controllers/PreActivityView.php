<?php
	class PreActivityView extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('PreActivityView_model');
			$this->load->model('Gosm_model');
			$this->load->model('Org_model');
		}
		
		public function getPreacts(){
			header("Content-type: application/json");
			$res = $this->PreActivityView_model->getPreacts($this->input->post('org'));
			echo json_encode($res);
		}
		
		public function viewPreactsFormCSO(){
			$res = $this->Org_model->getOrg();
			$data = (array("orgs" => $res));
			$this->load->view('CSO_ViewPreActs', $data);
		}
		
		public function test(){
			echo $this->input->post('gosmcsoact');
			
		}
		
		public function viewAform(){
			$preacts = 1;
			$aform = $this->PreActivityView_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->PreActivityView_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			if ($this->session->useradata('org')['userID']){
				$this->load->view('CSO_ViewPreActs_Aform', $data);
			}
			else{
				$this->load->view('ORG_ViewPreActs_Aform', $data);
			}
		}
		
		public function viewLOP(){
			$preacts = 12;
			$aform = $this->PreActivityView_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->PreActivityView_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$lop = $this->PreActivityView_model->viewLOP($preacts);
			$data['lop'] = $lop;
			$lopdetails = $this->PreActivityView_model->viewLOPDetails($lop[0]['listofparticipantsID']);
			$data['lopdetails'] = $lopdetails;
			if ($this->session->useradata('org')['userID']){
				$this->load->view('CSO_ViewPreActs_ListOfParticipants', $data);
			}
			else{
				$this->load->view('ORG_ViewPreActs_ListOfParticipants', $data);
			}
		}
		
		public function viewCAD(){
			$preacts = 13;
			$aform = $this->PreActivityView_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->PreActivityView_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$sas = $this->PreActivityView_model->viewSAS($preacts);
			$data['sas'] = $sas;
			$cad = $this->PreActivityView_model->viewCAD($sas[0]['sasID']);
			$data['cad'] = $cad;
			
			if ($cad[0]['cancellation'] == 1){
				$changes = 'cancel';
				$data['changes'] = $changes;
			}
			else{
				$cadvenue = $this->PreActivityView_model->viewCADVenue($cad[0]['activitydetailschangesID']);
				$caddate = $this->PreActivityView_model->viewCADDate($cad[0]['activitydetailschangesID']);
				$caddes = $this->PreActivityView_model->viewCADDes($cad[0]['activitydetailschangesID']);
				if ($cadvenue!=Null){
					$data['cadvenue'] = $cadvenue;
				}
				if ($caddate!=Null){
					$data['caddate'] = $caddate;
				}
				if ($caddes!=Null){
					$data['caddes'] = $caddes;
				}
			}
			if ($this->session->useradata('org')['userID']){
				$this->load->view('CSO_ViewPreActs_ApprovalChangeAct', $data);
			}
			else{
				$this->load->view('ORG_ViewPreActs_ApprovalChangeAct', $data);
			}
			
		}
		
	}
?>