<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getnew(){
			$this->db->where(array("status" => 1));
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getall(){
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function setseen(){
			$this->db->update('GOSM', array("status" => 2));
			$this->db->where(array("status" => 1));
		}
		
		public function getGosmDetails($actno){
			
			$this->db->where(array("gosmID" => $actno));
			$this->db->from('gosm');
			$this->db->join('ref_activitynature', 'gosm.activitynatureID = ref_activitynature.activitynatureID');
			$this->db->join('ref_activitytype', 'gosm.activitytypeID = ref_activitytype.activitytypeID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function insertActivity($data, $org, $reto){
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
				"datecreated" => date('Y-m-d H:i:s')
			)
			
			);
		}

		// START CATHY
		public function getAct($org){
			$this->db->select('gosmID,title');
			$this->db->where("organizationID", $org);
			$this->db->from('gosm');
			$res = $this->db->get();
			return $res->result_array();
		}

		// public function getGosmID()
		
		public function getActTitle($actid){
			$this->db->where(array("gosmID" => $actid ));
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>