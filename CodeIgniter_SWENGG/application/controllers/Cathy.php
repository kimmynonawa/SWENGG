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
				$projHeadNum 	= $this->input->post('phnum[]');
				$objective1 	= $this->input->post('obje1');
				$objective2 	= $this->input->post('obje2');
				$objective3 	= $this->input->post('obje3');
				$description1 	= $this->input->post('desc1');
				$description2 	= $this->input->post('desc2');
				$description3 	= $this->input->post('desc3');

				//SESSION VARIABLES
				$actno 				= 1; 
				$preparedby_name 	= "Jose Rizal";
				$preparedby_postion = "Member";
				$notedby 			= "Maria Clara";
				$facultyAdviser 	= "Ryan Dimaunahan";
				// 

				if ($this->PPR_model->createNewPPR($actno, $description1, $description2, $description3, $objective1, $objective2, $objective3, $preparedby_name, $preparedby_postion, $notedby, $facultyAdviser)) redirect('Cathy/new_ppr_program_design');
				else echo "no";
				// else ***ERROR MESSAGE FOR WHEN DI NAG-INSERT
			}
		}

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
				$starttime 		= $this->input->post('time[]');
				$endtime 		= $this->input->post('stime[]');
				$activityName 	= $this->input->post('aname[]');
				$activityDes 	= $this->input->post('ades[]');
				$activityPerson = $this->input->post('apic[]');
				$actno 			= 1; //SESSION VARIABLE

				$error = FALSE;
				$PPR = $this->PPR_model->getPPR($actno);

				foreach ($PPR as $PPRnum) {
					for ($i = 0; $i < sizeof($starttime); $i++) {
						if (!$this->PPR_model->createProgramDesign($PPRnum, $starttime[$i], $endtime[$i], $activityName[$i], $activityDes[$i], $activityPerson[$i])) $error = TRUE;
					}
				}

				if (!$error) redirect('Cathy/new_ppr_expense_breakdown');
				// else **ERROR MESSAGE HERE**;
			}	
		}

		public function new_ppr_expense_breakdown() {
			$this->form_validation->set_rules('mat3[]', 'mat3', 'required');
			$this->form_validation->set_rules('qty3[]', 'qty3', 'required');
			$this->form_validation->set_rules('ucost3[]', 'ucost3', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR3');
			}
			else {
				$material 	= $this->input->post('mat3[]');
				$quantity 	= $this->input->post('qty3[]');
				$unitcost 	= $this->input->post('ucost3[]');
				$actno 		= 1; //SESSION VARIABLE

				$error = FALSE;
				$PPR = $this->PPR_model->getPPR($actno);
				foreach ($PPR as $PPRnum) {
					for ($i = 0; $i < sizeof($material); $i++) {
						$totalCost = $quantity[$i] * $unitcost[$i];
						if (!$this->PPR_model->addExpenses($PPRnum, $material[$i], $quantity[$i], $unitcost[$i], $totalCost)) $error = TRUE;
					}
				}

				if (!$error) redirect('Cathy/new_ppr_funding_details');
				// else **ERROR MESSAGE HERE**;
			}
		}

		public function new_ppr_funding_details() {
			$this->form_validation->set_rules('of41', 'Organizational Funds', 'required');
			$this->form_validation->set_rules('pf41', 'Participants Fee', 'required');
			$this->form_validation->set_rules('amt4', 'Operational Funds','required');
			$this->form_validation->set_rules('dpf4', 'Depository Funds as of','required');
			$this->form_validation->set_rules('dpfam', 'Depository Funds as of','required');
			$this->form_validation->set_rules('pf4', 'Participants Fee/Donation/Sponsorships','required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_PPR4');
			}
			else {
				$orgFunds		 	= $this->input->post('of41');
				$participantsFee 	= $this->input->post('pf41');
				$othersName 		= $this->input->post('sname[]');
				$othersAmount 		= $this->input->post('samt[]');
				$operationalFunds 	= $this->input->post('amt4[]');
				$depositoryFunds 	= $this->input->post('dpfam[]');
				$depositoryDate 	= $this->input->post('dpf[]');
				$donationAmount 	= $this->input->post('pf4[]');
				$actno 				= 1; //SESSION VARIABLE

				$totalOthersFund = 0;

				if ($othersName[0] != "") {
					for ($i = 0; $i < sizeof($othersAmount); $i++) {
						$totalOthersFund += $othersAmount[$i];
					}
				}

				$error = FALSE;
				$PPR = $this->PPR_model->getPPR($actno);
				foreach ($PPR as $PPRnum) {
					if (!$this->PPR_model->addFunds($PPRnum, $operationalFunds, $participantsFee, $totalOthersFund)) $error = TRUE;
					
					if (!$error) {
						if ($othersName[0] != "") {
							$PPRFunds = $this->PPR_model->getFundsNum($PPRnum);
							foreach ($PPRFunds as $PPRFundsNum) {
								for ($i = 0; $i < sizeof($othersAmount); $i++) {
									if (!$this->PPR_model->addOtherFunds($PPRFundsNum, $othersName[$i], $othersAmount[$i])) $error = TRUE;
								}
							}
						}
					}
				}

				if (!$error) redirect('Cathy/new_ppr_projected_income');
				// else **ERROR MESSAGE HERE**;
			}
		}

		public function new_ppr_projected_income() {
			$this->load->view('ORG_PreAct_PPR5');
		}

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
				$name 		= $this->input->post('Name');
				$IDnum 		= $this->input->post('IDNum');
				$email 		= $this->input->post('Email');
				$telephone 	= $this->input->post('TelNo');
				$mobile 	= $this->input->post('CPNo');
				$position 	= $this->input->post('Position');

				$actno = 1; //SESSION VARIABLE

				if ($this->FoodPermit_model->createFoodPermit($actno, $name, $IDnum, $position, $email, $mobile, $telephone)) redirect('Cathy/food_permit_details');
				// else ***ERROR MESSAGE FOR WHEN DI NAG-INSERT
			}
		}

		public function food_permit_details() {
			$this->form_validation->set_rules('fqty[]', 'fqty', 'required');
			$this->form_validation->set_rules('funit[]', 'funit', 'required');
			$this->form_validation->set_rules('fdes[]', 'Description', 'required');
			$this->form_validation->set_rules('fecost[]', 'fecost', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_FoodEntryPermit2');
			}
			else  {
				$qty 			= $this->input->post('fqty');
				$unit 			= $this->input->post('funit');
				$description 	= $this->input->post('fdes');
				$cost 			= $this->input->post('fecost');
				$actno 			= 1; //SESSION VARIABLE

				$foodPermit=$this->FoodPermit_model->getFoodPermit($actno);
				$error = FALSE;

				foreach ($foodPermit as $foodPermitNum) {
					for ($i = 0; $i < sizeof($qty); $i++) {
						if (!$this->FoodPermit_model->createFoodPermitDetails($foodPermitNum, $qty[$i], $unit[$i], $description[$i], $cost[$i])) $error=TRUE;
					}
				}

				if (!$error) {
					foreach ($foodPermit as $foodPermitNum) {
						$foodPermitDetails = $this->FoodPermit_model->getFoodPermitDetails($foodPermitNum);
						echo "Food Permit Number: ".$foodPermitNum."<br>";

						foreach ($foodPermitDetails as $details) {
							echo "Food Quantity: ".$details['quantity']."<br>";
							echo "Food Unit: ".$details['unit']."<br>";
							echo "Food Description: ".$details['description']."<br>";
							echo "Food Cost: ".$details['cost']."<br>";
						}
					}
				}
				else echo "no";
			}
		}

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
				$actno = 1;

				$guidelines = $this->input->post('guidelines');
				$mechanics 	= $this->input->post('mechanics[]');
				$criteria 	= $this->input->post('criteria[]');
				$judges 	= $this->input->post('judges[]');
				$questions 	= $this->input->post('questions[]');

				$error = FALSE;
				if ($this->ContestMechanics_model->newContestMechanics($actno,$guidelines)) {
					$contestMechanicsResult=$this->ContestMechanics_model->getContestMechanicsNumber($actno);

					foreach($contestMechanicsResult as $contestMechanicsNum) {
						for ($i = 0; $i < sizeof($mechanics); $i++) {
							if (!$this->ContestMechanics_model->addContestMechanicsDetails($contestMechanicsNum,$mechanics[$i])) $error = TRUE;
						}
						for ($i = 0; $i < sizeof($criteria); $i++) {
							if (!$this->ContestMechanics_model->addContestMechanicsCriteria($contestMechanicsNum,$criteria[$i])) $error = TRUE;
						}
						for ($i = 0; $i < sizeof($judges); $i++) {
							if (!$this->ContestMechanics_model->addContestMechanicsJudges($contestMechanicsNum,$judges[$i])) $error = TRUE;
						}
						for ($i = 0; $i < sizeof($questions); $i++) {
							if (!$this->ContestMechanics_model->addContestMechanicsQuestions($contestMechanicsNum,$questions[$i])) $error = TRUE;
						}
					}
				}
				// // else ** ERROR **;

				if (!$error) {
					foreach ($contestMechanicsResult as $contestMechanicsNum) {
						echo "Contest Mechanics Number: ".$contestMechanicsNum."<br>";
						$contestMechanics 	= $this->ContestMechanics_model->getContestMechanicsDetails($contestMechanicsNum);
						$contestCriteria 	= $this->ContestMechanics_model->getContestCriteria($contestMechanicsNum);
						$contestJudges 		= $this->ContestMechanics_model->getContestJudges($contestMechanicsNum);
						$contestQuestions 	= $this->ContestMechanics_model->getContestQuestions($contestMechanicsNum);
						
						foreach ($contestMechanics as $mechanics) {
							echo "Mechanics: ".$mechanics['mechanics']."<br>";
						}
						foreach ($contestCriteria as $criteria) {
							echo "Criteria: ".$criteria['criteria']."<br>";
						}
						foreach ($contestJudges as $judges) {
							echo "Judge Name: ".$judges['name']."<br>";
						}
						foreach ($contestQuestions as $questions) {
							echo "Question: ".$questions['question']."<br>";
						}

					}
				}
				else echo "no";
			}
		}

		public function new_equipment_entry() {
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('Position', 'Position', 'required');
			$this->form_validation->set_rules('reasonRequest', 'Reason For Request', 'required');

			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_EquipmentEntry');
			}
			else  {
				$actno = 1; //SESSION VARIABLE

				$name 			= $this->input->post('Name');
				$position 		= $this->input->post('Position');
				$reasonRequest 	= $this->input->post('reasonRequest');

				if ($this->EquipmentPermit_model->createEquipmentEntryPermit($actno, $name, $position, $reasonRequest)) echo "YAY";
				// else ***ERROR MESSAGE ***

			}
		}

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
				$this->session->set_userdata('name', $this->input->post('Name'));
				$this->session->set_userdata('position', $this->input->post('Position'));
				$this->session->set_userdata('IDnum', $this->input->post('IDNum'));
				$this->session->set_userdata('email', $this->input->post('Email'));
				$this->session->set_userdata('telephone', $this->input->post('TelNo'));
				$this->session->set_userdata('mobile', $this->input->post('CPNo'));

				redirect('Cathy/approval_use_trademark_details');
			}
		}

		// public function approval_use_trademark_details() {
		// 	$this->form_validation->set_rules('tmChoice[]', 'Trademark To Use');
		// 	$this->form_validation->set_rules('matToProduce', 'Type of Item/Material To Produce', 'required');
		// 	$this->form_validation->set_rules('trademarkUse', 'Purpose Of Use', 'required');
		// 	$this->form_validation->set_rules('startTime', 'Proposed Start Time', 'required');
		// 	$this->form_validation->set_rules('endTime', 'Proposed End Time', 'required');
		// 	$this->form_validation->set_rules('actType', 'Activity Where Trademark Will Be Used', 'required');
		// 	$this->form_validation->set_rules('venue', 'Venue', 'required');

		// 	if ($this->form_validation->run() == FALSE){
		// 		$list['activityTypes'] = $this->ApprovalTrademark_model->getActivityTypes();
		// 		$trademarks['trademarks'] = $this->ApprovalTrademark_model->getTrademarks();

		// 		$this->load->view('ORG_PreAct_ApprovalUseTrademark2', $list);
		// 	}
		// 	else  {
		// 		// FOR TRADEMARKS REQUESTING INFORMATION TABLE
		// 		$name 		= $this->session->userdata('name');
		// 		$position 	= $this->session->userdata('position');
		// 		$IDnum 		= $this->session->userdata('IDnum');
		// 		$email 		= $this->session->userdata('email');
		// 		$telephone 	= $this->session->userdata('telephone');
		// 		$mobile 	= $this->session->userdata('mobile');

		// 		// FOR TRADEMARK USE TABLE
		// 		$trademark 		= $this->input->post('tmChoice[]');
		// 		$material 		= $this->input->post('matToProduce');
		// 		$purposeOfUse 	= $this->input->post('trademarkUse');
		// 		$startTime 		= $this->input->post('startTime');
		// 		$endTime 		= $this->input->post('endTime');
		// 		$activityType 	= $this->input->post('actType');
		// 		$venue 			= $this->input->post('venue');

		// 		$duration		= "*duration here*"; //not showing in UI

		// 		$actno = 1; //SESSION VARIABLE

		// 		if ($this->ApprovalTrademark_model->createTrademarkUseApproval($actno, $trademark, $purposeOfUse, $duration, $startTime, $endTime, $venue)) {
		// 			$trademarkUse=$this->ApprovalTrademark_model->getTrademarkUseApproval($actno);

		// 			$error = FALSE;
		// 			foreach ($trademarkUse as $trademarkUseNum) {
		// 				if (!$this->ApprovalTrademark_model->createTrademarkUseRequestInfo($trademarkUseNum, $name, $position, $IDnum, $email, $telephone, $mobile)) $error=TRUE;
		// 			}

		// 			if (!$error) {
		// 				foreach ($trademarkUse as $trademarkUseNum) {
		// 					$trademarkUseDetails = $this->ApprovalTrademark_model->getTrademarkUseDetails($actno);
		// 					$trademarkUseRequestDetails = $this->ApprovalTrademark_model->getTrademarkUseRequestInfo($trademarkUseNum);

		// 					echo "Trademark Use Number: ".$trademarkUseNum."<br>";

		// 					foreach ($trademarkUseDetails as $details) {
		// 						echo "Details: ".$details."<br>";
		// 					}

		// 					foreach ($trademarkUseRequestDetails as $requestDetails) {
		// 						echo "Request Details: ".$requestDetails."<br>";
		// 					}
		// 				}
		// 			}
					
		// 		}
		// 		// else echo "**ERROR MESSAGE HERE"
		// 	} 
		// } --QUESTION FOR ANALYSTS: mali ata na same table yung gagamitin na trademarks for an activity as the table kung saan yung general information niya; refer to contest mechanics tables; kasi since marami yung trademarks na pipiliin, parang paulit ulit information ng trademark approval permit sa db
	}
?>