<?php
	class PPR_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function createNewPPR($preactsID, $data){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");
			return $this->db->insert('ppr', array(  "preactsID" 	=> $preactsID, 
													"context1" 		=> $data['description1'], 
													"context2" 		=> $data['description2'], 
													"context3" 		=> $data['description3'], 
													"objective1"	=> $data['objective1'], 
													"objective2" 	=> $data['objective2'], 
													"objective3" 	=> $data['objective3'],
													"datecreated" 	=> $dateCreated));
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function createProgramDesign($PPRnum, $data){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");

			// ASSIGNMENT OF VARIABLES
			$startTimes   		= $data['startTime[]'];
			$endTimes 	  		= $data['endTime[]'];
			$names		  		= $data['activityName[]'];
			$descriptions 		= $data['activityDes[]'];
			$personsincharge	= $data['activityPerson[]'];

			for ($i = 0; $i < sizeof($startTimes); $i++){
				// COMPUTATION FOR DURATION
				$startTime = date('H:i:s', strtotime($startTimes[$i]));
				$endTime = date('H:i:s', strtotime($endTimes[$i]));
				
				$newStartTime = new DateTime($startTime);
				$newEndTime   = new DateTime($endTime);
				$difference   = $newEndTime->diff($newStartTime);
				$duration 	  = $difference->format('%H hour(s) and %i minute(s)');

				$this->db->insert('ppr_programdesign', array("pprID" 		  => $PPRnum, 
															 "date" 		  => $dateCreated, 
															 "duration"		  => $duration, 
															 "starttime" 	  => $startTime, 
															 "endtime" 		  => $endTime, 
															 "name"			  => $names[$i], 
															 "description"	  => $descriptions[$i], 
															 "personincharge" => $personsincharge[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addExpenses($PPRnum, $data) {
			// ASSIGNMENT OF VARIABLES
			$materials = $data['material[]'];
			$quantity  = $data['quantity[]'];
			$unitCost  = $data['unitcost[]'];

			for ($i = 0; $i < sizeof($materials); $i++) {
				$totalCost = 0;
				$totalCost = $quantity[$i] * $unitCost[$i];
				$this->db->insert('ppr_expenses', array("pprID" 	=> $PPRnum, 
														"material"  => $materials[$i], 
														"quantity"  => $quantity[$i], 
														"unitcost"  => $unitCost[$i], 
														"totalcost" => $totalCost));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addProjectHeads($PPRnum, $projectHeadInfo) {
			$projectHead_names = $projectHeadInfo['names[]'];
			$projectHead_num   = $projectHeadInfo['contactno[]'];

			for ($i = 0; $i < sizeof($projectHead_names); $i++) {
				$this->db->insert('ppr_projectheads', array("pprID" 		=> $PPRnum, 
															"name"  		=> $projectHead_names[$i],
															"contactnumber" => $projectHead_num[$i],));
			}
		} 

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addFunds($PPRnum, $data) {
			$this->db->insert('ppr_funds', array("pprID" 			=> $PPRnum, 
												 "orgfunds"	 		=> $data['orgFunds'], 
												 "participantsfee" 	=> $data['participantsFee'], 
												 "others" 			=> $data['totalOthersFund']));
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addOtherFunds($PPRFundsNum, $data) {
			$sourceName   = $data['othersName[]'];
			$sourceAmount = $data['othersAmount[]'];
			for ($i = 0; $i < sizeof($sourceName); $i++) {
				// echo $PPRFundsNum;
				$this->db->insert('ppr_otherfunds', array(  "ppr_fundsID" => $PPRFundsNum, 
															"source" 	  => $sourceName[$i], 
															"amount" 	  => $sourceAmount[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addOrgFunds($PPRnum, $data) {
			foreach ($this->PPR_model->getSourceFundsTotalAmount($PPRnum) as $disbursement) {
				$totalDisbursement = $disbursement->totalAmount;
			}
			foreach ($this->PPR_model->getExpensesTotalAmount($PPRnum) as $expenses) {
				$lessExpenses = $expenses->totalAmount;
			}
			$balance = $totalDisbursement - $lessExpenses;

			$this->db->insert('ppr_orgfunds', array("pprID" 			=> $PPRnum, 
													"operationalfunds" 	=> $data['operationalFunds'], 
													"depositoryfunds" 	=> $data['depositoryFunds'], 
													"depository_asof" 	=> $data['depositoryDate'], 
													"totaldisbursement" => $totalDisbursement, 
													"lessexpenses" 		=> $lessExpenses, 
													"balance" 			=> $balance));
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addProjectedIncome($PPRnum, $data) {
			$itemList  = $data['incomeItem[]'];
			$qtyList   = $data['incomeQty[]'];
			$priceList = $data['incomeSellPrice[]'];

			for ($i = 0; $i < sizeof($itemList); $i++) {
				$amount = 0;
				$amount = $qtyList[$i] * $priceList[$i];
				$this->db->insert('ppr_projectedincome', array(	"pprID" 		=> $PPRnum, 
																"item" 			=> $itemList[$i], 
																"quantity" 		=> $qtyList[$i], 
																"sellingprice"  => $priceList[$i], 
																"amount" 		=> $amount));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addProjectedExpenses($PPRnum, $data) {
			$itemList  = $data['expenseItem[]'];
			$qtyList   = $data['expenseQty[]'];
			$priceList = $data['expenseSellPrice[]'];

			for ($i = 0; $i < sizeof($itemList); $i++) {
				$amount = 0;
				$amount = $qtyList[$i] * $priceList[$i];
				$this->db->insert('ppr_projectedexpenses', array("pprID" 		=> $PPRnum, 
																 "item" 		=> $itemList[$i], 
																 "quantity" 	=> $qtyList[$i], 
																 "sellingprice" => $priceList[$i], 
																 "amount" 		=> $amount));
			}
		}

		public function getPPR($preactsID) {
			$this->db->select('pprID');
	        $this->db->from('PPR');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getFundsNum($PPRnum) {
			$this->db->select('ppr_fundsID');
	        $this->db->from('PPR_FUNDS');
	        $this->db->where('pprID', $PPRnum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getSourceFunds($PPRnum) {
			$this->db->select('orgfunds, participantsfee, others');
			$this->db->from('ppr_funds');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getSourceFundsTotalAmount($PPRnum) {
			$query = $this->db->query("SELECT (SUM(orgfunds)+SUM(participantsfee)+SUM(others)) AS 'totalAmount'
										 FROM ppr_funds
										WHERE pprID = {$PPRnum}");
	        return $query->result();
		}

		public function getOtherSourceFunds($PPRFundsNum) {
			$this->db->select('source, amount');
			$this->db->from('ppr_otherfunds');
			$this->db->where('ppr_otherfundsID', $PPRFundsNum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getOrgFunds($PPRnum) {
			$this->db->select('operationalfunds, depositoryfunds, otherfunds, totaldisbursement, balance');
			$this->db->from('ppr_orgfunds');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getExpenses($PPRnum) {
			$this->db->select('material, quantity, unitcost, totalcost');
			$this->db->from('ppr_expenses');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getExpensesTotalAmount($PPRnum) {
			$query = $this->db->query("SELECT SUM(totalcost) AS 'totalAmount'
										 FROM ppr_expenses
										WHERE pprID = {$PPRnum}");
	        return $query->result();
		}

		public function getProjectedIncome($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedincome');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getProjectedExpenses($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedincome');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}
		

		public function getProjectHeads($activityID) {
			$this->db->select('name,contactnumber');
			$this->db->from('ppr_projectheads ph');
			$this->db->join('ppr p', 'ph.pprID = p.pprID');
			$this->db->where('p.preactsID', $activityID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getActivityDetails($actid) {
			$this->db->select('title,startdate,enddate,starttime,endtime,venue,activitynature, ENP');
			$this->db->from('aform a');
			$this->db->join('ref_activitynature an', 'a.activitynatureID = an.activitynatureID');
			$this->db->join('aform_date ad', 'a.aformID = ad.aformID');


			$res = $this->db->get();
			return $res->result_array();
		}
	}
?>