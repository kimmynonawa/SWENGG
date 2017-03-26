<?php
	class PreActivity extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			// $this->load->model('Activity_model');
			$this->load->model('PreActivity_model');
			$this->load->model('Gosm_model');
			$this->load->model('PPR_model');
		}
		
		//GET ACT NATURE
		public function getActivityNature(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityNature($this->input->post('actoff'));
			echo json_encode($res);
		}
		
		//GET ACT TYPE
		public function getActivityType(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityType($this->input->post('prooff'));
			echo json_encode($res);
		}

		
		//START OF FILING PREACTS PROCESS
		public function preacts(){
			$this->load->view('ORG_PreAct');
		}
		
		// REDIRECTION FOR CORRECT PAGE
		public function preacts2(){
			if ($this->input->post('yesno') == 'yes'){
				$this->session->set_userdata('withSAS', FALSE);
				redirect('preActivity/aformGOSM');
			}
			else if ($this->input->post('yesno') == 'no'){
				$this->session->set_userdata('withSAS', TRUE);
				redirect('preActivity/sasGOSM');
			}
		}


		//SAS --- AFORM Not in GOSM
		public function sasGOSM(){
			$this->form_validation->set_rules('actName', 'Activity Name', 'required',
				array('required' => 'You have not provided %s.')
			);
			
			$this->form_validation->set_rules('reason', 'Reason', 'required',
				array('required' => 'You have not provided %s.')
			);
			
			$this->form_validation->set_rules('submittedby', 'Submitted by', 'required',
				array('required' => 'You have not provided %s.')
			);
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_AFormSAS');
			}
			else{
				$sasinfo = array('submittedby' => $this->input->post('submittedby'),
									  'reason' => $this->input->post('reason'));
				
				$this->session->set_userdata('sasinfo', $sasinfo);
				$this->session->set_userdata('actName', $this->input->post('actName'));

				$res2 = $this->PreActivity_model->getActivityReach();
				$org  = $this->session->userdata('org')[0]['userID'];
				$res  = $this->Gosm_model->getAct($org);
				
				$data = array("activity" => $res, "reach" => $res2);

				$this->load->view('ORG_PreAct_AFormNotInGOSM', $data);
			}
		}
		
		//AFORM --- Not in GOSM
		public function aformNotInGOSM(){
			
			$this->form_validation->set_rules('natact', 'Nature of Activity', 'required',
				array('required' => 'You have not provided %s.')
			);
			$this->form_validation->set_rules('typeact', 'Type of Activity', 'required',
				array('required' => 'You have not provided %s.')
			);
			$this->form_validation->set_rules(
				'reachType', 'Reach of Activity', 'required',
				array('required' => 'You have not provided %s.')
			);
			//End AFORM Form Validation
			
			//If error
			if ($this->form_validation->run() == FALSE){
				$res2 = $this->PreActivity_model->getActivityReach();
				$org  = $this->session->userdata('org')[0]['userID'];
				$res  = $this->Gosm_model->getAct($org);
				
				$data = array("activity" => $res, "reach" => $res2);
				$this->load->view('ORG_PreAct_AFormNotInGOSM', $data);
			}
			//If success
			else{
				$aform1 = array( 'actName'   => $this->input->post('actName'),
								 'natact'    => $this->input->post('natact'),
								 'typeact'   => $this->input->post('typeact'),
								 'reachType' => $this->input->post('reachType'));
				$this->session->set_userdata('aform1', $aform1);
				$this->load->view('ORG_PreAct_AForm2');
			}
		}
		
		
		//AFORM --- Part of GOSM
		public function aformGOSM(){
			//Start AFORM Form Validation
			$this->form_validation->set_rules('actName', 'Activity Name', 'required',
				array('required' => 'You have not provided %s.')
			);
			$this->form_validation->set_rules('natact', 'Nature of Activity', 'required',
				array('required' => 'You have not provided %s')
			);
			$this->form_validation->set_rules('typeact', 'Type of Activity', 'required',
				array('required' => 'You have not provided %s.')
			);
			$this->form_validation->set_rules(
				'reachType', 'Reach of Activity','required',
				array('required' => 'You have not provided %s.')
			);
			//End AFORM Form Validation
			
			//If error
			if ($this->form_validation->run() == FALSE){
				
				$res2 = $this->PreActivity_model->getActivityReach();
				$org  = $this->session->userdata('org')[0]['userID'];
				$res  = $this->Gosm_model->getAct($org);//$org);
				$data = array("activity" => $res, "reach" => $res2);
				
				$this->load->view('ORG_PreAct_AFormGOSM', $data);
			}
			//If success
			else{
				$aform1 = array( 'actName'   => $this->input->post('actName'),
								 'natact'    => $this->input->post('natact'),
								 'typeact'   => $this->input->post('typeact'),
								 'reachType' => $this->input->post('reachType'));
				$this->session->set_userdata('aform1', $aform1);

				redirect('PreActivity/aformGOSM2');
			}
		}
		
		public function aformGOSM2(){
			//Start AFORM Form Validation
			$this->form_validation->set_rules('venue', 'Venue','required',
				array('required' => 'You have not provided %s.')
			);
			$this->form_validation->set_rules('enmp', 'Expected Number of Member Participants', 'required',
				array('required' => 'You have not provided %s.',)
			);
			$this->form_validation->set_rules('enp', 'Expected Number of Participants', 'required',
				array('required' => 'You have not provided %s.')
			);
			//End AFORM Form Validation
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_AForm2');
			}
			else{
				$aform2 = array('venue' => $this->input->post('venue'),
								'enmp'  => $this->input->post('enmp'),
								'enp'   => $this->input->post('enp'));
				
				$this->session->set_userdata('aform2', $aform2);
				
				$this->session->set_userdata('sDate', $this->input->post('sDate'));
				$this->session->set_userdata('s1Time', $this->input->post('s1Time'));
				$this->session->set_userdata('e1Time', $this->input->post('e1Time'));
				
				$this->session->set_userdata('drsDate', $this->input->post('drsDate'));
				$this->session->set_userdata('dreDate', $this->input->post('dreDate'));
				$this->session->set_userdata('s2Time', $this->input->post('s2Time'));
				$this->session->set_userdata('e2Time', $this->input->post('e2Time'));
				
				redirect('PreActivity/new_ppr');
			}
		}
		
		
		// PPR
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
				$pprGeneralInfo  = array('objective1' 	=> $this->input->post('obje1'),
										 'objective2' 	=> $this->input->post('obje2'),
										 'objective3' 	=> $this->input->post('obje3'),
										 'description1' => $this->input->post('desc1'),
										 'description2' => $this->input->post('desc2'),
										 'description3' => $this->input->post('desc3'),
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

				redirect('preActivity/new_ppr_program_design');
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);
				// }

				redirect('preActivity/new_ppr_expense_breakdown');
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);
				// }
				redirect('preActivity/new_ppr_funding_details');
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
				// 	$this->PPR_model->addOtherFunds($ppr, $this->session->userdata['pprOtherSource']);
				// 	$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);

				// }
				redirect('preActivity/new_ppr_projected_income');
			}
		}	

		// REVISED AND TESTED
		// EDITED UI FOR VALIDATION AND ROW ADDING
		public function new_ppr_projected_income() {
			$filePreacts = FALSE;
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
				$filePreacts = TRUE;
				// FOR TESTING PURPOSES
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
				// 	$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);

				// }
			}

			if ($filePreacts) {
				//ACTIVITY NOT IN GOSM
				if ($this->session->userdata('withSAS')){
					$org  = $this->session->userdata('org')[0]['userID'];
					$this->PreActivity_model->createPreacts($org);//$this->session->userdata('orgID')); //SESSION VARIABLE NG ORG ID
					$getPreactsID = $this->PreActivity_model->getPreacts();

					foreach ($getPreactsID as $preacts){
						$this->PreActivity_model->createSASForm($preacts, 4, $this->session->userdata('sasinfo'));

						$getSASID = $this->PreActivity_model->getSASID();

						foreach($getSASID as $sas) {
							$this->PreActivity_model->insertAformNotInGOSM($preacts, $sas, $this->session->userdata('aform1'), $this->session->userdata('aform2'));
						}

						$this->PPR_model->createNewPPR($preacts, $this->session->userdata('pprGeneralInfo'));
						$PPRNum = $this->PPR_model->getPPR($preacts);
						foreach ($PPRNum as $ppr) {
							//PPR 1
							$this->PPR_model->addProjectHeads($ppr, $this->session->userdata['pprProjectHeads']);

							//PPR 2
							$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);

							//PPR 3
							$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);

							//PPR 4
							$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
							$getFundsNum = $this->PPR_model->getFundsNum($ppr);
							foreach ($getFundsNum as $fundsNum) {
								$this->PPR_model->addOtherFunds($fundsNum, $this->session->userdata['pprOtherSource']);
							}
							$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);
							
							//PPR 5
							$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
							$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);
						}
						
						
					}
				}

				//ACTIVITY IN GOSM
				else {
					$org  = $this->session->userdata('org')[0]['userID'];
					$this->PreActivity_model->createPreacts($org);//$this->session->userdata('orgID')); //SESSION VARIABLE NG ORG ID
					$getPreactsID = $this->PreActivity_model->getPreacts();
					foreach ($getPreactsID as $preacts){
						
						$title = $this->Gosm_model->getActTitle($this->session->userdata('aform1')['actName']);
						var_dump ($title);
						// TESTED AND ADDING
						$this->PreActivity_model->insertAFormGOSM($preacts, $title[0]['title'], $this->session->userdata('aform1'), $this->session->userdata('aform2'));

						// TESTED AND ADDING
						$this->PPR_model->createNewPPR($preacts, $this->session->userdata('pprGeneralInfo'));
						$PPRNum = $this->PPR_model->getPPR($preacts);
						foreach ($PPRNum as $ppr) {
							//PPR 1
							$this->PPR_model->addProjectHeads($ppr, $this->session->userdata['pprProjectHeads']);

							//PPR 2
							$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);

							//PPR 3
							$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);

							//PPR 4
							$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
							$getFundsNum = $this->PPR_model->getFundsNum($ppr);
							foreach ($getFundsNum as $fundsNum) {
								$this->PPR_model->addOtherFunds($fundsNum, $this->session->userdata['pprOtherSource']);
							}
							$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);
							
							//PPR 5
							$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
							$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);
						}
					}
				}
				
				$aformID = $this->PreActivity_model->getAformLatest();
						
				for ($i = 0; $i < count($this->session->userdata('sDate')); $i++){
					$this->PreActivity_model->insertAformDateTimeSingle(
						$aformID['aformID'], $this->session->userdata('sDate')[$i], 
						$this->session->userdata('s1Time')[$i],$this->session->userdata('e1Time')[$i]
					);
				}
						
				for ($i = 0; $i < count($this->session->userdata('drsDate')); $i++){
					$this->PreActivity_model->insertAformDateTimeRange(
						$aformID['aformID'], $this->session->userdata('drsDate')[$i], 
						$this->session->userdata('dreDate')[$i],
						$this->session->userdata('s2Time')[$i], $this->session->userdata('e2Time')[$i]
					);
				}
				
			}
		}
		//END OF FILING PREACTS PROCESS

		
		public function sas(){
			$this->form_validation->set_rules('submissionType', 'submissionType', 'required');
			$this->form_validation->set_rules('reason', 'reason', 'required');
			$this->form_validation->set_rules('name', 'name', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$preacts = $this->session->userdata("actno");
				$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
				$data = array('preactinfo' => $preactinfo);
				$this->load->view('ORG_PreAct_SpecialApprovalSlip', $data);
				echo 'error';
			}
			else {
				$preacts = $this->session->userdata("actno");
				$sas = array(
					'submissionType' => $this->input->post('submissionType'),
					'submittedby' => $this->input->post('name'),
					'reason' => $this->input->post('reason')
				);
				
				$this->session->set_userdata('sas', $sas);
				
				if ($this->input->post('submissionType') == 3){
					redirect('PreActivity/changActDetailsCancel');
				}
				if ($this->input->post('submissionType') == 2){
					redirect('PreActivity/changActDetails');
				}
				if ($this->input->post('submissionType') == 6){
					$this->PreActivity_model->createSASForm($preacts, 6, $this->session->userdata('sas'));

						//$getSASID = $this->PreActivity_model->getSASID();
					echo 'Success lost a form';
				}
			}
		}
		
		public function changActDetailsCancel(){
			$this->form_validation->set_rules('reason', 'Reason', 'required');
			if ($this->form_validation->run() == FALSE){
				echo 'error';
				$preacts = $this->session->userdata("actno");
				$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
				$aformID = $this->PreActivity_model->getAformID($preacts);
				$datetime = $this->PreActivity_model->getAformDate($aformID[0]['aformID']);
				$data = array('preactinfo' => $preactinfo, 'datetime' => $datetime);
				$this->load->view('ORG_PreAct_ApprovalChangeActDetails_Cancel', $data);
				
			}
			else{
				echo 'success cad cancel';
				$preacts = $this->session->userdata("actno");
				$this->PreActivity_model->createSASForm($preacts, 3, $this->session->userdata('sas'));
				$getSASID = $this->PreActivity_model->getSASID();
				
				$cancellation = 1;
				$this->PreActivity_model->insertChangeAct($cancellation, $this->input->post('reason'), $this->input->post('requestName'), $getSASID['sasID']);
				
				
				$preacts = $this->session->userdata("actno");
				$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
				$aformID = $this->PreActivity_model->getAformID($preacts);
				$datetime = $this->PreActivity_model->getAformDate($aformID[0]['aformID']);
				$data = array('preactinfo' => $preactinfo, 'datetime' => $datetime);
				$this->load->view('ORG_PreAct_ApprovalChangeActDetails_Cancel', $data);
			}
		}
		
		public function changActDetails(){
			$this->form_validation->set_rules('reason', 'Reason', 'required');
			if ($this->form_validation->run() == FALSE){
				echo 'error';
				$preacts = $this->session->userdata("actno");
				$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
				$aformID = $this->PreActivity_model->getAformID($preacts);
				$datetime = $this->PreActivity_model->getAformDate($aformID[0]['aformID']);
				$data = array('preactinfo' => $preactinfo, 'datetime' => $datetime);
				$this->load->view('ORG_PreAct_ApprovalChangeActDetails', $data);
				
			}
			else{
				
				if ($this->input->post('changes') == 3){
					$caddtls = array('reason' =>  $this->input->post('reason'), 'requestName' => $this->input->post('requestName'));
					$this->session->set_userdata("caddtls", $caddtls);
					redirect('Preactivity/ComDes');
				}
				else{
					echo 'success cad';
					$preacts = $this->session->userdata("actno");
					$this->PreActivity_model->createSASForm($preacts, 2, $this->session->userdata('sas'));
					$getSASID = $this->PreActivity_model->getSASID();
					
					$cancellation = 0;
					$this->PreActivity_model->insertChangeAct($cancellation, $this->input->post('reason'), $this->input->post('requestName'), $getSASID['sasID']);
					
					$cadID = $this->PreActivity_model->getCAD();
					
					
					
					for ($i = 0; $i < count($this->input->post('sDate')); $i++){
						$this->PreActivity_model->insertAformDateTimeSingleCAD(
							$cadID[0]['activitydetailschangesID'], $this->input->post('sDate')[$i], 
							$this->input->post('s1Time')[$i],$this->input->post('e1Time')[$i]
						);
					}
							
					for ($i = 0; $i < count($this->input->post('drsDate')); $i++){
						$this->PreActivity_model->insertAformDateTimeRangeCAD(
							$cadID[0]['activitydetailschangesID'], $this->input->post('drsDate')[$i], 
							$this->input->post('dreDate')[$i],
							$this->input->post('s2Time')[$i], $this->input->post('e2Time')[$i]
						);
					}
					
					if ($this->input->post('newvenue')){
						$this->PreActivity_model->insertVenueCAD($this->input->post('newvenue'),$cadID[0]['activitydetailschangesID']);
						echo $this->input->post('newvenue');
					}
					
					$preacts = $this->session->userdata("actno");
					$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
					$aformID = $this->PreActivity_model->getAformID($preacts);
					$datetime = $this->PreActivity_model->getAformDate($aformID[0]['aformID']);
					$data = array('preactinfo' => $preactinfo, 'datetime' => $datetime);
					$this->load->view('ORG_PreAct_ApprovalChangeActDetails', $data);
				}
			}
			
		}
		
		public function ComDes(){
			$this->form_validation->set_rules('time[]', 'time', 'required');
			if ($this->form_validation->run() == FALSE){
				echo('error');
				$this->load->view('ORG_PreAct_ApprovalChangeActDetails_ComDes');
			}
			else{
				echo 'success cad comdes';
				$preacts = $this->session->userdata("actno");
				$this->PreActivity_model->createSASForm($preacts, 2, $this->session->userdata('sas'));
				$getSASID = $this->PreActivity_model->getSASID();
				
				$cancellation = 0;
				$this->PreActivity_model->insertChangeAct($cancellation, $this->session->userdata('caddtls')['reason'], $this->session->userdata('caddtls')['requestName'], $getSASID['sasID']);
				
				$cadID = $this->PreActivity_model->getCAD();

				for ($i = 0; $i < count($this->input->post('time')); $i++){
					$this->PreActivity_model->insertComDesCAD($cadID[0]['activitydetailschangesID'],$this->input->post('time')[$i], 
					$this->input->post('stime')[$i], $this->input->post('aname')[$i], 
					$this->input->post('ades')[$i], $this->input->post('apic')[$i]);
				}
				
			}
		}


		//OTHER REQ
		public function otherreq(){
			$org  = $this->session->userdata('org')[0]['userID'];
			$res  = $this->Activity_model->getAct($org);
				
			$data = array("activity" => $res);
			$this->load->view('ORG_FillOutOtherReq', $data);
		}
		
		public function otherreq2(){
			$act  = $this->session->set_userdata('act', $this->input->post('gosmactivityorg'));
			
			if ($this->input->post('otherreq') == 1){
				redirect('PreActivity/listOfParticipants');
			}
		}
		
		public function changeActDetails(){
			$this->load->view('ORG_FillOutOtherReq');
		}
		
		public function listOfParticipants(){
			echo $this->session->userdata('act');
			$this->form_validation->set_rules('id[]', 'Expected Number of Participants', 'required',
				array('required' => 'You have not provided %s.')
			);
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_ListOfParticipants');
			}
			
			else{
				//PREACTSID
				$actno = $this->session->userdata("actno");
				$this->PreActivity_model->loppk($actno);
				
				$lopid = $this->PreActivity_model->lopid()[0]['listofparticipantsID'];
				
				echo $this->input->post('choice')[0];
				
				for ($i = 0; $i < count($this->input->post('id')); $i++){
					if ($this->input->post('choice')[$i] == NULL){
						$waiver = 0;
					}
					else{
						$waiver = 1;
					}
					
					$this->PreActivity_model->insertLOP(
						$this->input->post('id')[$i],$this->input->post('lName')[$i],
						$this->input->post('fName')[$i],$this->input->post('mName')[$i],
						$this->input->post('age')[$i],$lopid, $waiver
					);
				}
				
				
				$data = array ("success" => "true");
				$this->load->view('ORG_PreAct_ListOfParticipants', $data);
			}
		}
		
		
		
	}
?>