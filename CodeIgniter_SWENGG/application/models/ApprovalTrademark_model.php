<?php
	class ApprovalTrademark_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function createTrademarkUseApproval($data){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");
			// COMPUTATION FOR DURATION
			$startTime = date('H:i:s', strtotime($data['startTime']));
			$endTime = date('H:i:s', strtotime($data['endTime']));
			
			$newStartTime = new DateTime($startTime);
			$newEndTime   = new DateTime($endTime);
			$difference   = $newEndTime->diff($newStartTime);
			$duration 	  = $difference->format('%H hour(s) and %i minute(s)');

			$this->db->insert('trademarkuse', array("activityID"  => $data['actno'], 
													"purpose" 	  => $data['purposeOfUse'], 
													"startTime"   => $data['startTime'], 
													"endTime" 	  => $data['endTime'], 
													"venue" 	  => $data['venue'],
													"duration" 	  => $duration,  
													"dateCreated" => $dateCreated));
		}

		public function createTrademarkUseRequestInfo($trademarkUseNum, $data){
			$this->db->insert('trademark_requestingInfo', array( "TRADEMARKUSEno" 		=> $trademarkUseNum,
																 "organization"			=> $data['organization'], 
																 "requestedby" 			=> $data['requestedby_name'], 
																 "requestedby_position" => $data['requestedby_position'], 
																 "IDnumber" 			=> $data['IDnum'], 
																 "email" 				=> $data['email'], 
																 "telephone" 			=> $data['telephone'], 
																 "mobile" 				=> $data['mobile']));
		}

		public function addTrademarkToUse($trademarkUseNum, $trademarksChosen) {
			for ($i = 0; $i < sizeof($trademarksChosen); $i++) {
				$this->db->insert('trademarkuse_tm', array( "TRADEMARKUSEno" => $trademarkUseNum, 
			 											 	"trademark" 	  => $trademarksChosen[$i]));
			}
		}

		public function getTrademarkUseApproval($actno) {
			$this->db->select('TRADEMARKUSEno');
	        $this->db->from('trademarkuse');
	        $this->db->where('activityID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseDetails($actno) {
			$this->db->select('name,purpose,duration,starttime,endtime,venue,datecreated');
			$this->db->from('trademarkuse');
			$this->db->join('REF_trademarks', 'trademarkuse.trademark = REF_trademarks.idREF_TRADEMARKS');
			$this->db->where('activityID', $actno);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseRequestInfo($trademarkUseNum) {
			$this->db->select('requestedby,requestedby_position,IDnumber,email,telephone,mobile');
			$this->db->from('trademark_requestinginfo');
			$this->db->where('TRADEMARKUSEno', $trademarkUseNum);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getActivityTypes() {
			$query = $this->db->query('SELECT idREF_ACTIVITYTYPE, activityType 
										 FROM ref_activitytype 
									 ORDER BY activityType ASC');
	        return $query->result();
		}

		public function getTrademarks($type) {
			if ($type == 1) $trademarkType = "Logos/Design";
			else if ($type == 2) $trademarkType = "DLSU Labels";
			else if ($type == 3) $trademarkType = "DLSU Taglines";

			$query = $this->db->query("SELECT idREF_TRADEMARKS, name 
										 FROM ref_trademarks 
										WHERE type LIKE '{$trademarkType}' 
									 ORDER BY idREF_TRADEMARKS ASC");
	        return $query->result();
		}

		public function getDifferentTrademarks(){
			header("Content-type: application/json");
			$result = $this->ApprovalTrademark_model->getTrademarks($this->input->post('trademark'));
			echo json_encode($result);
		}

	}
?>