<?php
	class ApprovalTrademark_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// REVISED FOR NEW DB
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

		public function createTrademarkUseRequestInfo($trademarkUseNum, $data){
			$this->db->insert('trademark_requestingInfo', array( "trademarkUseID" 		=> $trademarkUseNum,
																 "requestedby" 			=> $data['requestedby_name'], 
																 "requestedby_position" => $data['requestedby_position'], 
																 "IDno"		 			=> $data['IDnum'], 
																 "email" 				=> $data['email'], 
																 "telephone" 			=> $data['telephone'], 
																 "mobile" 				=> $data['mobile']));
		}

		public function addTrademarkToUse($trademarkUseNum, $trademarksChosen) {
			// echo $trademarksChosen[0];
			for ($i = 0; $i < sizeof($trademarksChosen); $i++) {
				$this->db->insert('trademarkuse_tm', array( "trademarkuseID"  => $trademarkUseNum, 
			 											 	"trademarkID" 	  => $trademarksChosen[$i]));
			}
		}

		public function getTrademarkUseApproval($preactsID) {
			$this->db->select('trademarkuseID');
	        $this->db->from('trademarkuse');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseDetails($preactsID) {
			$this->db->select('name,purpose,duration,starttime,endtime,venue,datecreated');
			$this->db->from('trademarkuse');
			$this->db->join('trademarkuse_tm', 'trademarkuse.trademarkuseID = trademarkuse_tm.trademarkuseID');
			$this->db->join('REF_trademarks', 'trademarkuse_tm.trademarkID = REF_trademarks.trademarkID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseRequestInfo($trademarkUseNum) {
			$this->db->select('requestedby,requestedby_position,IDnumber,email,telephone,mobile');
			$this->db->from('trademark_requestinginfo');
			$this->db->where('trademarkuseID', $trademarkUseNum);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getActivityTypes() {
			$query = $this->db->query('SELECT activityTypeID, activityType 
										 FROM ref_activitytype 
									 ORDER BY activityTypeID ASC');
	        return $query->result();
		}

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

		public function getDifferentTrademarks(){
			header("Content-type: application/json");
			$result = $this->ApprovalTrademark_model->getTrademarks($this->input->post('trademark'));
			echo json_encode($result);
		}

	}
?>