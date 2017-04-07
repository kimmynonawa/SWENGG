<?php
	class DownloadPreacts extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('PreActivity_model');
			$this->load->model('ViewPreActs_model');
			$this->load->model('Org_model');
		}
		
		public function aform(){
			$preacts = $this->session->userdata("actno");
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$sas = $this->ViewPreActs_model->viewSAS($preacts);
			$data['sas'] = $sas;
			if($sas != null){
				$cad = $this->ViewPreActs_model->viewCAD($sas[0]['sasID']);
				$data['cad'] = $cad;
			}
			else{
				$cad = null;
			}
			
			if ($cad != null){
				$cadvenue = $this->ViewPreActs_model->viewCADVenue($cad[0]['activitydetailschangesID']);
				$caddate = $this->ViewPreActs_model->viewCADDate($cad[0]['activitydetailschangesID']);
				$caddes = $this->ViewPreActs_model->viewCADDes($cad[0]['activitydetailschangesID']);
				if ($cadvenue!=Null){
					$data['cadvenue'] = $cadvenue;
				}
				if ($caddate!=Null){
					echo 'hi';
					$data['caddate'] = $caddate;
				} 
				if ($caddes!=Null){
					$data['caddes'] = $caddes;
				}
			}
			$this->load->view('AForm', $data);
		}
		
		public function lop(){
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
			$this->load->view('LOP', $data);
		}
		
		public function cad(){
			$preacts = $this->session->userdata("actno");;
			$aform = $this->ViewPreActs_model->viewAform($preacts);
			$data['aform'] = $aform;
			$aformdate = $this->ViewPreActs_model->getAformDate($aform[0]['aformID']);
			$data['aformdate'] = $aformdate;
			$sas = $this->ViewPreActs_model->viewSAS($preacts);
			$data['sas'] = $sas;
			$cad = $this->ViewPreActs_model->viewCAD($sas[0]['sasID']);
			$data['cad'] = $cad;
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
			$this->load->view('ApprovalChange', $data);
		}
		
		public function SASpdf(){
			$actno= $this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getSASdetails($actno);
			$this->load->view('SAS',$data);
		}
		
		public function SPCApdf(){
			$actno= $this->session->userdata("actno");
			
			$data['groups'] = $this->ViewPreActs_model->getSPCAdetails($actno);
			$data['groups2'] = $this->ViewPreActs_model->getSPCAactivitydetails($actno);
			$data['groups3'] = $this->ViewPreActs_model->getSPCApersonsdetails($actno);
			$this->load->view('SPCA',$data);
		}
		
		public function food_permit(){
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$org=$this->session->userdata("orgID");

			$data['orgInfo'] 		 = $this->Org_model->getOrgDetails($org);
			$data['activityDetails'] = $this->PreActivity_model->getActivityDetails($preacts);
			$data['permitDetails'] 	 = $this->ViewPreActs_model->getFoodPermitDetails($preacts);
			$data['requestInfo'] 	 = $this->ViewPreActs_model->getFoodPermitRequestInfo($preacts);

			$this->load->view('FoodEntryPermitPDF', $data);
		}

		public function trademark_use() {	
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$org=$this->session->userdata("orgID");

			$data['orgInfo'] 		  = $this->Org_model->getOrgDetails($org);
			$data['activityDetails']  = $this->PreActivity_model->getActivityDetails($preacts);
			$data['permitDetails'] 	  = $this->ViewPreActs_model->getTrademarkUseDetails($preacts);
			$data['trademarkDetails'] = $this->ViewPreActs_model->getTrademarksList($preacts);
			$data['requestInfo'] 	  = $this->ViewPreActs_model->getTrademarkUseRequestInfo($preacts);

			
			$this->load->view('ApprovalTrademarkPDF', $data);
		}

		public function contest_mechanics(){
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$org=$this->session->userdata("orgID");

			$data['activityDetails'] = $this->PreActivity_model->getActivityDetails($preacts);
			$data['projectheads'] 	 = $this->PreActivity_model->getProjectHeads($preacts);
			$data['guidelines']		 = $this->ViewPreActs_model->getContestMechanicsGuidelines($preacts);
			$data['mechanics'] 		 = $this->ViewPreActs_model->getContestMechanicsDetails($preacts);
			$data['criteria'] 		 = $this->ViewPreActs_model->getContestCriteria($preacts);
			$data['judges']			 = $this->ViewPreActs_model->getContestJudges($preacts);

			if ($data['guidelines']) {
				$guidelines = $data['guidelines'];
				if ($guidelines[0]['academiccontest'] == 1) {
					$data['questions'] = $this->ViewPreActs_model->getContestquestions($preacts);
				}
			}

			$this->load->view('ContestMechanicsPDF', $data);

		}

		public function ppr(){
			// GET ACTIVITY DETAILS
			$preacts=$this->session->userdata("actno");
			$org=$this->session->userdata("orgID");
			$preacts=77;

			$data['activityDetails']  = $this->ViewPreActs_model->getActivityDetails($preacts);
			$data['pprDetails']		  = $this->ViewPreActs_model->getPPRDetails($preacts);
			$data['projectHeads']	  = $this->ViewPreActs_model->getProjectHeads($preacts);
			$data['programDesign'] 	  = $this->ViewPreActs_model->getProgramDesign($preacts);
			$data['expenseBreakdown'] = $this->ViewPreActs_model->getExpenses($preacts);
			$data['orgFunds'] 		  = $this->ViewPreActs_model->getOrgFunds($preacts);
			$data['funds'] 			  = $this->ViewPreActs_model->getFunds($preacts);
			$data['sourceFunds'] 	  = $this->ViewPreActs_model->getSourceFunds($preacts);
			$data['otherFnds'] 		  = $this->ViewPreActs_model->getOtherSourceFunds($preacts);
			$data['projectedIncome']  = $this->ViewPreActs_model->getProjectedIncome($preacts);
			$data['provisions'] 	  = $this->ViewPreActs_model->getProvisions($preacts);

				
			$this->load->view('PPRPDF', $data);

		}
	}
?>