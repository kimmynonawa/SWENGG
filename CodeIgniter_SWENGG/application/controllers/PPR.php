<?php
	class PPR extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->library('session');

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

				// FOR TESTING PURPOSES
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR($this->session->userdata('activityID'));
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->createProgramDesign($ppr, $this->session->userdata['pprProgramDesign']);
				// }

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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addExpenses($ppr, $this->session->userdata['pprExpenseBreakdown']);
				// }
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addFunds($ppr, $this->session->userdata['pprFunds']);
				// 	$this->PPR_model->addOtherFunds($ppr, $this->session->userdata['pprOtherSource']);
				// 	$this->PPR_model->addOrgFunds($ppr, $this->session->userdata['pprOrgFunds']);

				// }
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
				// $this->PPR_model->createNewPPR($this->session->userdata('pprGeneralInfo'));
				// $PPRNum = $this->PPR_model->getPPR(1);
				// foreach ($PPRNum as $ppr) {
				// 	$this->PPR_model->addProjectedIncome($ppr, $this->session->userdata['pprProjectedIncome']);
				// 	$this->PPR_model->addProjectedExpenses($ppr, $this->session->userdata['pprProjectedExpenses']);

				// }
			}
		}

		
		// public function new_minor_publication() {
		// 	$this->form_validation->set_rules('pubname', 'Publication Name', 'required');
		// 	$this->form_validation->set_rules('pubtype', 'Publication Type', 'required');
		// 	$this->form_validation->set_rules('pubfreq', 'Frequency of Publication (Days)', 'required');
		// 	$this->form_validation->set_rules('pubcost', 'Estimated Cost', 'required');
		// 	$this->form_validation->set_rules('tdate', 'Target Date', 'required');

		// 	$this->form_validation->set_rules('obj1', 'Objectives', 'required');
		// 	$this->form_validation->set_rules('obj2', 'Objectives', 'required');
		// 	$this->form_validation->set_rules('obj3', 'Objectives', 'required');

		// 	$this->form_validation->set_rules('cont1', 'Proposed Content', 'required');
		// 	$this->form_validation->set_rules('cont2', 'Proposed Content', 'required');
		// 	$this->form_validation->set_rules('cont3', 'Proposed Content', 'required');

		// 	$this->form_validation->set_rules('tread1', 'Target Readers', 'required');
		// 	$this->form_validation->set_rules('tread2', 'Target Readers', 'required');
		// 	$this->form_validation->set_rules('tread3', 'Target Readers', 'required');

			
		// 	if ($this->form_validation->run() == FALSE){
		// 		$this->load->view('ORG_PreAct_MinorPublicationProposal');
		// 	}
		// 	else  {
		// 		$data = array(
		// 			'actno' 		=> $this->session->userdata('actitvityID'),
		// 			'organization'  => $this->session->userdata('userID'),
		// 			'pubname' 		=> $this->input->post('pubname'),
		// 			'pubtype' 		=> $this->input->post('pubtype'),
		// 			'frequency' 	=> $this->input->post('pubfreq'),
		// 			'cost'		 	=> $this->input->post('pubcost	'),

		// 			'targetdate' 	=> $this->input->post('tdate'),

		// 			'objective1'	=> $this->input->post('obj1'),
		// 			'objective2'	=> $this->input->post('obj2'),
		// 			'objective3'	=> $this->input->post('obj3'),

		// 			'content1' 		=> $this->input->post('cont1'),
		// 			'content2' 		=> $this->input->post('cont2'),
		// 			'content3' 		=> $this->input->post('cont3'),

		// 			'targetreader1' => $this->input->post('tread1'),
		// 			'targetreader2' => $this->input->post('tread2'),
		// 			'targetreader3' => $this->input->post('tread3')
		// 		);

		// 		$this->session->set_userdata('minorPublicationInfo', $data);
		// 		redirect('Cathy/minor_publication_details');
		// 	}
		// }

		// public function minor_publication_details() {
		// 	$this->form_validation->set_rules('npages', 'Number of Pages', 'required');
		// 	$this->form_validation->set_rules('ssize', 'Spread Size', 'required');
		// 	$this->form_validation->set_rules('ptype', 'Type of Paper', 'required');
		// 	$this->form_validation->set_rules('ncolor', 'Number of Color', 'required');
		// 	$this->form_validation->set_rules('ncopies', 'Number of Copies', 'required');
		// 	$this->form_validation->set_rules('bm1', 'Board Member-In-Charge', 'required');
		// 	$this->form_validation->set_rules('bm2', 'Board Member-In-Charge', 'required');
		// 	$this->form_validation->set_rules('bm3', 'Board Member-In-Charge', 'required');
		// 	$this->form_validation->set_rules('bm4', 'Board Member-In-Charge', 'required');
		// 	$this->form_validation->set_rules('bm5', 'Board Member-In-Charge', 'required');
		// 	$this->form_validation->set_rules('pcont', 'Publication Content', 'required');

			
		// 	if ($this->form_validation->run() == FALSE){
		// 		$this->load->view('ORG_PreAct_MinorPublicationProposal2');
		// 	}
		// 	else  {
		// 		$data = array(
		// 			// 'actno' 		=> $this->session->userdata('actitvityID'),
		// 			// 'organization'  => $this->session->userdata('userID'),
		// 			'numPages' 		=> $this->input->post('npages'),
		// 			'spreadSize' 	=> $this->input->post('ssize'),
		// 			'paperType' 	=> $this->input->post('ptype'),
		// 			'numColor'		=> $this->input->post('ncolor'),
		// 			'numCopies'		=> $this->input->post('ncopies'),
					
		// 			'numPages_member'	=> $this->input->post('bm1'),
		// 			'spreadSize_member'	=> $this->input->post('bm2'),
		// 			'paperType_member'	=> $this->input->post('bm3'),
		// 			'color_member'		=> $this->input->post('bm4'),
		// 			'copy_member'		=> $this->input->post('bm5'),
					
		// 			'pubContent'	=> $this->input->post('pcont')
		// 		);

		// 		$this->session->set_userdata('minorPublicationDetails', $data);
		// 	}
		// }
	}
?>