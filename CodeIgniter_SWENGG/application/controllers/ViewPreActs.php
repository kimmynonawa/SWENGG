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
			$this->load->model('PPR_model');
		}
		
		public function getPreacts(){
			header("Content-type: application/json");
			$res = $this->ViewPreActs_model->getPreacts(2);
			echo json_encode($res);
		}
		
		//PAAYOS NITO PLSSSSSSSS HUHU idk how :<
		public function viewPreacts(){
			
			
			$this->form_validation->set_rules('org', 'Organizations', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$res = $this->Org_model->getOrg();
				$data = (array("orgs" => $res));
				$this->load->view('CSO_ViewPreActs', $data);
			}
			
			else
			{
				$actno = $this->input->post('act');
				echo $actno;
				$this->session->set_userdata("actno", $actno);
				echo $this->session->userdata("actno");
				redirect('ViewPreActs/viewAform');
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
			$preacts = $this->session->userdata("actno");;
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$lop = $this->ViewPreActs_model->viewLOP($preacts);
			$data['lop'] = $lop;
			$lopdetails = $this->ViewPreActs_model->viewLOPDetails($lop[0]['listofparticipantsID']);
			$data['lopdetails'] = $lopdetails;
			if ($this->session->userdata('org')[0]['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
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
			
			$getActivityDetails = $this->PPR_model->getActivityDetails($preacts);
			foreach($getActivityDetails as $activityDetail) {
				$activityDetails[] = $activityDetail;
			}

			// GET FOODPERMIT DETAILS
			$getFoodPermit 		= $this->ViewPreActs_model->getFoodPermit($preacts);
			foreach($getFoodPermit as $foodPermit) {
				$getDetails 	= $this->ViewPreActs_model->getFoodPermitDetails($foodPermit);
				$getRequestInfo = $this->ViewPreActs_model->getFoodPermitRequestInfo($foodPermit);
				foreach($getDetails as $permitDetails) {
					$details[] = $permitDetails;
				}

				foreach($getRequestInfo as $requestInfo) {
					$request[] = $requestInfo;
				}
			}

			// ARRAY ASSIGNMENT
			$list['activityDetails'] = $activityDetails;
			$list['permitDetails']   = $details;
			$list['requestInfo']     = $request;

			
			if ($this->session->userdata('org')['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_FoodEntry', $list, $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_FoodEntry', $list, $data);
			}

		}

		public function view_trademark_use() {	
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$getActivityDetails = $this->PPR_model->getActivityDetails($preacts);
			foreach($getActivityDetails as $activityDetail) {
				$activityDetails[] = $activityDetail;
			}

			// GET TRADEMARK USE DETAILS
			$getTrademarkPermit 		= $this->ViewPreActs_model->getTrademarkUseApproval($preacts);
			foreach($getTrademarkPermit as $trademarkPermit) {
				$getDetails 	= $this->ViewPreActs_model->getTrademarkUseDetails($trademarkPermit);
				$getRequestInfo = $this->ViewPreActs_model->getTrademarkUseRequestInfo($trademarkPermit);
				foreach($getDetails as $permitDetails) {
					$details[] = $permitDetails;
				}

				foreach($getRequestInfo as $requestInfo) {
					$request[] = $requestInfo;
				}
			}

			// ARRAY ASSIGNMENT
			$list['activityDetails'] = $activityDetails;
			$list['permitDetails']   = $details;
			$list['requestInfo']     = $request;

			if ($this->session->userdata('org')['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_Trademark', $list, $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_Trademark', $list, $data);
			}

		}

		public function view_contest_mechanics() {
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$getActivityDetails = $this->PPR_model->getActivityDetails($preacts);
			foreach($getActivityDetails as $activityDetail) {
				$activityDetails[] = $activityDetail;
			}

			// GET ACTIVITY PROJECT HEADS
			$getProjectHeads = $this->PPR_model->getProjectHeads($preacts);
			foreach($getProjectHeads as $projectHead) {
				$projectHeads[] = $projectHead;
			}

			// GET CONTEST MECHANICS DETAILS
			$getContestMechanicsNumber = $this->ViewPreActs_model->getContestMechanicsNumber($preacts);
			foreach($getContestMechanicsNumber as $contestMechanicsID) {
				$getContestMechanicsGuidelines 	= $this->ViewPreActs_model->getContestMechanicsGuidelines($contestMechanicsID);
				$getContestMechanicsDetails 	= $this->ViewPreActs_model->getContestMechanicsDetails($contestMechanicsID);
				$getContestCriteria 			= $this->ViewPreActs_model->getContestCriteria($contestMechanicsID);
				$getContestJudges				= $this->ViewPreActs_model->getContestJudges($contestMechanicsID);

				foreach($getContestMechanicsDetails as $contestMechanics) {
					$mechanics[] = $contestMechanics;
				}

				foreach($getContestCriteria as $contestCriteria) {
					$criteria[] = $contestCriteria;
				}

				foreach($getContestJudges as $contestJudges) {
					$judges[] = $contestJudges;
				}

				foreach($getContestMechanicsGuidelines as $contestGuidelines) {
					$guidelines[] = $contestGuidelines;
					if ($contestGuidelines['academiccontest'] == 1) {
						$getContestQuestions = $this->ViewPreActs_model->getContestQuestions($contestMechanicsID);
						foreach($getContestQuestions as $contestQuestions) {
							$questions[] = $contestQuestions; 
						}
					}
				}
			}

			// ARRAY ASSIGNMENT
			$list['activityDetails'] = $activityDetails;
			$list['projectheads']	 = $projectHeads;
			$list['mechanics']  	 = $mechanics;
			$list['criteria']    	 = $criteria;
			$list['judges']     	 = $judges;
			$list['guidelines'] 	 = $guidelines;

			if ($guidelines[0]['academiccontest'] == 1) {
				$list['questions'] = $questions;
			}

			/** removed for testing purposes.. paayos nalang later!
			if ($guidelines[0]['academiccontest'] == 0) {
				// $this->load->view('CSO_ViewPreacts_ContestMechanics', $list);
				$this->load->view('ORG_ViewPreacts_ContestMechanics', $list);

			}
			else {
				// $this->load->view('CSO_ViewPreacts_ContestMechanics_Academic', $list);
				$this->load->view('ORG_ViewPreacts_ContestMechanics_Academic', $list);
			}
			**/
			
			if ($this->session->userdata('org')['userID']=='1'){
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('CSO_ViewPreacts_ContestMechanics', $list, $data);
			}
			else{
				$data['aformexists'] = $this->ViewPreActs_model->aformExists($preacts);
				$data['lopexists'] = $this->ViewPreActs_model->lopExists($preacts);
				$data['contestexists'] = $this->ViewPreActs_model->contestExists($preacts);
				$data['foodexists'] = $this->ViewPreActs_model->foodExists($preacts);
				$data['trademarkexists'] = $this->ViewPreActs_model->trademarkExists($preacts);
				$data['minorpubexists'] = $this->ViewPreActs_model->minorpubExists($preacts);
				$data['sasexists'] = $this->ViewPreActs_model->sasExists($preacts);
				$data['spcaexists'] = $this->ViewPreActs_model->spcaExists($preacts);
				$this->load->view('ORG_ViewPreacts_ContestMechanics', $list, $data);
			}

		}
	}
?>