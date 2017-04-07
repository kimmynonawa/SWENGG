<?php
	class PreActivity_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// This function gets the details of a given activity
		// @param $preactsID is the ID which identifies a specific activity
		// @return an array that contains the details of the activity
		public function getPreactDetails($preactID){
			$this->db->where(array("preactsID" => $preactID));
			$this->db->from('aform');
			$this->db->join('ref_activitynature', 'aform.activitynatureID = ref_activitynature.activitynatureID');
			$this->db->join('ref_activitytype', 'aform.activitytypeID = ref_activitytype.activitytypeID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function gets the list of activity nature types of a corresponding office stored in the database for dropdown population
		// @param $actoff is an INT that is the ID of the type of office of which the user has chosen
		// @return an array that contains a list of activity nature types under the specified office
		public function getActivityNature($actoff){
			$this->db->where(array("activityofficeID" => $actoff));
			$this->db->from('ref_activitynature');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function gets the list of activity nature types of a corresponding office stored in the database for dropdown population
		// @param $prooff is an INT that is the ID of the type of processing office of which the user has chosen
		// @return an array that contains a list of activity nature types under the specified office
		public function getActivityType($prooff){
			$this->db->where(array("processingofficeID" => $prooff));
			$this->db->from('ref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function gets the list of activity reach types stored in the database for dropdown population
		// @return an array that contains a list of activity reach types
		public function getActivityReach(){
			$this->db->from('ref_activityreach');
			$res = $this->db->get();
			return $res->result_array();
		}

		// This function gets the list of activity nature types stored in the database for dropdown population
		// @return an array that contains a list of activity reach types
		public function getActivityNatureList(){
			$this->db->from('ref_activitynature');
			$res = $this->db->get();
			return $res->result_array();
		}


		// This function gets the list of activity types stored in the database for dropdown population
		// @return an array that contains a list of activity reach types
		public function getActivityTypeList(){
			$this->db->from('ref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}

		// This function inserts a newly filed preactivity into the database
		// @param $organization is an INT that is the ID of the organization that is creating the preactivity
		public function createPreacts($organization) {
			date_default_timezone_set('Asia/Manila');
			$this->db->insert('preacts', array( 'organizationID' => $organization,
												'datecreated'	 => date('Y-m-d H:i:s')));
		}

		// This function selects the latest preactivity that was created
		// @return the latest preactivity that was inserted into the database
		public function getPreacts() {
			$this->db->from('preacts');
			$this->db->join('aform', 'aform.preactsID = preacts.preactsID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getPreactsLatest() {
			$this->db->select_max('preactsID');
			$this->db->from('preacts');
			$query = $this->db->get();
			return $query->row_array();
		}

		// This function inserts a newly filed AForm that is part of the GOSM into the database
		// @param $preactsID is the ID of the newly filed preactivity
		// @param $title is a String that is the tite of the preactivity
		// @param $aform1 is an array that contains information from the first page of the AForm
		// @param $aform2 is an array that contains information from the second page of the AForm
		public function insertAFormGOSM($preactsID, $title, $aform1, $aform2){
			date_default_timezone_set('Asia/Manila');
			
			$this->db->insert('aform', array( 'preactsID'		 => $preactsID, 
											  'gosmID'			 => $aform1['actName'],
											  'activityreachID'  => $aform1['reachType'],
											  'activitytypeID'   => $aform1['typeact'], 
											  'activitynatureID' => $aform1['natact'],
											  'enp' 		     => $aform2['enp'], 
											  'enmp' 		     => $aform2['enmp'], 
											  'venue' 		     => $aform2['venue'],
											  'datecreated'      => date('Y-m-d H:i:s'), 
											  'title' 		     => $title));
		}
		
		// This function inserts a newly filed AForm that is not part of the GOSM into the database
		// @param $preactsID is the ID of the newly filed preactivity
		// @param $sas is and INT that is the special approval slip ID 
		// @param $aform1 is an array that contains information from the first page of the AForm
		// @param $aform2 is an array that contains information from the second page of the AForm
		public function insertAformNotInGOSM($preactsID, $sas, $aform1, $aform2){
			date_default_timezone_set('Asia/Manila');

			$this->db->insert('aform', array('preactsID'		=> $preactsID,
											 'title' 		  	=> $aform1['actName'],  
											 'activityreachID'  => $aform1['reachType'],
											 'activitytypeID'   => $aform1['typeact'], 
											 'activitynatureID' => $aform1['natact'],
											 'enp'			  	=> $aform2['enp'], 
											 'enmp' 		  	=> $aform2['enmp'], 
											 'venue' 		  	=> $aform2['venue'],
											 'datecreated' 	  	=> date('Y-m-d H:i:s'), 
											 'sasID' 		  	=> $sas));
		}

		// SAS FORM
		// This function inserts a newly filed AForm that is not part of the GOSM into the database
		// @param $preactsID is an INT that is the ID of the newly filed preactivity
		// @param $sasTypeID is an INT that is the type of special approval slip being created
		// @param $data is an array that contains information regarding the change of an activity's details
		public function createSASForm($preactsID, $sasTypeID, $data) {
			date_default_timezone_set('Asia/Manila');
			$this->db->insert('sas', array( 'preactsID'	    => $preactsID,
											'sasTypeID'		=> $sasTypeID, //Activity not in gosm
											'justification' => $data['reason'],
											'submittedby'	=> $data['submittedby'],
											'dateSubmitted'	=> date('Y-m-d H:i:s')));
		}
		
		// This function selects the latest sasID that was created
		// @return the latest sas that was inserted into the database
		public function getSASID(){
			$this->db->select_max('sasID');
			$this->db->from('sas');
			$query = $this->db->get();
			return $query->row_array();
		}




		// AFORM
		// This function selects the latest aformID that was created
		// @return the latest aform that was inserted into the database
		public function getAformLatest(){
			$this->db->select_max('aformID');
			$this->db->from('aform');
			$res = $this->db->get();
			return $res->row_array();
		}
		
		// This function inserts the date an acitivity will take place in the database (Activity will take place on one day only)
		// @param $aform is an INT that is the ID of the newly filed AForm
		// @param $sdate is a DATE that is the date of the activity
		// @param $s1time is a TIME that is the time the activity will start
		// @param $e1time is a TIME that is the time the activity will end
		public function insertAformDateTimeSingle($aformID, $sdate, $s1time, $e1time){
			$this->db->insert('aform_date', array('aformID'   => $aformID, 
												  'startdate' => $sdate,
												  'starttime' => $s1time, 'endtime' => $e1time,
												  'type' 	  => 'singledate'));
		}
		
		// This function inserts the date an acitivity will take place in the database (Activity will take place on more than one day)
		// @param $aform is the ID of the newly filed AForm
		// @param $drsdate is a DATE that is the start date of the activity
		// @param $dredate is a DATE that is the end date of the activity
		// @param $s1time is a TIME that is the time the activity will start
		// @param $e1time is a TIME that is the time the activity will end
		public function insertAformDateTimeRange($aformID, $drsdate, $dredate, $s2time, $e2time){
			$this->db->insert('aform_date', array('aformID'   => $aformID, 
												  'startdate' => $drsdate, 
												  'enddate'   => $dredate,
												  'starttime' => $s2time, 
												  'endtime'   => $e2time, 
												  'type'      => 'daterange'));
		}
		
		// This function selects a preactivity's AForm details 
		// @param $preact is an INT that is the preactivity ID
		// @return an array containing the details of an AForm of a given preactivity 
		public function getAformID($preact){
			$this->db->where(array('preactsID' => $preact));
			$this->db->from('aform');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function selects an AForm's date 
		// @param $aformID is an INT that is the AForm ID
		// @return an array containing the dates an activity will take place
		public function getAformDate($aformID){
			$this->db->where(array('aformID' => $aformID));
			$this->db->from('aform_date');
			$res = $this->db->get();
			return $res->result_array();
		}




		// PPR
		// This function inserts a newly filed PPR for an activity
		// @param $preactsID is an INT that is the preactivity ID
		// @param $data is an array that contains the necessary information to create a PPR
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

		// This function adds the program design to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add a program design for the PPR
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

		// This function adds the expenses to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add expenses for the PPR
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

		// This function adds the project head/s to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $projectHeadInfo is an array that contains the necessary information regarding project heads
		public function addProjectHeads($PPRnum, $projectHeadInfo) {
			$projectHead_names = $projectHeadInfo['names[]'];
			$projectHead_num   = $projectHeadInfo['contactno[]'];

			for ($i = 0; $i < sizeof($projectHead_names); $i++) {
				$this->db->insert('ppr_projectheads', array("pprID" 		=> $PPRnum, 
															"name"  		=> $projectHead_names[$i],
															"contactnumber" => $projectHead_num[$i],));
			}
		} 

		// This function adds the funds to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add funds for the PPR
		public function addFunds($PPRnum, $data) {
			$this->db->insert('ppr_funds', array("pprID" 			=> $PPRnum, 
												 "orgfunds"	 		=> $data['orgFunds'], 
												 "participantsfee" 	=> $data['participantsFee'], 
												 "others" 			=> $data['totalOthersFund']));
		}

		// This function adds the funds from other sources to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add funds from other sources for the PPR
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

		// This function adds the organizational funds to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add organizational funds for the PPR
		public function addOrgFunds($PPRnum, $data) {
			foreach ($this->PreActivity_model->getSourceFundsTotalAmount($PPRnum) as $disbursement) {
				$totalDisbursement = $disbursement->totalAmount;
			}
			foreach ($this->PreActivity_model->getExpensesTotalAmount($PPRnum) as $expenses) {
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

		// This function adds the projected income to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add the projected income for the PPR
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

		// This function adds the projected expenses to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add the projected expenses for the PPR
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

		// This function adds the provisions to a newly filed PPR for an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @param $data is an array that contains the necessary information to add the provisions for the PPR
		public function addProvisions($PPRnum, $data) {
			$this->db->insert('ppr_provisions', array("pprID" 		=> $PPRnum, 
													  "person1" 	=> $data['provname1'], 
													  "position1" 	=> $data['provpos1'], 
													  "person2" 	=> $data['provname2'], 
													  "position2" 	=> $data['provpos2'],
													  "preparedby" 	=> $data['preparedby'],
													  "treasurer" 	=> $data['treasurer'],
													  "faculty" 	=> $data['facin'],
													  "president" 	=> $data['president']));
			
		}

		// This function gets the PPR of an activity
		// @preactsID is an INT that is the ID of an activity
		// @return the ID of the PPR of an activity
		public function getPPR($preactsID) {
			$this->db->select('pprID');
	        $this->db->from('PPR');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getPPRDetails($PPRnum) {
			$this->db->select('objective1, objective2, objective3');
			$this->db->from('ppr');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		public function getProgramDesign($PPRnum) {
			$this->db->select('starttime,endtime,duration,name,description,personincharge');
			$this->db->from('ppr_programdesign');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the ID of the PPR Funds of an activity
		public function getFundsNum($PPRnum) {
			$this->db->select('ppr_fundsID');
	        $this->db->from('PPR_FUNDS');
	        $this->db->where('pprID', $PPRnum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function gets the list of funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of funds for an activity
		public function getSourceFunds($PPRnum) {
			$this->db->select('orgfunds, participantsfee, others');
			$this->db->from('ppr_funds');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the sum of funds
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the sum of source funds
		public function getSourceFundsTotalAmount($PPRnum) {
			$query = $this->db->query("SELECT (SUM(orgfunds)+SUM(participantsfee)+SUM(others)) AS 'totalAmount'
										 FROM ppr_funds
										WHERE pprID = {$PPRnum}");
	        return $query->result();
		}

		// This function gets the list of funds from other sources of an activity
		// @param $PPRFundsNum is an INT that is the newly filed PPR Funds Num
		// @return an array containing the list of funds  from other sources for an activity
		public function getOtherSourceFunds($PPRFundsNum) {
			$this->db->select('source, amount');
			$this->db->from('ppr_otherfunds');
			$this->db->where('ppr_otherfundsID', $PPRFundsNum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of organizational funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of organizational funds for an activity
		public function getOrgFunds($PPRnum) {
			$this->db->select('operationalfunds, depositoryfunds, otherfunds, totaldisbursement, lessexpenses, balance');
			$this->db->from('ppr_orgfunds');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of expenses for an activity
		public function getExpenses($PPRnum) {
			$this->db->select('material, quantity, unitcost, totalcost');
			$this->db->from('ppr_expenses');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the sume of expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the sum of expenses for an activity
		public function getExpensesTotalAmount($PPRnum) {
			$query = $this->db->query("SELECT SUM(totalcost) AS 'totalAmount'
										 FROM ppr_expenses
										WHERE pprID = {$PPRnum}");
	        return $query->result();
		}

		// This function gets the list of projected income of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of projected income for an activity
		public function getProjectedIncome($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedincome');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of projected expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of projected expenses for an activity
		public function getProjectedExpenses($PPRnum) {
			$this->db->select('item, quantity, sellingprice');
			$this->db->from('ppr_projectedexpenses');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of project heads of an activity
		// @param $activityID is an INT that is the ID of the activity
		// @return an array containing the list of project heads
		public function getProjectHeads($PPRnum) {
			$this->db->select('name,contactnumber');
			$this->db->from('ppr_projectheads');
			$this->db->where('pprID', $PPRnum);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the details of an activity
		// @param $actid is an INT that is the ID of the activity
		// @return an array that contains the details of an activity
		public function getActivityDetails($actid) {
			$this->db->select('title,startdate,enddate,starttime,endtime,venue,activitynature,activitytype,activityreach,ENP,ENMP,a.activitytypeID');
			$this->db->from('aform a');
			$this->db->join('ref_activitynature an', 'a.activitynatureID = an.activitynatureID');
			$this->db->join('ref_activitytype at', 'a.activitytypeID = at.activitytypeID');
			$this->db->join('ref_activityreach ar', 'a.activityreachID = ar.activityreachID');
			$this->db->join('aform_date ad', 'a.aformID = ad.aformID');


			$res = $this->db->get();
			return $res->result_array();
		}


		// CHANGE ACT DETAILS
		// This function inserts into the database a new activity details change form
		// @param $cancellation is a TINYINT which serves as a boolean to state whether or not the form is for an activity's cancellation
		// @param $reason is a String which states the reason for the change of an activity's details
		// @param $requestedby is a String that is the requester's name
		// @param $sas is an INT that is the special approval slip ID
		public function insertChangeAct($cancellation,$reason, $requestedby, $sas){
			$this->db->insert('activitydetailschanges',
				array( 'sasID' 			=> $sas,
					  'cancellation'	=> $cancellation,
					  'justification'	=> $reason,
					  'requestedby'		=> $requestedby,
					  'datecreated'		=> date('Y-m-d H:i:s')
				));  
		}
		
		// This function selects the ID of the newly created activity details change form
		// @return the latest change act details form that was inserted into the database
		public function getCAD(){
			$this->db->select_max('activitydetailschangesID');
			$this->db->from('activitydetailschanges');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function inserts into the database a new program design for an activity
		// @param $activitydetailschangesID is an INT that is the ID of the filed activity details change form
		// @param $stime is a TIME that is the new start time of an activity
		// @param $etime is a TIME that is the new end time of an activity
		// @param $act is a String that is the title of an activity
		// @param $description is a String that describes the activity
		// @param $peric is a String that is the name of the person in charge for a specific activity
		public function insertComDesCAD($activitydetailschangesID, $stime, $etime, $act, $desc, $peric){
			$this->db->insert('adc_newprogramdesign', array(
				'activitydetailschangesID' => $activitydetailschangesID,
				'starttime' => $stime,
				'endtime' => $etime,
				'name' => $act,
				'description' => $desc,
				'personincharge' => $peric
			));
		}
		
		// This function inserts into the database a new venue for an activity
		// @param $newvenud is a String that is the name of the new venue for the activity
		// @param $activitydetailschangesID is an INT that is the ID of the filed activity details change form
		public function insertVenueCAD($newvenue, $activitydetailschangesID){
			$this->db->insert('adc_newvenue', array(
				'activitydetailschangesID' => $activitydetailschangesID,
				'newvenue' => $newvenue
			));
		}
		
		// This function inserts into the database a new date for an activity
		// @param $sdate is a DATE that is the start date of an activity
		// @param $s1time is a TIME that is the start time of an activity
		// @param $e1time is a TIME that is the end time of an activity
		// @param $activitydetailschangesID is an INT that is the ID of the filed activity details change form
		public function insertAformDateTimeSingleCAD($activitydetailschangesID, $sdate, $s1time, $e1time){
			$this->db->insert('adc_newdatetime', array('activitydetailschangesID'   => $activitydetailschangesID, 
												  'newstartdate' => $sdate,
												  'newstarttime' => $s1time, 'newendtime' => $e1time,
												  'type' 	  => 'singledate'));
		}
		
		// This function inserts into the database a new date for an activity
		// @param $drsdate is a DATE that is the start date of an activity
		// @param $dredate is a DATE that is the end date of an activity
		// @param $s2time is a TIME that is the start time of an activity
		// @param $e2time is a TIME that is the end time of an activity
		// @param $activitydetailschangesID is an INT that is the ID of the filed activity details change form
		public function insertAformDateTimeRangeCAD($activitydetailschangesID, $drsdate, $dredate, $s2time, $e2time){
			$this->db->insert('adc_newdatetime', array('activitydetailschangesID'   => $activitydetailschangesID, 
												  'newstartdate' => $drsdate, 
												  'newenddate'   => $dredate,
												  'newstarttime' => $s2time, 
												  'newendtime'   => $e2time, 
												  'type'      => 'daterange'));
		}
		




		// KIM'S FORMS
		// LIST OF PARTICIPANTS FORM
		// This function creates the list of participants form for the corresponding preactivity
		// @param $id is an INT that is the ID number of the participant
		// @param $lname is a String that is the last name of the participant
		// @param $fname is a String that is the first name of the participant
		// @param $mname is a String that is the middle initial of the participant
		// @param $age is an INT that is the age of the participant
		// @param $lopid is an INT that is the student's corresponding ID as a participant
		// @param $waiver is TINYINT that serves as a boolean
		public function insertLOP($id, $lname, $fname, $mname, $age, $lopid, $waiver){
			$this->db->insert('listofparticipants_details', array(	'IDno' 			   	   => $id, 	
																	'lastname' 			   => $lname,
																	'firstname' 		   => $fname,	
																	'middleinitial'		   => $mname,
																	'age' 				   => $age, 
																	'listofparticipantsID' => $lopid,
																	'waiver' 			   => $waiver));
		}
		
		// This function creates a list of participants form for a given preactivity
		// @param $preactsID is an INT that is the ID of the newly filed preactivity
		public function loppk($preactsID){
			$this->db->insert('listofparticipants', array('preactsID' => $preactsID));
		}
		
		// This function selects the latest listofparticipantsID that was created
		// @return the latest list of participants that was inserted into the database
		public function lopid(){
			$this->db->select_max('listofparticipantsID');
			$this->db->from('listofparticipants');
			$res = $this->db->get();
			return $res->result_array();
		}



		// CATHY/S FORMS
		// TRADEMARK USE APPROVAL
		// This function inserts into the database a new trademark use approval form
		// @param $data is an array that contains information needed for the creation of a trademark use approval form
		public function createTrademarkUseApproval($data){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");
			// COMPUTATION FOR DURATION
			$startDate = date('Y-m-d', strtotime($data['startDate']));
			$endDate = date('Y-m-d', strtotime($data['endDate']));
			
			$newStartDate = new DateTime($startDate);
			$newEndDate   = new DateTime($endDate);
			$difference   = $newEndDate->diff($newStartDate);
			$duration 	  = $difference->format('%m month(s) and %d day(s)');

			$this->db->insert('trademarkuse', array("preactsID"   => $data['preactsID'], 
													"purpose" 	  => $data['purposeOfUse'], 
													"startDate"   => $data['startDate'], 
													"endDate" 	  => $data['endDate'], 
													"venue" 	  => $data['venue'],
													"duration" 	  => $duration,  
													"dateCreated" => $dateCreated));
		}

		// This function inserts into the database a new trademark use approval request form
		// @param $trademarkUseNum is an INT that is the ID of the newly created trademark use approval form 
		// @param $data is an array that contains information needed for the creation of a trademark use approval request form
		public function createTrademarkUseRequestInfo($trademarkUseNum, $data){
			$this->db->insert('trademark_requestingInfo', array( "trademarkUseID" 		=> $trademarkUseNum,
																 "requestedby" 			=> $data['requestedby_name'], 
																 "requestedby_position" => $data['requestedby_position'], 
																 "IDno"		 			=> $data['IDnum'], 
																 "email" 				=> $data['email'], 
																 "telephone" 			=> $data['telephone'], 
																 "mobile" 				=> $data['mobile']));
		}
		
		// This function inserts into the database a new trademark use approval request form
		// @param $trademarkUseNum is an INT that is the ID of the newly created trademark use approval form 
		// @param $trademarksChosen is an array that contains the trademark types that will be used
		public function addTrademarkToUse($trademarkUseNum, $trademarksChosen) {
			// echo $trademarksChosen[0];
			for ($i = 0; $i < sizeof($trademarksChosen); $i++) {
				$this->db->insert('trademarkuse_tm', array( "trademarkuseID"  => $trademarkUseNum, 
			 											 	"trademarkID" 	  => $trademarksChosen[$i]));
			}
		}

		// This function selects a preactivity's corresponding trademark use approval form
		// @param $preactsID is an INT that is the ID of the trademark use approval form 
		// @return the trademark use approval form ID
		public function getTrademarkUseApproval($preactsID) {
			$this->db->select('trademarkuseID');
	        $this->db->from('trademarkuse');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function selects the details of a preactivity's corresponding trademark use approval form
		// @param $preactsID is an INT that is the ID of the trademark use approval form 
		// @return an array of details that correspond to the give preactivity's trademark use approval form
		public function getTrademarkUseDetails($preactsID) {
			$this->db->select('name,purpose,duration,starttime,endtime,venue,datecreated');
			$this->db->from('trademarkuse');
			$this->db->join('trademarkuse_tm', 'trademarkuse.trademarkuseID = trademarkuse_tm.trademarkuseID');
			$this->db->join('REF_trademarks', 'trademarkuse_tm.trademarkID = REF_trademarks.trademarkID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->row_array();
		}


		// This function selects the requesting details of a preactivity's corresponding trademark use approval form
		// @param $preactsID is an INT that is the ID of the trademark use approval form 
		// @return an array of details that correspond to the give preactivity's trademark use approval request details
		public function getTrademarkUseRequestInfo($trademarkUseNum) {
			$this->db->select('requestedby,requestedby_position,IDno,email,telephone,mobile');
			$this->db->from('trademark_requestinginfo');
			$this->db->where('trademarkuseID', $trademarkUseNum);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function selects the types of activities stored in the database for dropdown population
		// @return an array of activity types
		public function getActivityTypes() {
			$query = $this->db->query('SELECT activityTypeID, activityType 
										 FROM ref_activitytype 
									 ORDER BY activityTypeID ASC');
	        return $query->result();
		}

		// This function selects a list of trademarks of a given type stored in the database for dropdown population
		// @param $type an INT that corresponds to the type of trademark
		// @return an array of trademarks specific for the given type
		public function getTrademarks($type) {
			if ($type == 1) $trademarkType = "Logos/Design";
			else if ($type == 2) $trademarkType = "DLSU Labels";
			else if ($type == 3) $trademarkType = "DLSU Taglines";

			$query = $this->db->query("SELECT trademarkID, name 
										 FROM ref_trademarks 
										WHERE type LIKE '{$trademarkType}' 
									 ORDER BY trademarkID ASC");
	        return $query->result();
		}

		// This function selects a list of trademarks of a given type stored in the database for dropdown population
		// @return an json array of trademarks specific for the given type
		public function getDifferentTrademarks(){
			header("Content-type: application/json");
			$result = $this->ApprovalTrademark_model->getTrademarks($this->input->post('trademark'));
			echo json_encode($result);
		}



		// FOOD ENTRY PERMIT
		// This function inserts into the database a new food entry permit form
		// @param $data is an array that contains information needed for the creation of a food entry permit form
		public function createFoodPermit($data){
			$this->db->insert('foodpermit', array(	"preactsID" 	=> $data['preactsID'], 
													"name" 		 	=> $data['name'], 
													"IDno"	 	 	=> $data['IDnum'], 
													"position" 	 	=> $data['position'], 
													"email" 	 	=> $data['email'], 
													"mobile" 	 	=> $data['mobile'], 
													"telephone"  	=> $data['telephone'],));
		}

		// This function inserts into the database the food entry details of a new food entry permit form
		// @param $foodPermitNum is an INT that is the ID of the newly created food entry permit form
		// @param $data is an array that contains information needed for the creation of a food entry permit form
		public function createFoodPermitDetails($foodPermitNum, $data) {
			$quantity 	 = $data['quantity[]'];
			$unit 	 	 = $data['unit[]'];
			$description = $data['description[]'];
			$cost 		 = $data['cost[]'];

			for ($i = 0; $i < sizeof($quantity); $i++){
				$this->db->insert('fp_details',	array(	"foodpermitID" 	=> $foodPermitNum, 
														"quantity" 		=> $quantity[$i], 
														"unit" 			=> $unit[$i], 
														"description" 	=> $description[$i], 
														"cost" 			=> $cost[$i]));
			}
		}

		// This function selects the food permit of a given activity
		// @param $preactsID is an INT that is the ID of the activity
		// @return the ID of the activity's food permit
		public function getFoodPermit($preactsID) {
			$this->db->select('foodpermitID');
	        $this->db->from('foodpermit');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function selects the details of a given food entry permit
		// @param $foodPermitNum is an INT that is the ID of the newly created food entry permit form
		// @return an array containing the details of a food entry permit form
		public function getFoodPermitDetails($foodPermitNum) {
			$this->db->select('quantity,unit,description,cost');
			$this->db->from('fp_details');
			$this->db->where('foodpermitID', $foodPermitNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the request details of a given food entry permit
		// @param $foodPermitNum is an INT that is the ID of the newly created food entry permit form
		// @return an array containing the request details of a food entry permit form
		public function getFoodPermitRequestInfo($foodPermitNum) {
			$this->db->select('name,IDno,position,email,mobile,telephone');
	        $this->db->from('foodpermit');
	        $this->db->where('foodpermitID', $foodPermitNum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}



		// CONTEST MECHANICS
		// This function inserts into the database the general information of a contest
		// @param $generalInfo is an array that contains information needed for the creation of a contest mechanics form
		public function newContestMechanics($generalInfo){
			return $this->db->insert('contestmechanics', array( "preactsID"    => $generalInfo['preactsID'], 
																"guidelines"   => $generalInfo['guidelines']));
		}

		// This function inserts into the database the mechanics details of a contest
		// @param $contestMechanicsNum is an INT that is the ID of the newly created contest mechanics form
		// @param $mechanicsDetails is an array that contains the mechanics details of a contest
		public function addContestMechanicsDetails($contestMechanicsNum,$mechanicsDetails) {
			$mechanicsDetails = $mechanicsDetails['mechanics[]'];
			for ($i = 0; $i < sizeof($mechanicsDetails); $i++) {
				$this->db->insert('cm_mechanics', array( "contestmechanicsID" => $contestMechanicsNum, 
														 "mechanics" 		  => $mechanicsDetails[$i]));
			}
		}

		// This function inserts into the database the criteria details of a contest
		// @param $contestMechanicsNum is an INT that is the ID of the newly created contest mechanics form
		// @param $criteriaDetails is an array that contains the criteria details of a contest
		public function addContestMechanicsCriteria($contestMechanicsNum,$criteriaDetails) {
			$criteriaDetails = $criteriaDetails['criteria[]'];
			for ($i = 0; $i < sizeof($criteriaDetails); $i++) {
				$this->db->insert('cm_criteria', array(	"contestmechanicsID" => $contestMechanicsNum, 
														"criteria" 			 => $criteriaDetails[$i]));
			}
		}

		// This function inserts into the database the list of judges for a contest
		// @param $contestMechanicsNum is an INT that is the ID of the newly created contest mechanics form
		// @param $judges is an array that contains the names of judges for a contest
		public function addContestMechanicsJudges($contestMechanicsNum,$judges) {
			$judges = $judges['judges[]'];
			for ($i = 0; $i < sizeof($judges); $i++) {
				$this->db->insert('cm_judges', array(	"contestmechanicsID" => $contestMechanicsNum, 
														"name" 				 => $judges[$i]));
			}
		}

		// This function inserts into the database the list of questions for an academic contest
		// @param $contestMechanicsNum is an INT that is the ID of the newly created contest mechanics form
		// @param $questionDetails is an array that contains a list of questions that will be used for an academic contest
		public function addContestMechanicsQuestions($contestMechanicsNum,$questionDetails) {
			$questionDetails = $questionDetails['questions[]'];
			for ($i = 0; $i < sizeof($questionDetails); $i++) {
				$this->db->insert('cm_questions', array(	"contestmechanicsID" => $contestMechanicsNum, 
															"question" 			 => $questionDetails[$i]));
			}
		}

		// This function selects the contest mechanics form ID of a given activity
		// @param $preactsID is an INT that is the ID of the preactivity
		// @return the ID of the preactivity's contest mechanics form
		public function getContestMechanicsNumber($preactsID) {
			$this->db->select('contestmechanicsID');
	        $this->db->from('contestmechanics');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function selects the general details of an activity's contest
		// @param $contestMechanicsNum is an INT that is the ID of the contest
		// @return an array containing the general information of a contest
		public function getContestMechanicsGuidelines($contestMechanicsNum) {
			$this->db->select('guidelines, academiccontest');
	        $this->db->from('contestmechanics');
	        $this->db->where('contestmechanicsID', $contestMechanicsNum); 
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the mechanics details of an activity's contest
		// @param $contestMechanicsNum is an INT that is the ID of the contest
		// @return an array containing the mechanics details of a contest
		public function getContestMechanicsDetails($contestMechanicsNum) {
			$this->db->select('mechanics');
			$this->db->from('cm_mechanics');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the criteria for judging of an activity's contest
		// @param $contestMechanicsNum is an INT that is the ID of the contest
		// @return an array containing the criteria for judging of a contest
		public function getContestCriteria($contestMechanicsNum) {
			$this->db->select('criteria');
			$this->db->from('cm_criteria');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the judges of an activity's contest
		// @param $contestMechanicsNum is an INT that is the ID of the contest
		// @return an array containing the criteria for judging of a contest
		public function getContestJudges($contestMechanicsNum) {
			$this->db->select('name');
			$this->db->from('cm_judges');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the questions of an activity's academic contest
		// @param $contestMechanicsNum is an INT that is the ID of the contest
		// @return an array containing the list of questions of an academic contest
		public function getContestQuestions($contestMechanicsNum) {
			$this->db->select('question');
			$this->db->from('cm_questions');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}



		// PAULINE'S FORMS
		// MINOR PUB
		// This function inserts into the database a new minor publication form for an activity
		// @param $actno is an INT that is the ID of the newly filed preactivity
		// @param $pubname is a String that is the name of the minor publication
		// @param $pubtype is an INT that is the type of publication to be produced 
		// @param $pubfreq is an INT that is the amount that will produced
		// @param $pubcost is a DECIMAL that is the cost for the publication
		// @param $pubdate is a DATE that is the date the publication will be blasted
		// @param $obj1 is a String that is the first objective of the minor publication
		// @param $obj2 is a String that is the second objective of the minor publication
		// @param $obj3 is a String that is the third objective of the minor publication
		// @param $cont1 is a String that is the first content of the minor publication
		// @param $cont2 is a String that is the second content of the minor publication
		// @param $cont3 is a String that is the third content of the minor publication
		// @param $tread1 is a String that is the first target readers of the minor publication
		// @param $tread2 is a String that is the second target readers of the minor publication
		// @param $tread3 is a String that is the third target readers of the minor publication
		// @return TRUE if information was successfully added to the database and FALSE if otherwise
		public function minorpub($actno, $pubname, $pubtype, $pubfreq, $pubcost, $pubdate, $obj1, $obj2, $obj3, $cont1, $cont2, $cont3, $tread1, $tread2, $tread3){
			date_default_timezone_set('Asia/Manila');
			$datecreated = date("Y-m-d g:i:s");

			return $this->db->insert('minorpubproposal', array("preactsID" => $actno, "pubname" => $pubname, "releasedate" => $pubdate, 
																"pubtype" => $pubtype, "frequency" => $pubfreq, "estcost" => $pubcost, 
																"objective1" => $obj1, "objective2" => $obj2, "objective3" => $obj3, 
																"content1" => $cont1, "content2" => $cont2, "content3" => $cont3, 
																"target1" => $tread1, "target2" => $tread2, "target3" => $tread3, 
																"datecreated" => $datecreated));
		}

		// This function inserts into the database the details of a newly created minor publication form for an activity
		// @param $pubID is an INT that is the ID of the newly created minor publication
		// @param $npages is an INT that is the number of pages of the minor publication
		// @param $bm1 is a String that is the name of board member 1 (focuses on page numbers)
		// @param $ssize is an INT that is the spread size of the minor publication
		// @param $bm2 is a String that is the name of board member 2 (focuses on spread size)
		// @param $ptype is a String that is the paper type of the minor publication
		// @param $bm3 is a String that is the name of board member 3 (focuses on paper type)
		// @param $ncolor is an INT that is the number of colors in the minor publication
		// @param $bm4 is a String that is the name of board member 4 (focuses on num of colors)
		// @param $ncopies is an INT that is the number of copies of minor publication that will be produced
		// @param $bm5 is a String that is the name of board member 5 (focuses on num of copies)
		// @param $actno is an INT that is the ID of the newly filed preactivity
		// @return TRUE if information was successfully added to the database and FALSE if otherwise
		public function minorpub2($pubID, $npages, $bm1, $ssize, $bm2, $ptype, $bm3, $ncolor, $bm4, $ncopies, $bm5, $actno){
			return $this->db->insert('minorpub_details', array("minorpubproposalID" => $pubID, 
																"pageno" => $npages, "pageno_member" => $bm1,
																"spreadsize" => $ssize, "spreadsize_member" => $bm2, 
																"papertype" => $ptype, "papertype_member" => $bm3, 
																"colorno" => $ncolor, "colorno_member" => $bm4, 
																"copyno" => $ncopies, "copyno_member" => $bm5));
		}

		// This function selects the minor publication of an activity
		// @param $actno is an INT that is the ID of the newly filed preactivity
		// @return the ID of the activity's minor publication
		public function getMinorPub($actno) {
			$this->db->select('minorpubproposalID');
	        $this->db->from('minorpubproposal');
	        $this->db->where('preactsID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}



		// SPCA
		// This function inserts into the database the special permit campus access form for an activity
		// @param $actno is an INT that is the ID of the newly filed preactivity
		// @param $actTitle is a String that is the title of the activity the permit will be used for
		// @param $numPersons is an INT that is the number of persons the permit will be produced for
		// @param $Faculty is a String that is the name of the faculy in charge
		// @param $Name is a String that is the name of the student requesting for the permit
		// @param $IDNum is an INT that is the student number of the student requesting for the permit
		// @param $officeLoc is a String that is the location of the office for which the permit will be granted for
		// @param $CPNo is a String that is the mobile number of the requesting student
		// @param $TelNo is a String that is the telephone number of the requesting student
		// @param $Email is a String that is the email address of the requesting student
		// @return TRUE if information was successfully added to the database and FALSE if otherwise
		public function spca1($actno, $numPersons, $Faculty, $Name, $IDNum, $officeLoc, $CPNo, $TelNo, $Email){
			date_default_timezone_set('Asia/Manila');
			$datecreated = date("Y-m-d g:i:s");

			return $this->db->insert('spca', array("preactsID" => $actno, "requestedby" => $Name, "office" => $officeLoc, 
													"telephone" => $TelNo, "IDno" => $IDNum, "mobile" => $CPNo, "email" => $Email, 
													"ENP" => $numPersons, "facultyincharge" => $Faculty, "datecreated" => $datecreated));
		}
		
		// This function inserts into the database the persons that will be using the campus access permit
		// @param $SPCAnum is an INT that is the ID of the campus access permit of the activity
		// @param $lastname is a String that is the last name of the person of whom the pass will be used by
		// @param $firstname is a String that is the first name of the person of whom the pass will be used by
		// @param $middle is a String that is the middle name of the person of whom the pass will be used by
		// @param $classification is a String that will be the permit user's identification in the campus
		// @param $mobile is a String that is the mobile number of the user of the permit
		// @param $email is a String that is the email address of the user of the permit
		// @return TRUE if information was successfully added to the database and FALSE if otherwise
		public function spca2($SPCAnum, $lastname, $firstname, $middle, $classification, $mobile, $email) {
			return $this->db->insert('spca_persons', array("spcaID" => $SPCAnum, "lastname" => $lastname, "firstname" => $firstname, "middle" => $middle, 
										"classification" => $classification, "mobile" => $mobile, "email" => $email));
		}

		// This function inserts into the duration of which the campus access permits will be used
		// @param $SPCAnum is an INT that is the ID of the campus access permit of the activity
		// @param $startdate is a DATE that is the start date the permit will be used
		// @param $starttime is a TIME that is the start time the permit will be used
		// @param $enddate is a DATE that is the end date the permit will be used
		// @param $endtime is a TIME that is the end time the permit will be used
		// @param $venue is a String that is the place of which the permit can only be used
		// @return TRUE if information was successfully added to the database and FALSE if otherwise
		public function spca3($SPCAnum, $startdate, $starttime, $enddate, $endtime, $venue) {
			return $this->db->insert('spca_activity', array("spcaID" => $SPCAnum, "startdate" => $startdate, "starttime" => $starttime, "enddate" => $enddate, 
										"endtime" => $endtime, "venue" => $venue));
		}

		// This function selects the special permit campus access for a given activity
		// @param $actno is an INT that is the ID of an activity
		// @return the ID of the special permit campus access of the given activity
		public function getSPCA($actno) {
			$this->db->select('spcaID');
	        $this->db->from('spca');
	        $this->db->where('preactsID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function selects the list of persons the special permit campus access will be used by
		// @param $SPCAnum is an INT that is the ID of the campus access permit of the activity
		// @return an array containing a list of persons who will be using the special permit campus access
		public function getSPCApersons($SPCAno) {
			$this->db->select('lastname,firstname,middle,classification,mobile,email');
			$this->db->from('spca_persons');
			$this->db->where('spcaID', $SPCAno);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		// This function selects the date and time details of the usage of the permit
		// @param $SPCAnum is an INT that is the ID of the campus access permit of the activity
		// @return an array containing the date and time details of a given special permit campus access
		public function getSPCAactivity($SPCAno) {
			$this->db->select('startdate,starttime,enddate,endtime,venue');
			$this->db->from('spca_activity');
			$this->db->where('spcaID', $SPCAno);
	        $query = $this->db->get();

	        return $query->result_array();
		}
		
	}
?>