<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getGosmDetails($actno){
			
			$this->db->where(array("activityID" => $actno));
			$this->db->from('Activity');
			$this->db->join('ref_activitynature', 'Activity.activitynature = ref_activitynature.idref_activitynature');
			$this->db->join('ref_activitytype', 'Activity.activitytype = ref_activitytype.idref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//SELECT CENCOMM
		public function getCenComm($actno, $type){
			
			$this->db->where(array("activityID" => $actno, "type"=> $type));
			$this->db->from('cencomm');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//SELECT OTHERS
		public function getOthers($actno, $type){
			
			$this->db->where(array("activityID" => $actno, "type"=> $type));
			$this->db->from('others');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function insertActivity($data){
			$this->db->insert('activity', array("title" => $data['title']));
		}
		
		//INSERT CENCOMM
		public function insertCencomm($name, $activityID, $type){
			$this->db->insert('cencomm', array("name" => $name, "activityID" => $activityID, "type" => $type));
		}
		
		public function insertCencomm2($name, $activityID, $type, $status) {
			$this->db->insert('cencomm', array("name" => $name, "activityID" => $activityID, "type" => $type, "status" => $status));
		}
		
	}
?>