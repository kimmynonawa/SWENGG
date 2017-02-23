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
	}
?>