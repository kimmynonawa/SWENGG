<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function updateTerm($term, $sy, $sdate, $edate){
			$this->db->where(array("termid" => 1));
			$this->db->update('ref_term', array("term" => $term, "schoolyear" => $sy, "startdate" => $sdate, "enddate" => $edate));
		}
		
		// This function gets the detais of a proposed activity
		// @param $actno is an INT that is the ID of the porposed activity
		// @return an array containing the details of a proposed activity
		public function getGosmDetails($actno){
			$this->db->where(array("gosmID" => $actno));
			$this->db->from('gosm');
			$this->db->join('ref_activitynature', 'gosm.activitynatureID = ref_activitynature.activitynatureID');
			$this->db->join('ref_activitytype', 'gosm.activitytypeID = ref_activitytype.activitytypeID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function inserts a proposed activity in the GOSM 
		// @param $data an array that contains the information needed to insert an activity in the GOSM
		// @param $org is an INT that is the ID of the organization creating the activity
		// @param $reto
		public function insertActivity($data, $org, $reto, $term, $sy){
			$this->db->insert('GOSM', 
			array(
				"organizationID" => $org,
				"title" => $data['gosmtitle'],
				"goals" => $data['gosmgoals'],
				"objectives" => $data['gosmobj'],
				"description" => $data['gosmdes'],
				"measures" => $data['gosmmeas'],
				"personInCharge" => $data['gosmperic'],
				"fromDate" => $data['gosmfromdate'],
				"toDate" => $data['gosmtodate'],
				"venue" => $data['gosmvenue'],
				"budget" => $data['gosmbug'],
				"activitynatureID" => $data['gosmnat'],
				"activitytypeID" => $data['gosmtype'],
				"reto" => $reto,
				"status" =>1,
				"datecreated" => date('Y-m-d H:i:s'),
				"term" => $term,
				"schoolyear" => $sy
			)
			
			);
		}
		
		// This function gets the ID and the title of an activity proposed in the GOSM
		// @param $org is an INT that is the ID of the organizationa
		// @return an array that contains the gosm ID and the activity title
		public function getAct($org){
			$this->db->select('gosmID,title');
			$this->db->where("organizationID", $org);
			$this->db->from('gosm');
			$res = $this->db->get();
			return $res->result_array();
		}

		// This function gets the title of an activity that is proposed in the GOSM
		// @param $actid is an INT that is the ID of the activity in the GOSM
		// @return the title of the given activity
		public function getActTitle($actid){
			$this->db->where(array("gosmID" => $actid ));
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getTerm(){
			$this->db->from('ref_term');
			$res = $this->db->get();
			return $res->result_array();
		}
	}
?>