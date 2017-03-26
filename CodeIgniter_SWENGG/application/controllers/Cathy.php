<?php
	class Cathy extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->library('session');

			$this->load->model('FoodPermit_model');
			$this->load->model('ContestMechanics_model');
			$this->load->model('ApprovalTrademark_model');
			$this->load->model('PPR_model');


		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_ppr() {
			$this->form_validation->set_rules('phname[]', 'phname', 'required');
			$this->form_validation->set_rules('phnum[]', 'phnum', 'required');
			$this->form_validation->set_rules('obje1', 'obje1', 'required');
			$this->form_validation->set_rules('obje2', 'obje2', 'required');
			$this->form_validation->set_rules('obje3', 'obje3', 'required');
			$this->form_validation->set_rules('desc1', 'desc1', 'required');
			$this->form_validation->set_rules('desc2', 'desc2', 'required');
			$this->form_validation->set_rules('desc3', 'desc3', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR');
			}
			else  {
				$this->session->set_userdata('projectHeads', $this->input->post('phname[]'));
				$pprGeneralInfo  = array(
										'preactsID'		=> 1,//$this->session->userdata('preactsID'),
										'objective1' 	=> $this->input->post('obje1'),
										'objective2' 	=> $this->input->post('obje2'),
										'objective3' 	=> $this->input->post('obje3'),
										'description1' 	=> $this->input->post('desc1'),
										'description2' 	=> $this->input->post('desc2'),
										'description3' 	=> $this->input->post('desc3'),
									);
				$projectHeadInfo = array(
										'names[]'		=>	$this->input->post('phname[]'),
										'contactno[]'	=>	$this->input->post('phnum[]')
									);

				$this->session->set_userdata('pprGeneralInfo', $pprGeneralInfo);
				$this->session->set_userdata('pprProjectHeads', $projectHeadInfo);

				// FOR TESTING PURPOSES
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR($this->session->userdata('preactsID'));
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addProjectHeads($ppr, $this->session->userdata['pprProjectHeads']);
				// }

				redirect('Cathy/new_ppr_program_design');
			}
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_ppr_program_design() {
			$this->form_validation->set_rules('time[]', 'time', 'required');
			$this->form_validation->set_rules('stime[]', 'stime', 'required');
			$this->form_validation->set_rules('aname[]', 'aname', 'required');
			$this->form_validation->set_rules('ades[]', 'ades', 'required');
			$this->form_validation->set_rules('apic[]', 'apic', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR2');
			}
			else {
				$data = array(
					'startTime[]' 	 	=> $this->input->post('time[]'),
					'endTime[]' 		=> $this->input->post('stime[]'),
					'activityName[]' 	=> $this->input->post('aname[]'),
					'activityDes[]' 	=> $this->input->post('ades[]'),
					'activityPerson[]'  => $this->input->post('apic[]')
				);

				$this->session->set_userdata('pprProgramDesign', $data);

				//FOR TESTING PURPOSES
				$this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				$PPRNum = $this->PPR_model->getPPR(1);
				foreach ($PPRNum as $ppr) {
					$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);
				}

				redirect('Cathy/new_ppr_expense_breakdown');
			}	
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_ppr_expense_breakdown() {
			$this->form_validation->set_rules('matname[]', 'matname', 'required');
			$this->form_validation->set_rules('matqty[]', 'matqty', 'required');
			$this->form_validation->set_rules('matcost[]', 'matcost', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR3');
			}
			else {
				$data = array(
					'material[]' 	=> $this->input->post('matname[]'),
					'quantity[]' 	=> $this->input->post('matqty[]'),
					'unitcost[]' 	=> $this->input->post('matcost[]'),
				);

				$this->session->set_userdata('pprExpenseBreakdown', $data);

				// FOR TESTING PURPOSES
				$this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				$PPRNum = $this->PPR_model->getPPR(1);
				foreach ($PPRNum as $ppr) {
					$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);
				}
				redirect('Cathy/new_ppr_funding_details');
			}
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_ppr_funding_details() {
			$this->form_validation->set_rules('orgFunds', 'Organizational Funds', 'required');
			$this->form_validation->set_rules('participantsFee', 'Participants Fee', 'required');
			$this->form_validation->set_rules('operationalFundsAmount', 'Operational Funds','required');
			$this->form_validation->set_rules('depositoryDate', 'Depository Funds as of','required');
			$this->form_validation->set_rules('depositoryAmount', 'Depository Funds as of','required');
			$this->form_validation->set_rules('donSporFunds', 'Participants Fee/Donation/Sponsorships','required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR4');
			}
			else {
				$totalOthersFund = 0;
				if ($this->input->post('sourceName[0]') != "") {
					$sourceAmount = $this->input->post('sourceAmount[]');
					for ($i = 0; $i < sizeof($sourceAmount); $i++) {
						$totalOthersFund += $sourceAmount[$i];
					}
				}
				$pprFundsData 	 	= array(
											'orgFunds'		 	=> $this->input->post('orgFunds'),
											'participantsFee' 	=> $this->input->post('participantsFee'),
											'totalOthersFund'	=> $totalOthersFund,
										);

				$pprOrgFundsData 	= array(
											'operationalFunds' 	=> $this->input->post('operationalFundsAmount'),
											'depositoryFunds' 	=> $this->input->post('depositoryAmount'),
											'depositoryDate' 	=> $this->input->post('depositoryDate'),
											'donationAmount' 	=> $this->input->post('donSporFunds'),
										);

				$pprOtherSourceData = array(
											'othersName[]' 		=> $this->input->post('sourcename[]'),
											'othersAmount[]' 	=> $this->input->post('sourceamount[]'),
										);

				$this->session->set_userdata('pprFunds', $pprFundsData);
				$this->session->set_userdata('pprOrgFunds', $pprOrgFundsData);
				$this->session->set_userdata('pprOtherSource', $pprOtherSourceData);

				// FOR TESTING PURPOSES
				$this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				$PPRNum = $this->PPR_model->getPPR(1);
				foreach ($PPRNum as $ppr) {
					$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
					$this->PPR_model->addOtherFunds($ppr, $this->session->userdata['pprOtherSource']);
					$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);

				}
				redirect('Cathy/new_ppr_projected_income');
			}
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION AND ROW ADDING
		public function new_ppr_projected_income() {
			$this->form_validation->set_rules('incomeItem[]', 'Item Name', 'required');
			$this->form_validation->set_rules('incomeQty[]', 'Quantity', 'required');
			$this->form_validation->set_rules('incomeSellPrice[]', 'Selling Price','required');
			$this->form_validation->set_rules('expenseItem[]', 'Item Name','required');
			$this->form_validation->set_rules('expenseQty[]', 'Quantity','required');
			$this->form_validation->set_rules('expenseSellPrice[]', 'Selling Price','required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR5');
			}
			else {
				$incomeData  = array(
									'incomeItem[]'	 	=> $this->input->post('incomeItem[]'),
									'incomeQty[]' 		=> $this->input->post('incomeQty[]'),
									'incomeSellPrice[]' => $this->input->post('incomeSellPrice[]'),
								);
				$expenseData = array(
									'expenseItem[]'	 	 => $this->input->post('expenseItem[]'),
									'expenseQty[]' 		 => $this->input->post('expenseQty[]'),
									'expenseSellPrice[]' => $this->input->post('expenseSellPrice[]'),
								);

				$this->session->set_userdata('pprProjectedIncome', $incomeData);
				$this->session->set_userdata('pprProjectedExpenses', $expenseData);

				// FOR TESTING PURPOSES
				$this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				$PPRNum = $this->PPR_model->getPPR(1);
				foreach ($PPRNum as $ppr) {
					$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
					$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);

				}
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		// EDITED UI FOR VALIDATION
		public function new_food_permit() {
			$this->form_validation->set_rules('Name', 'Full Name', 'required');
			$this->form_validation->set_rules('IDNum', 'ID Number', 'required');
			$this->form_validation->set_rules('Email', 'Email Address', 'required');
			$this->form_validation->set_rules('TelNo', 'Telephone Number', 'required');
			$this->form_validation->set_rules('CPNo', 'Cellphone Number', 'required');
			$this->form_validation->set_rules('Position', 'Position', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_FoodEntryPermit');
			}
			else  {
				$data = array(
					'preactsID' 	=> $this->session->userdata("actno"),
					'name' 			=> $this->input->post('Name'),
					'IDnum' 		=> $this->input->post('IDNum'),
					'email' 		=> $this->input->post('Email'),
					'telephone'		=> $this->input->post('TelNo'),
					'mobile' 		=> $this->input->post('CPNo'),
					'position' 		=> $this->input->post('Position'),
				);

				$this->session->set_userdata('foodPermitGeneralInfo', $data);
				redirect('Cathy/food_permit_details');
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		// EDITED UI FOR VALIDATION
		public function food_permit_details() {
			$this->form_validation->set_rules('fqty[]', 'fqty', 'required');
			$this->form_validation->set_rules('funit[]', 'funit', 'required');
			$this->form_validation->set_rules('fdes[]', 'Description', 'required');
			$this->form_validation->set_rules('fecost[]', 'fecost', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_FoodEntryPermit2');
			}
			else  {
				$data = array(
							'quantity[]' 	=> $this->input->post('fqty[]'),
							'unit[]' 		=> $this->input->post('funit[]'),
							'description[]' => $this->input->post('fdes[]'),
							'cost[]' 		=> $this->input->post('fecost[]')
						);
				$this->session->set_userdata('foodPermitDetails', $data);

				// FOR TESTING
				$this->FoodPermit_model->createFoodPermit($this->session->userdata('foodPermitGeneralInfo'));
				$foodPermit = $this->FoodPermit_model->getFoodPermit($this->session->userdata("actno"));
				foreach ($foodPermit as $permit) {
					$this->FoodPermit_model->createFoodPermitDetails($permit,$data);
				}
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		// EDITED UI FOR VALIDATION
		public function new_contest_mechanics() {
			$this->form_validation->set_rules('guidelines', 'General Guidelines', 'required');
			$this->form_validation->set_rules('mechanics[]', 'Mechanics', 'required');
			$this->form_validation->set_rules('cri[]', 'Criteria For Judging', 'required');
			$this->form_validation->set_rules('judge[]', 'List of Judges', 'required');
			// $this->form_validation->set_rules('questions[]', 'Questions for Academic Contests', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_ContestMechanics');
			}
			else  {
				$generalInfo = array('preactsID'   => $this->session->userdata("actno"), 
									 'guidelines'  => $this->input->post('guidelines'));
				$mechanics   = array('mechanics[]' => $this->input->post('mechanics[]'));
				$criteria    = array('criteria[]'  => $this->input->post('cri[]'));
				$judges 	 = array('judges[]'	   => $this->input->post('judge[]'));
				if ($this->input->post['questions[]'] !== FALSE)  {
					$questions 	 = array('questions[]' => $this->input->post('questions[]'));
				}
				
				$this->session->set_userdata('contestMechanicsGeneralInfo', $generalInfo);
				$this->session->set_userdata('contestMechanicsMechanics',$mechanics);				
				$this->session->set_userdata('contestMechanicsCriteria',$criteria);				
				$this->session->set_userdata('contestMechanicsJudges',$judges);				
				if (isset($questions)) {
					$this->session->set_userdata('contestMechanicsQuestions',$questions);
				}

				// FOR TESTING PURPOSES
				$this->ContestMechanics_model->newContestMecHanics($this->session->userdata('contestMechanicsGeneralInfo'));
				$contestMechanicsNumber = $this->ContestMechanics_model->getContestMechanicsNumber($this->session->userdata("actno"));
				foreach ($contestMechanicsNumber as $contestMechanics) {
					$this->ContestMechanics_model->addContestMechanicsDetails($contestMechanics,$this->session->userdata('contestMechanicsMechanics'));
					$this->ContestMechanics_model->addContestMechanicsCriteria($contestMechanics,$this->session->userdata('contestMechanicsCriteria'));
					$this->ContestMechanics_model->addContestMechanicsJudges($contestMechanics,$this->session->userdata('contestMechanicsJudges'));
					if ($this->session->userdata('contestMechanicsQuestions')) {
						$this->ContestMechanics_model->addContestMechanicsQuestions($contestMechanics,$this->session->userdata('contestMechanicsQuestions'));
					}
				}	

			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		// EDITED UI FOR VALIDATION
		public function new_approval_use_trademark() { 
			$this->form_validation->set_rules('Name', 'Full Name', 'required');
			$this->form_validation->set_rules('Position', 'Position', 'required');
			$this->form_validation->set_rules('IDNum', 'ID Number', 'required');
			$this->form_validation->set_rules('Email', 'Email Address', 'required');
			$this->form_validation->set_rules('TelNo', 'Telephone Number', 'required');
			$this->form_validation->set_rules('CPNo', 'Cellphone Number', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_ApprovalUseTrademark');
			}
			else  {
				$data = array(
					'requestedby_name' 		=> $this->input->post('Name'),
					'requestedby_position' 	=> $this->input->post('Position'),
					'IDnum'					=> $this->input->post('IDNum'),
					'email' 				=> $this->input->post('Email'),
					'telephone'			 	=> $this->input->post('TelNo'),
					'mobile' 				=> $this->input->post('CPNo'),
				);

				$this->session->set_userdata('trademarkRequestInfo', $data);
				redirect('Cathy/approval_use_trademark_details');
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		// EDITED UI FOR VALIDATION
		public function approval_use_trademark_details() {
			$this->form_validation->set_rules('matToProduce', 'Type of Item/Material To Produce', 'required');
			$this->form_validation->set_rules('trademarkUse', 'Purpose Of Use', 'required');
			$this->form_validation->set_rules('startDate', 'Proposed Start Date', 'required');
			$this->form_validation->set_rules('endDate', 'Proposed End Date', 'required');
			// $this->form_validation->set_rules('actType', 'Activity Where Trademark Will Be Used', 'required');
			$this->form_validation->set_rules('venue', 'Venue', 'required');

			if ($this->form_validation->run() == FALSE){
				$list['activityTypes'] = $this->ApprovalTrademark_model->getActivityTypes();
				$list['trademarkList'] = $this->ApprovalTrademark_model->getTrademarks(1);
				$this->load->view('ORG_PreAct_ApprovalUseTrademark2', $list);
			}
			else  {
				// COMPUTATION FOR DURATION
				$startTime = date('H:i:s', strtotime($this->input->post('startTime')));
				$endTime = date('H:i:s', strtotime($this->input->post('endTime')));
				
				$newStartTime = new DateTime($startTime);
				$newEndTime   = new DateTime($endTime);
				$duration 	  = $newEndTime->diff($newStartTime);
				$duration->format('%H hour(s) and %i minute(s)');

				$data = array(
					'preactsID'		=> $this->session->userdata("actno"),
					'material' 		=> $this->input->post('matToProduce'),
					'purposeOfUse' 	=> $this->input->post('trademarkUse'),
					'startDate'		=> $this->input->post('startDate'),
					'endDate' 		=> $this->input->post('endDate'),
					// 'activityType' 	=> $this->input->post('actType'),
					'venue' 		=> $this->input->post('venue'),
					'duration'		=> $duration
				);

				$this->session->set_userdata('trademarkUseInfo', $data);
				$this->session->set_userdata('trademarksToUse', $this->input->post('trademarkChoice[]'));

				// FOR TESTING
				$this->ApprovalTrademark_model->createTrademarkUseApproval($this->session->userdata('trademarkUseInfo'));
				$getTrademarkApproval = $this->ApprovalTrademark_model->getTrademarkUseApproval($this->session->userdata("actno"));
				foreach ($getTrademarkApproval as $trademarkUseNum) {
					$this->ApprovalTrademark_model->createTrademarkUseRequestInfo($trademarkUseNum,$this->session->userdata('trademarkRequestInfo'));
					$this->ApprovalTrademark_model->addTrademarkToUse($trademarkUseNum, $this->session->userdata('trademarksToUse'));
				}
			} 
		}

		// FOR AJAX PURPOSES
		public function approval_use_trademark_details_2(){
			header("Content-type: application/json");
			$result = $this->ApprovalTrademark_model->getTrademarks($this->input->post('trademark'));
			echo json_encode($result);
		}

	}
?>