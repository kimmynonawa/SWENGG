<?php
	class PreActivity extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('Org_model');
			$this->load->model('PreActivity_model');
			$this->load->model('PPR_model');
			$this->load->model('Gosm_model');

		}
		
		public function getPreacts(){
			header("Content-type: application/json");
			$res = $this->ViewPreActs_model->getPreacts(2);
			echo json_encode($res);
		}
		
		//GET ACT NATURE
		// This serves as a function for populating a dropdown field of types of activity nature
		// @return a json array of activity nature types stored in the database
		public function getActivityNature(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityNature($this->input->post('actoff'));
			echo json_encode($res);
		}
		
		//GET ACT TYPE
		// This serves as a function for populating a dropdown field of activity types
		// @return a json array of activity nature types stored in the database
		public function getActivityType(){
			header("Content-type: application/json");
			$res = $this->PreActivity_model->getActivityType($this->input->post('prooff'));
			echo json_encode($res);
		}

		
		//START OF FILING PREACTS PROCESS
		// This serves as a function for loading and validating the page to start filling out main requirements (AForm, PPR, SAS)
		public function preacts(){
			$this->load->view('ORG_PreAct');
		}
		
		// REDIRECTION FOR CORRECT PAGE
		// This serves as a function for redirecting the user to the proper form to fill out first
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
		// This serves as a function for loading and validating the SAS Form for the filing of an activity no in the GOSM
		// The user will be redirected to this function if the user chooses to file a PreActivity not part of the GOSM
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the AForm if the form validation returns TRUE
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
									  'reason' => $this->input->post('reason'),
									 'actName' => $this->input->post('actName'));
				
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
		// This serves as a function for loading and validating the AForm for the filing of an activity not in the GOSM
		// The user will be redirected to this function after filling out the SAS form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the second page of the AForm if the form validation returns TRUE
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
		// This serves as a function for loading and validating the AForm for the filing of an activity in the GOSM
		// The user will be redirected to this function if the user chooses to file a PreActivity that is part of the GOSM
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the second page of the AForm if the form validation returns TRUE
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
				$res4 = $this->PreActivity_model->getActivityType();
				$res3 = $this->PreActivity_model->getActivityNature();
				$res2 = $this->PreActivity_model->getActivityReach();
				$org  = $this->session->userdata('org')[0]['userID'];
				$res  = $this->Gosm_model->getAct($org);//$org);
				$data = array("activity" => $res, "reach" => $res2, 'actnat' => $res3, 'acttype' => $res4);
				
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
		
		//AFORM PAGE 2
		// This serves as a function for loading and validating the second page of the AForm for the filing of activities
		// The user will be redirected to this function once the user fills out the first page of the AForm
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the first page of the PPR if the form validation returns TRUE
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
		
		
		// PPR PAGE 1
		// This serves as a function for loading and validating the first page of the PPR for the filing of activities
		// The user will be redirected to this function once the user fills out the second page of the AForm
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the second page of the PPR if the form validation returns TRUE
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

		// PPR PAGE 2 -- PROGRAM DESIGN
		// This serves as a function for loading and validating the second page of the PPR for the filing of activities
		// The user will be redirected to this function once the user fills out the first page of the PPR
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the third page of the PPR if the form validation returns TRUE
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

		// PPR PAGE 3 -- EXPENSE BREAKDOWN
		// This serves as a function for loading and validating the third page of the PPR for the filing of activities
		// The user will be redirected to this function once the user fills out the second page of the PPR
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the fourth page of the PPR if the form validation returns TRUE
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

		// PPR PAGE 4 -- FUNDING DETAILS
		// This serves as a function for loading and validating the fourth page of the PPR for the filing of activities
		// The user will be redirected to this function once the user fills out the third page of the PPR
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page containing the fifth page of the PPR if the form validation returns TRUE
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

		// PPR PAGE 5 -- PROGRAM DESIGN
		// This serves as a function for loading and validating the fifth page of the PPR for the filing of activities
		// The user will be redirected to this function once the user fills out the fourth page of the PPR
		// This function marks the end of the filing of preacts process
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user that the 
		// 		   creation of the AForm, PPR, and/or SAS was successful if the form validation returns TRUE
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
					$preacts = $this->PreActivity_model->getPreactsLatest()['preactsID'];

					$this->PreActivity_model->createSASForm($preacts, 4, $this->session->userdata('sasinfo'));
					
					$sas = $this->PreActivity_model->getSASID()['sasID'];
					var_dump($this->session->userdata('sasinfo'));
					
					$this->PreActivity_model->insertAformNotInGOSM($preacts, $sas,$this->session->userdata('sasinfo')['actName'],  $this->session->userdata('aform1'), $this->session->userdata('aform2'));

					$this->PPR_model->createNewPPR($preacts, $this->session->userdata('pprGeneralInfo'));
					$ppr = $this->PPR_model->getPPR($preacts)['pprID'];
					
					
					$this->PPR_model->addProjectHeads($ppr, $this->session->userdata['pprProjectHeads']);
					//PPR 2
					$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);

					//PPR 3
					$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);

					//PPR 4
					$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
					$getFundsNum = $this->PPR_model->getFundsNum($ppr)['ppr_fundsID'];
					$this->PPR_model->addOtherFunds($getFundsNum, $this->session->userdata['pprOtherSource']);
							
					$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);
							
					//PPR 5
					$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
					$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);
							
							
					
				}

				//ACTIVITY IN GOSM
				else {
					$org  = $this->session->userdata('org')[0]['userID'];
					$this->PreActivity_model->createPreacts($org);//$this->session->userdata('orgID')); //SESSION VARIABLE NG ORG ID
					$preacts = $this->PreActivity_model->getPreactsLatest()['preactsID'];

					$title = $this->Gosm_model->getActTitle($this->session->userdata('aform1')['actName']);
					
					
					$this->PreActivity_model->insertAFormGOSM($preacts, $title[0]['title'], $this->session->userdata('aform1'), $this->session->userdata('aform2'));
					
					$this->PPR_model->createNewPPR($preacts, $this->session->userdata('pprGeneralInfo'));
					$ppr = $this->PPR_model->getPPR($preacts)['pprID'];
					
					
					$this->PPR_model->addProjectHeads($ppr, $this->session->userdata['pprProjectHeads']);
					//PPR 2
					$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);

					//PPR 3
					$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);

					//PPR 4
					$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
					$getFundsNum = $this->PPR_model->getFundsNum($ppr)['ppr_fundsID'];
					$this->PPR_model->addOtherFunds($getFundsNum, $this->session->userdata['pprOtherSource']);
							
					$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);
							
					//PPR 5
					$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
					$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);
				}
				
				
				$aformID = $this->PreActivity_model->getAformLatest();
				var_dump($aformID);
				var_dump($this->session->userdata('sDate'));
				var_dump($this->session->userdata('drsDate'));
				
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

		
		// SPECIAL APPROVAL SLIP FOR ACTIVITY DETAILS CHANGE
		// This serves as a function for loading and validating the special approval slip for the change of activity details
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page that contains the form to cancel an activity if the form validation returns TRUE
		// @return this function will load the page that contains the form to change an activity's details if the form validation returns TRUE
		public function special_approval_slip(){
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
					redirect('PreActivity/cancel_activity');
				}
				if ($this->input->post('submissionType') == 2){
					redirect('PreActivity/change_act_details');
				}
				if ($this->input->post('submissionType') == 6){
					$this->PreActivity_model->createSASForm($preacts, 6, $this->session->userdata('sas'));

						//$getSASID = $this->PreActivity_model->getSASID();
					echo 'Success lost a form';
				}
			}
		}
		
		// SPECIAL APPROVAL SLIP -- ACTIVITY CANCELLATION
		// This serves as a function for loading and validating the special approval slip for the cancellation of an activity
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the activity's cancellation if the form validation returns TRUE
		public function cancel_activity(){
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
		
		// SPECIAL APPROVAL SLIP -- ACTIVITY DETAILS CHANGE
		// This serves as a function for loading and validating the special approval slip for the changing of activity details
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the activity's change of details if the form validation returns TRUE
		public function change_act_details(){
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
					redirect('Preactivity/change_program_design');
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
		
		// SPECIAL APPROVAL SLIP -- PROGRAM DESIGN CHANGE
		// This serves as a function for loading and validating the special approval slip for the changing of an activity's program design
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the activity's change of program design if the form validation returns TRUE
		public function change_program_design(){
			$this->form_validation->set_rules('time[]', 'time', 'required');
			if ($this->form_validation->run() == FALSE){
				echo('error');
				$this->load->view('ORG_PreAct_ApprovalChangeActDetails.php');
			}
			else{
				echo 'success cad change_program_design';
				$preacts = $this->session->userdata("actno");
				$this->PreActivity_model->createSASForm($preacts, 2, $this->session->userdata('sas'));
				$getSASID = $this->PreActivity_model->getSASID();
				
				$cancellation = 0;
				$this->PreActivity_model->insertChangeAct($cancellation, $this->session->userdata('caddtls')['reason'], $this->session->userdata('caddtls')['requestName'], $getSASID['sasID']);
				
				$cadID = $this->PreActivity_model->getCAD();

				for ($i = 0; $i < count($this->input->post('time')); $i++){
					$this->PreActivity_model->insertchange_program_designCAD($cadID[0]['activitydetailschangesID'],$this->input->post('time')[$i], 
					$this->input->post('stime')[$i], $this->input->post('aname')[$i], 
					$this->input->post('ades')[$i], $this->input->post('apic')[$i]);
				}
				
			}
		}



		// START OTHER REQUIREMENTS

		// This serves as a function for loading and validating the page that will allow the user to choose a requirement to fill out
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load the page that contains the form of the user's corresponding choice 
		public function other_requirements(){
			//$org=1;
			$org = $this->session->userdata('org')[0]['userID'];
			$this->form_validation->set_rules('act', 'act', 'required');
			$this->form_validation->set_rules('req', 'req', 'required');

			
			if ($this->form_validation->run() == FALSE)
			{
				$groups = $this->PreActivity_model->getPreacts($org);
				$data = array('groups' => $groups);
				$this->load->view('ORG_FillOutOtherReq',$data);
			}
			else  
			{
				$req 	= $this->input->post('req');
				$act 	= $this->input->post('act');
				
				$this->session->set_userdata("actno", $act);
				
				$actno = $this->session->userdata("actno");
				
				if($req==1) //List of Participants
				{
					redirect('PreActivity/list_of_participants');
				}
				
				else if($req==2) //Sas
				{
					redirect('PreActivity/sas');
				}
				
				else if($req==3) //SPCA
				{
					redirect('PreActivity_controller/spca1');
				}
				
				else if($req==4) //Trademark Use
				{
					redirect('PreActivity/new_approval_use_trademark');
				}
				
				else if($req==5) //Contest Mechanics
				{
					redirect('PreActivity/new_contest_mechanics');
				}
				
				else if($req==6) //Food Permit
				{
					redirect('PreActivity/new_food_permit');
				}
				
				else if($req==7) //Minor Publication Proposal
				{
					redirect('PreActivity_controller/minorpub_form');
				}
			}
		}

		// LIST OF PARTICIPANTS
		// This serves as a function for loading and validating the page that contains the list of participants form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the list of participants form if the form validation returns TRUE
		public function list_of_participants(){
			
			$this->form_validation->set_rules('id[]', 'Expected Number of Participants', 'required',
				array('required' => 'You have not provided %s.')
			);
			
			if ($this->form_validation->run() == FALSE){
				var_dump ($this->session->userdata('actno'));
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

		// FOOD PERMIT PAGE ONE -- REQUESTER INFO
		// This serves as a function for loading and validating the page that contains the first page of the food entry permit request form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the second page of the food permit form if validation returns TRUE
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
					'preactsID' 	=> $this->session->userdata('preactsID'),
					'name' 			=> $this->input->post('Name'),
					'IDnum' 		=> $this->input->post('IDNum'),
					'email' 		=> $this->input->post('Email'),
					'telephone'		=> $this->input->post('TelNo'),
					'mobile' 		=> $this->input->post('CPNo'),
					'position' 		=> $this->input->post('Position'),
				);

				$this->session->set_userdata('foodPermitGeneralInfo', $data);
				redirect('PreActivity/food_permit_details');
			}
		}

		// FOOD PERMIT PAGE TWO -- FOOD ENTRY INFO 
		// This serves as a function for loading and validating the page that contains the second page of the food entry permit request form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the food permit if validation returns TRUE
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
				$this->PreActivity_model->createFoodPermit($this->session->userdata('foodPermitGeneralInfo'));
				$foodPermit = $this->PreActivity_model->getFoodPermit($this->session->userdata('preactsID'));
				foreach ($foodPermit as $permit) {
					$this->PreActivity_model->createFoodPermitDetails($permit,$data);
				}
			}
		}

		// CONTEST MECHANICS
		// This serves as a function for loading and validating the page that contains the contest mechanics form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the contest mechanics if validation returns TRUE
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
				$generalInfo = array('preactsID'   => $this->session->userdata('preactsID'), 
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
				$this->PreActivity_model->newContestMecHanics($this->session->userdata('contestMechanicsGeneralInfo'));
				$contestMechanicsNumber = $this->PreActivity_model->getContestMechanicsNumber($this->session->userdata('preactsID'));
				foreach ($contestMechanicsNumber as $contestMechanics) {
					$this->PreActivity_model->addContestMechanicsDetails($contestMechanics,$this->session->userdata('contestMechanicsMechanics'));
					$this->PreActivity_model->addContestMechanicsCriteria($contestMechanics,$this->session->userdata('contestMechanicsCriteria'));
					$this->PreActivity_model->addContestMechanicsJudges($contestMechanics,$this->session->userdata('contestMechanicsJudges'));
					if ($this->session->userdata('contestMechanicsQuestions')) {
						$this->PreActivity_model->addContestMechanicsQuestions($contestMechanics,$this->session->userdata('contestMechanicsQuestions'));
					}
				}	

			}
		}

		// APPROVAL USE TRADEMARK PAGE ONE -- REQUESTER INFO
		// This serves as a function for loading and validating the page that contains the first page of the approval use trademark request form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the second page of the approval use trademark form if validation returns TRUE
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
				redirect('PreActivity/approval_use_trademark_details');
			}
		}

		// APPROVAL USE TRADEMARK PAGE TWO -- TRADEMARK USE INFO
		// This serves as a function for loading and validating the page that contains the second page of the approval use trademark request form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the approval use trademark permit if validation returns TRUE
		public function approval_use_trademark_details() {
			$this->form_validation->set_rules('matToProduce', 'Type of Item/Material To Produce', 'required');
			$this->form_validation->set_rules('trademarkUse', 'Purpose Of Use', 'required');
			$this->form_validation->set_rules('startDate', 'Proposed Start Date', 'required');
			$this->form_validation->set_rules('endDate', 'Proposed End Date', 'required');
			// $this->form_validation->set_rules('actType', 'Activity Where Trademark Will Be Used', 'required');
			$this->form_validation->set_rules('venue', 'Venue', 'required');

			if ($this->form_validation->run() == FALSE){
				$list['activityTypes'] = $this->PreActivity_model->getActivityTypes();
				$list['trademarkList'] = $this->PreActivity_model->getTrademarks(1);
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
					'preactsID'		=> $this->session->userdata('preactsID'),
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
				$this->PreActivity_model->createTrademarkUseApproval($this->session->userdata('trademarkUseInfo'));
				$getTrademarkApproval = $this->PreActivity_model->getTrademarkUseApproval(1);//$this->session->userdata('preactsID'));
				foreach ($getTrademarkApproval as $trademarkUseNum) {
					$this->PreActivity_model->createTrademarkUseRequestInfo($trademarkUseNum,$this->session->userdata('trademarkRequestInfo'));
					$this->PreActivity_model->addTrademarkToUse($trademarkUseNum, $this->session->userdata('trademarksToUse'));
				}
			} 
		}

		// MINOR PUBLICATION PAGE 1
		// This serves as a function for loading and validating the page that contains the first page of the minor publication form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the second page of the minor publication form if validation returns TRUE
		public function minorpub_form(){
			$this->form_validation->set_rules('pubname', 'pubname', 'required');
			$this->form_validation->set_rules('pubtype', 'pubtype', 'required');
			$this->form_validation->set_rules('pubfreq', 'pubfreq', 'required');
			$this->form_validation->set_rules('pubcost', 'pubcost', 'required');
			$this->form_validation->set_rules('tdate', 'tdate', 'required');
			$this->form_validation->set_rules('obj1', 'obj1', 'required');
			$this->form_validation->set_rules('obj2', 'obj2', 'required');
			$this->form_validation->set_rules('obj3', 'obj3', 'required');
			$this->form_validation->set_rules('cont1', 'cont1', 'required');
			$this->form_validation->set_rules('cont2', 'cont2', 'required');
			$this->form_validation->set_rules('cont3', 'cont3', 'required');
			$this->form_validation->set_rules('tread1', 'tread1', 'required');
			$this->form_validation->set_rules('tread2', 'tread2', 'required');
			$this->form_validation->set_rules('tread3', 'tread3', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_MinorPublicationProposal');
			}
			else  {
				
				$pubname 	= $this->input->post('pubname');
				$pubtype 	= $this->input->post('pubtype');
				$pubfreq 	= $this->input->post('pubfreq');
				$pubcost 	= $this->input->post('pubcost');
				$pubdate 	= $this->input->post('tdate');
				
				$obj1 	= $this->input->post('obj1');
				$obj2 	= $this->input->post('obj2');
				$obj3 	= $this->input->post('obj3');
				
				$cont1 	= $this->input->post('cont1');
				$cont2 	= $this->input->post('cont2');
				$cont3 	= $this->input->post('cont3');
				
				$tread1 	= $this->input->post('tread1');
				$tread2 	= $this->input->post('tread2');
				$tread3 	= $this->input->post('tread3');

				$actno = $this->session->userdata("actno");

				if ($this->PreActivity_model->minorpub($actno, $pubname, $pubtype, $pubfreq, $pubcost, $pubdate, $obj1, $obj2, $obj3, $cont1, $cont2, $cont3, $tread1, $tread2, $tread3)) redirect('p_forms_controller/minorpub_form2');
				else echo "Error";
			}
		}

		// MINOR PUBLICATION PAGE TWO
		// This serves as a function for loading and validating the page that contains the second page of the minor publication form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the minor publication form if validation returns TRUE
		public function minorpub_form2(){	
			$this->form_validation->set_rules('npages', 'npages', 'required');
			$this->form_validation->set_rules('bm1', 'bm1', 'required');
			$this->form_validation->set_rules('ssize', 'ssize', 'required');
			$this->form_validation->set_rules('bm2', 'bm2', 'required');
			$this->form_validation->set_rules('ptype', 'ptype', 'required');
			$this->form_validation->set_rules('bm3', 'bm3', 'required');
			$this->form_validation->set_rules('ncolor', 'ncolor', 'required');
			$this->form_validation->set_rules('bm4', 'bm4', 'required');
			$this->form_validation->set_rules('ncopies', 'ncopies', 'required');
			$this->form_validation->set_rules('bm5', 'bm5', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_MinorPublicationProposal2');
			}
			else  {
				
				$npages = $this->input->post('npages');
				$bm1 	= $this->input->post('bm1');
				
				$ssize 	= $this->input->post('ssize');
				$bm2 	= $this->input->post('bm2');
				
				$ptype 	= $this->input->post('ptype');
				$bm3	= $this->input->post('bm3');
				
				$ncolor 	= $this->input->post('ncolor');
				$bm4	= $this->input->post('bm4');
				
				$ncopies 	= $this->input->post('ncopies');
				$bm5 	= $this->input->post('bm5');

				$actno = $this->session->userdata("actno");

				$minorpubID=$this->PreActivity_model->getMinorPub($actno);
				
				foreach ($minorpubID as $pubID) 
				{
					if ($this->PreActivity_model->minorpub2($pubID, $npages, $bm1, $ssize, $bm2, $ptype, $bm3, $ncolor, $bm4, $ncopies, $bm5, $actno)) echo "Minor Pub done";
					else echo "Error";
				}
			}
		}

		// CAMPUS ACCESS PAGE ONE
		// This serves as a function for loading and validating the page that contains the first page of the campus access form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the second page of the campus form if validation returns TRUE
		public function spca1(){
			$this->form_validation->set_rules('actTitle', 'actTitle', 'required');
			$this->form_validation->set_rules('numPersons', 'numPersons', 'required');
			$this->form_validation->set_rules('outsidersOption', 'outsidersOption', 'required');
			$this->form_validation->set_rules('Faculty', 'Faculty', 'required');
			
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('IDNum', 'IDNum', 'required');
			$this->form_validation->set_rules('officeLoc', 'officeLoc', 'required');
			$this->form_validation->set_rules('CPNo', 'CPNo', 'required');
			$this->form_validation->set_rules('TelNo', 'TelNo', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
			}
			else  {
				
				$actTitle = $this->input->post('actTitle');
				$numPersons	= $this->input->post('numPersons');
				$outsidersOption	= $this->input->post('outsidersOption');
				$Faculty	= $this->input->post('Faculty');
				
				$Name = $this->input->post('Name');
				$IDNum	= $this->input->post('IDNum');
				$officeLoc	= $this->input->post('officeLoc');
				$CPNo	= $this->input->post('CPNo');
				$TelNo	= $this->input->post('TelNo');
				$Email	= $this->input->post('Email');
				
				$actno = $this->session->userdata("actno");

				if ($this->PreActivity_model->spca1($actno, $actTitle, $numPersons, $Faculty, $Name, $IDNum, $officeLoc, $CPNo, $TelNo, $Email)) redirect('p_forms_controller/spca2');
				else echo "Error";
			}
		}

		// CAMPUS ACCESS PAGE TWO
		// This serves as a function for loading and validating the page that contains the second page of the campus access form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will redirect the user to the third page of the campus form if validation returns TRUE
		public function spca2(){
			$this->form_validation->set_rules('lName[]', 'lName', 'required');
			$this->form_validation->set_rules('fName[]', 'fName', 'required');
			$this->form_validation->set_rules('mName[]', 'mName', 'required');
			$this->form_validation->set_rules('classification[]', 'classification', 'required');
			$this->form_validation->set_rules('email[]', 'email', 'required');
			$this->form_validation->set_rules('mNum[]', 'mNum', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess2');
			}
			else  {
				$lName 			= $this->input->post('lName');
				$fName 			= $this->input->post('fName');
				$mName 	= $this->input->post('mName');
				$classification 			= $this->input->post('classification');
				$email 			= $this->input->post('email');
				$mNum 			= $this->input->post('mNum');
				
				$actno = $this->session->userdata("actno");

				$SPCAno=$this->PreActivity_model->getSPCA($actno);
				$error = FALSE;

				foreach ($SPCAno as $SPCAnum) {
					for ($i = 0; $i < sizeof($lName); $i++) {
						if (!$this->PreActivity_model->spca2($SPCAnum, $lName[$i], $fName[$i], $mName[$i], $classification[$i], $email[$i], $mNum[$i])) $error=TRUE;
					}
				}

				if (!$error) {
					foreach ($SPCAno as $SPCAnum) {
						$SPCApersons = $this->PreActivity_model->getSPCApersons($SPCAnum);
						echo "SPCA No.: ".$SPCAnum."<br>";

						foreach ($SPCApersons as $details) {
							echo "Last Name: ".$details['lastname']."<br>";
							echo "First Name: ".$details['firstname']."<br>";
							echo "Middle Name: ".$details['middle']."<br>";
							echo "Classification: ".$details['classification']."<br>";
							echo "Mobile: ".$details['mobile']."<br>";
							echo "E-mail: ".$details['email']."<br>";
						}
					}
					
					redirect('p_forms_controller/spca3');
				}
				else echo "no";
			}
		}

		// CAMPUS ACCESS PAGE THREE
		// This serves as a function for loading and validating the page that contains the third page of the campus access pass form
		// @return this function will load the page again if the form validation returns FALSE
		// @return this function will load a page that will inform the user of the success in the creation of the campus access pass if validatio returns TRUE
		public function spca3(){
			$this->form_validation->set_rules('sdate[]', 'sdate', 'required');
			$this->form_validation->set_rules('stime[]', 'stime', 'required');
			$this->form_validation->set_rules('edate[]', 'edate', 'required');
			$this->form_validation->set_rules('etime[]', 'etime', 'required');
			$this->form_validation->set_rules('venue[]', 'venue', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3');
			}
			else  {
				$sdate 			= $this->input->post('sdate');
				$stime 			= $this->input->post('stime');
				$edate 	= $this->input->post('edate');
				$etime 			= $this->input->post('etime');
				$venue 			= $this->input->post('venue');
				
				$actno = $this->session->userdata("actno");

				$SPCAno=$this->PreActivity_model->getSPCA($actno);
				$error = FALSE;

				foreach ($SPCAno as $SPCAnum) {
					for ($i = 0; $i < sizeof($sdate); $i++) {
						if (!$this->PreActivity_model->spca3($SPCAnum, $sdate[$i], $stime[$i], $edate[$i], $etime[$i], $venue[$i])) $error=TRUE;
					}
				}

				if (!$error) {
					foreach ($SPCAno as $SPCAnum) {
						$SPCAactivity = $this->PreActivity_model->getSPCAactivity($SPCAnum);
						echo "SPCA No.: ".$SPCAnum."<br>";

						foreach ($SPCAactivity as $details) {
							echo "Start Date: ".$details['startdate']."<br>";
							echo "Start Time: ".$details['starttime']."<br>";
							echo "End Date: ".$details['enddate']."<br>";
							echo "End Time: ".$details['endtime']."<br>";
							echo "Venue: ".$details['venue']."<br>";
						}
					}
				}
				else echo "no";
			}
		}
		
		public function sas(){
			$this->form_validation->set_rules('submissionType', 'submissionType', 'required');
			$this->form_validation->set_rules('reason', 'reason', 'required');
			$this->form_validation->set_rules('name', 'name', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$preacts = $this->session->userdata("actno");
				$preactinfo = $this->PreActivity_model->getPreactDetails($preacts);
				$data = array('preactinfo' => $preactinfo);
				$this->load->view('ORG_PreAct_SpecialApprovalSlip', $data);
				echo 'hi';
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
					redirect('PreActivity/cancel_activity');
				}
				if ($this->input->post('submissionType') == 2){
					redirect('PreActivity/change_act_details');
				}
				if ($this->input->post('submissionType') == 6){
					$this->PreActivity_model->createSASForm($preacts, 6, $this->session->userdata('sas'));

						//$getSASID = $this->PreActivity_model->getSASID();
					echo 'Success lost a form';
				}
			}
		}
	}
	
?>