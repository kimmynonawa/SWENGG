<?php
	class ViewPreActs extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('PreActivity_model');
			$this->load->model('ViewPreActs_model');
			$this->load->model('Gosm_model');
			$this->load->model('Org_model');
		}
		
		public function getPreacts(){
			header("Content-type: application/json");
			$res = $this->ViewPreActs_model->getPreacts($this->input->post('org'));
			echo json_encode($res);
		}
		
		public function viewPreacts(){
			
			
			$this->form_validation->set_rules('act', 'Activity', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				if($this->session->userdata('org')[0]['userID']=='1'){
					$res = $this->Org_model->getOrg();
					$data = (array("orgs" => $res));
					$this->load->view('CSO_ViewPreActs', $data);
				}	
				else{
					$res = $this->ViewPreActs_model->getPreacts($this->session->userdata('org')[0]['userID']);
					$data = array('act' => $res);
					$this->load->view('ORG_ViewPreActs', $data);
				}
			}
			
			else
			{
				if($this->session->userdata('org')[0]['userID']=='1'){
					$actno = $this->input->post('act');
					$this->session->set_userdata("actno", $actno);
					redirect('ViewPreActs/viewAform');
				}
				else{
					$actno = $this->input->post('act');
					$this->session->set_userdata("actno", $actno);
					redirect('ViewPreActs/viewAform');
				}
			}
		}
		
		
		public function viewAform(){
			$preacts = $this->session->userdata("actno");
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			
			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreActs_Aform', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreActs_Aform', $data);
			}
		}
		
		public function viewLOP(){
			$preacts = $this->session->userdata("actno");
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$lop = $this->ViewPreActs_model->viewLOP($preacts);
			$data['lop'] = $lop;
			$lopdetails1 = $this->ViewPreActs_model->viewLOPDetails1($lop[0]['listofparticipantsID']);//yeswaiver
			$lopdetails2 = $this->ViewPreActs_model->viewLOPDetails2($lop[0]['listofparticipantsID']);//nowaiver
			$data['lopdetails1'] = $lopdetails1;
			$data['lopdetails2'] = $lopdetails2;
			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreActs_ListOfParticipants', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreActs_ListOfParticipants', $data);
			}
		}
		
		public function viewCAD(){
			$preacts = $this->session->userdata("actno");
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$sas = $this->ViewPreActs_model->viewSAS($preacts);
			$data['sas'] = $sas;
			$cad = $this->ViewPreActs_model->viewCAD($sas[0]['sasID']);
			$data['cad'] = $cad;
			
			if ($cad[0]['cancellation'] == 1){
				$changes = 'cancel';
				$data['changes'] = $changes;
			}
			else{
				$cadvenue = $this->ViewPreActs_model->viewCADVenue($cad[0]['activitydetailschangesID']);
				$caddate = $this->ViewPreActs_model->viewCADDate($cad[0]['activitydetailschangesID']);
				$caddes = $this->ViewPreActs_model->viewCADDes($cad[0]['activitydetailschangesID']);
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
			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreActs_ApprovalChangeAct', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreActs_ApprovalChangeAct', $data);
			}
			
		}
		
		public function ORGminorPubView()
		{
			$actno=$this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getMinorPubDetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('ORG_ViewPreActs_MinorPub',$data);
		}
		
		public function CSOminorPubView()
		{
			$actno=$this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getMinorPubDetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('CSO_ViewPreActs_MinorPub',$data);
		}
		
		public function ORGSASView()
		{
			$actno=$this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getSASdetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('ORG_ViewPreActs_SAS',$data);
		}
		
		public function CSOSASView()
		{
			$actno=$this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getSASdetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('CSO_ViewPreActs_SAS',$data);
		}
		
		public function ORGSPCAView()
		{
			$actno=$this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getSPCAdetails($actno);
			$data['groups2'] = $this->ViewPreActs_model->getSPCAactivitydetails($actno);
			$data['groups3'] = $this->ViewPreActs_model->getSPCApersonsdetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('ORG_ViewPreActs_SPCA',$data);
		}
		
		public function CSOSPCAView()
		{
			$actno=$this->session->userdata("actno");

			$data['groups'] = $this->ViewPreActs_model->getSPCAdetails($actno);
			$data['groups2'] = $this->ViewPreActs_model->getSPCAactivitydetails($actno);
			$data['groups3'] = $this->ViewPreActs_model->getSPCApersonsdetails($actno);
			$data['aformexists'] = $this->ViewPreActs_model->aformExists($actno);
			$data['pprexists'] = $this->ViewPreActs_model->pprExists($actno);
			$data['changeexists'] = $this->ViewPreActs_model->changeExists($actno);
			$data['lopexists'] = $this->ViewPreActs_model->lopExists($actno);
			$data['contestexists'] = $this->ViewPreActs_model->contestExists($actno);
			$data['foodexists'] = $this->ViewPreActs_model->foodExists($actno);
			$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($actno);
			$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($actno);
			$data['sasexists'] = $this->ViewPreActs_model->sasExists($actno);
			$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($actno);
			$this->load->view('CSO_ViewPreActs_SPCA',$data);
		}
		
		public function view_food_permit() {
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");

			$data['activityDetails'] = $this->PreActivity_model->getActivityDetails($preacts);
			$data['permitDetails'] = $this->ViewPreActs_model->getFoodPermitDetails($preacts);
			$data['requestInfo'] = $this->ViewPreActs_model->getFoodPermitRequestInfo($preacts);
			
			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_FoodEntry', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_FoodEntry', $data);
			}

		}

		public function view_trademark_use() {	
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$preacts=62;

			$data['activityDetails'] = $this->PreActivity_model->getActivityDetails($preacts);
			$data['permitDetails'] = $this->ViewPreActs_model->getTrademarkUseDetails($preacts);
			$data['requestInfo'] = $this->ViewPreActs_model->getTrademarkUseRequestInfo($preacts);

			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_Trademark', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_Trademark', $data);
			}

		}

		public function view_contest_mechanics() {
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$preacts = 62;
			$data['activityDetails'] = $this->PreActivity_model->getActivityDetails($preacts);
			$data['projectHeads'] = $this->PreActivity_model->getProjectHeads($preacts);
			$data['guidelines'] = $this->ViewPreActs_model->getContestMechanicsGuidelines($preacts);
			$data['mechanics'] 	= $this->ViewPreActs_model->getContestMechanicsDetails($preacts);
			$data['criteria'] 	= $this->ViewPreActs_model->getContestCriteria($preacts);
			$data['judges']		= $this->ViewPreActs_model->getContestJudges($preacts);

			$guidelines = $data['guidelines'];
			if ($guidelines[0]['academiccontest'] == 1) {
				$data['questions'] = $this->ViewPreActs_model->getContestquestions($preacts);
			}

			if ($guidelines[0]['academiccontest'] == 0) {
				if ($this->session->userdata('org')['userID']=='1'){
					$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
					$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
					$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
					$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
					$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
					$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
					$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
					$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
					$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
					$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
					$this->load->view('CSO_ViewPreacts_ContestMechanics', $data);
				}
				
				else{
					$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
					$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
					$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
					$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
					$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
					$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
					$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
					$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
					$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
					$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
					$this->load->view('ORG_ViewPreacts_ContestMechanics', $data);
				}

			}
			else {
				if ($this->session->userdata('org')[0]['userID']=='1'){
					$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
					$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
					$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
					$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
					$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
					$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
					$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
					$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
					$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
					$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
					$this->load->view('CSO_ViewPreacts_ContestMechanics_Academic', $data);
				}
				
				else{
					$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
					$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
					$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
					$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
					$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
					$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
					$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
					$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
					$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
					$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
					$this->load->view('ORG_ViewPreacts_ContestMechanics_Academic', $data);
				}
			}
		}
		
		public function view_ppr() {
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$data['activityDetails'] = $this->ViewPreActs_model->getActivityDetails($preacts);
			$data['pprDetails'] = $this->ViewPreActs_model->getPPRDetails($preacts);
			$data['projectHeads'] = $this->ViewPreActs_model->getProjectHeads($preacts);
			$data['programDesign'] = $this->ViewPreActs_model->getProgramDesign($preacts);
			$data['expenseBreakdown'] = $this->ViewPreActs_model->getExpenses($preacts);
			$data['orgFunds'] = $this->ViewPreActs_model->getOrgFunds($preacts);
			$data['sourceFunds'] = $this->ViewPreActs_model->getSourceFunds($preacts);
			$data['otherFnds'] = $this->ViewPreActs_model->getOtherSourceFunds($preacts);
			$data['projectedIncome'] = $this->ViewPreActs_model->getProjectedIncome($preacts);
				


			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_PPR', $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['pprexists'] = $this->ViewPreActs_model->pprExists($preacts);
				$data['changeexists'] = $this->ViewPreActs_model->changeExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_PPR', $data);
			}
		}
	}
?>