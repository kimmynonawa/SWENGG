<?php
	class PPR_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function createNewPPR($actno, $context1, $context2, $context3, $objective1, $objective2, $objective3, $preparedby_name, $preparedby_position, $notedby_name, $facultyAdviser){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");

			return $this->db->insert('ppr', array("activityID" => $actno, "context1" => $context1, "context2" => $context2, "context3" => $context3, "objective1" => $objective1, "objective2" => $objective2, "objective3" => $objective3, "preparedby" => $preparedby_name, "preparedby_position" => $preparedby_position, "notedby" => $notedby_name, "facultyadviser" =>$facultyAdviser, "datecreated" => $dateCreated));
		}

		public function createProgramDesign($PPRnum, $starttime, $endtime, $name, $description, $personincharge){
			// DURATION COMPUTATION HERE
			$duration = "30 minutes";
			// DURATION COMPUTATION END HERE

			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");


			return $this->db->insert('ppr_programdesign', array("PPRno" => $PPRnum, "date" => $dateCreated, "starttime" => $starttime, "endtime" => $endtime, "duration" => $duration, "name" => $name, "description" => $description, "personincharge" => $personincharge));
		}

		public function addExpenses($PPRnum, $material, $quantity, $unitCost, $totalCost) {
					return $this->db->insert('ppr_expenses', array("PPRno" => $PPRnum, "material" => $material, "quantity" => $quantity, "unitcost" => $unitCost, "totalcost" => $totalCost));
		}

		public function addFunds($PPRnum, $orgFunds, $participantsFee, $others) {
			return $this->db->insert('ppr_funds', array("PPRno" => $PPRnum, "orgfunds" => $orgFunds, "participantsfee" => $participantsFee, "others" => $others));
		}

		public function addOtherFunds($PPRFundsNum, $source, $amount) {
			return $this->db->insert('ppr_otherfunds', array("PPR_FUNDSno" => $PPRFundsNum, "source" => $source, "amount" => $amount));
		}

		public function addOrgFunds($PPRnum, $operationalFunds, $depositoryFunds, $depositoryAsOfDate, $otherFunds, $totalDisbursement, $lessExpenses, $balance) {
			return $this->db->insert('ppr_orgfunds', array("PPRno" => $PPRnum, "operationalfunds" => $operationalFunds, "depositoryfunds" => $depositoryFunds, "depository_asof" => $depositoryAsOfDate, "totaldisbursement" => $totalDisbursement, "less_expenses" => $lessExpenses, "balance" => $balance));
		}

		public function addProjectedIncome($PPRnum, $item, $quantity, $sellingPrice, $amount) {
			return $this->db->insert('ppr_projectedincome', array("PPRno" => $PPRnum, "item" => $item, "quantity" => $quantity, "sellingprice" => $sellingPrice, "amount" => $amount));
		}

		public function addProjectedExpenses($PPRnum, $item, $quantity, $sellingPrice, $amount) {
			return $this->db->insert('ppr_projectedexpenses', array("PPRno" => $PPRnum, "item" => $item, "quantity" => $quantity, "sellingprice" => $sellingPrice, "amount" => $amount));
		}

		public function addProvisions($PPRnum, $person1, $position1, $person2, $position2) {
			return $this->db->insert('ppr_provisions', array("PPRno" => $PPRnum, "person1" => $person1, "position1" => $position1, "person2" => $person2, "position2" => $position2));
		}

		public function getPPR($actno) {
			$this->db->select('PPRno');
	        $this->db->from('PPR');
	        $this->db->where('activityID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getFundsNum($PPRnum) {
			$this->db->select('idPPR_FUNDS');
	        $this->db->from('PPR_FUNDS');
	        $this->db->where('PPRno', $PPRnum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getFunds($PPRnum) {
			$this->db->select('orgfunds, participantsfee, others');
			$this->db->from('ppr_funds');
			$this->db->where('PPRno', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getExpenses($PPRnum) {
			$this->db->select('material, quantity, unitcost, totalcost');
			$this->db->from('ppr_expenses');
			$this->db->where('PPRno', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getOtherFunds($PPRFundsNum) {
			$this->db->select('source, amount');
			$this->db->from('ppr_otherfunds');
			$this->db->where('idPPR_OTHERFUNDS', $PPRFundsNum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getProjectedIncome($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedincome');
			$this->db->where('PPRno', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getProjectedExpenses($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedincome');
			$this->db->where('PPRno', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}
		
	}
?>