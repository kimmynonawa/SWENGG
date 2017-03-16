<?php
	class Cathy extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->library('session');

			$this->load->model('FoodPermit_model');
			$this->load->model('ContestMechanics_model');
			$this->load->model('EquipmentPermit_model');
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
										'actno'			=> $this->session->userdata('actitvityID'),
										'organization'	=> $this->session->userdata('userID'),
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
				redirect('Cathy/new_ppr_expense_breakdown');
			}	
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_ppr_expense_breakdown() {
			$this->form_validation->set_rules('mat3[]', 'mat3', 'required');
			$this->form_validation->set_rules('qty3[]', 'qty3', 'required');
			$this->form_validation->set_rules('ucost3[]', 'ucost3', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR3');
			}
			else {
				$data = array(
					'material[]' 	=> $this->input->post('mat3[]'),
					'quantity[]' 	=> $this->input->post('qty3[]'),
					'unitcost[]' 	=> $this->input->post('ucost3[]'),
				);

				$this->session->set_userdata('pprExpenseBreakdown', $data);
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
											'othersName[]' 		=> $this->input->post('sourceName[]'),
											'othersAmount[]' 	=> $this->input->post('sourceAmount[]'),
										);

				$this->session->set_userdata('pprFunds', $pprFundsData);
				$this->session->set_userdata('pprOrgFunds', $pprOrgFundsData);
				$this->session->set_userdata('pprOtherSource', $pprOtherSourceData);
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
			}
		}

		// REVISED AND TESTED
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
					'actno' 		=> $this->session->userdata('actitvityID'),
					'organization'  => $this->session->userdata('userID'),
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

		// REVISED AND TESTED
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
			}
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_contest_mechanics() {
			$this->form_validation->set_rules('guidelines', 'General Guidelines', 'required');
			$this->form_validation->set_rules('mechanics[]', 'Mechanics', 'required');
			$this->form_validation->set_rules('criteria[]', 'Criteria For Judging', 'required');
			$this->form_validation->set_rules('judges[]', 'List of Judges', 'required');
			$this->form_validation->set_rules('questions[]', 'Questions for Academic Contests', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_ContestMechanics');
			}
			else  {
				$generalInfo = array('actno'	   => $this->session->userdata('actitvityID'), 
									 'organization'=> $this->session->userdata('userID'), 
									 'guidelines'  => $this->input->post('guidelines'));
				$mechanics   = array('mechanics[]' => $this->input->post('mechanics[]'));
				$criteria    = array('criteria[]'  => $this->input->post('criteria[]'));
				$judges 	 = array('judges[]'	   => $this->input->post('judges[]'));
				$questions 	 = array('questions[]' => $this->input->post('questions[]'));
				
				$this->session->set_userdata('contestMechanicsGeneralInfo', $generalInfo);
				$this->session->set_userdata('contestMechanicsMechanics',$mechanics);				
				$this->session->set_userdata('contestMechanicsCriteria',$criteria);				
				$this->session->set_userdata('contestMechanicsJudges',$judges);				
				$this->session->set_userdata('contestMechanicsQuestions',$questions);				
			}
		}

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION
		public function new_equipment_entry() {
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Position', 'Position', 'required');
			$this->form_validation->set_rules('reasonRequest', 'Reason For Request', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_EquipmentEntry');
			}
			else  {
				$data = array(
					'actno' 		=> $this->session->userdata('actitvityID'),
					'organization'	=> $this->session->userdata('userID'),
					'name' 			=> $this->input->post('Name'),
					'position' 		=> $this->input->post('Position'),
					'reasonRequest' => $this->input->post('reasonRequest'),
				);

				$this->EquipmentPermit_model->createEquipmentEntryPermit($data);
			}
		}

		// REVISED
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
					'organization'			=> $this->session->userdata('userID'),
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

		// REVISED
		// EDITED UI FOR VALIDATION
		public function approval_use_trademark_details() {
			$this->form_validation->set_rules('matToProduce', 'Type of Item/Material To Produce', 'required');
			$this->form_validation->set_rules('trademarkUse', 'Purpose Of Use', 'required');
			$this->form_validation->set_rules('startTime', 'Proposed Start Time', 'required');
			$this->form_validation->set_rules('endTime', 'Proposed End Time', 'required');
			$this->form_validation->set_rules('actType', 'Activity Where Trademark Will Be Used', 'required');
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
					'actno'			=> $this->session->userdata('actitvityID'),
					'material' 		=> $this->input->post('matToProduce'),
					'purposeOfUse' 	=> $this->input->post('trademarkUse'),
					'startTime'		=> $this->input->post('startTime'),
					'endTime' 		=> $this->input->post('endTime'),
					'activityType' 	=> $this->input->post('actType'),
					'venue' 		=> $this->input->post('venue'),
					'duration'		=> $duration
				);

				$this->session->set_userdata('trademarkUseInfo', $data);
				$this->session->set_userdata('trademarksToUse', $this->input->post('trademarkChoice[]'));
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