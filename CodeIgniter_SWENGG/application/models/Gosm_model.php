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
		
		//CENCOMM
		public function getCenComm($actno, $type){
			
			$this->db->where(array("activityID" => $actno, "type"=> $type));
			$this->db->from('cencomm');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//OTHERS
		public function getOthers($actno, $type){
			
			$this->db->where(array("activityID" => $actno, "type"=> $type));
			$this->db->from('others');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		
	}
?>