<?php
	class ApprovalTrademark_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function createTrademarkUseApproval($actno, $trademark, $purpose, $duration, $startTime, $endTime, $venue){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");

			return $this->db->insert('trademarkuse', array("activityID" => $actno, "trademark" => $trademark, "purpose" => $purpose, "duration" => $duration, "startTime" => $startTime, "endTime" => $endTime, "venue" => $venue, "dateCreated" => $dateCreated));
		}

		public function createTrademarkUseRequestInfo($trademarkUseNum, $requestedBy, $requestedBy_position, $IDnum, $email, $telephone, $mobile){
			
			return $this->db->insert('trademark_requestingInfo', array("TRADEMARKUSEno" => $trademarkUseNum, "requestedby" => $requestedBy, "requestedby_position" => $requestedBy_position, "IDnumber" => $IDnum, "email" => $email, "telephone" => $telephone, "mobile" => $mobile));
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
			$query = $this->db->query('SELECT idREF_ACTIVITYTYPE, activityType FROM ref_activitytype ORDER BY activityType ASC');
	        return $query->result();
		}

		public function getTrademarks() {
			$query = $this->db->query('SELECT idREF_TRADEMARKS,type,name FROM ref_trademarks ORDER BY idREF_TRADEMARKS ASC');
	        return $query->result();
		}

	}
?>