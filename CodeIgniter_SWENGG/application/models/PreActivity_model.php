<?php
	class PreActivity_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		//Get Activity Nature where Actoff = activityoffice
		public function getActivityNature($actoff){
			$this->db->where(array("activityoffice" => $actoff));
			$this->db->from('ref_activitynature');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Get Activity Type where prooff = processingoffice
		public function getActivityType($prooff){
			$this->db->where(array("processingoffice" => $prooff));
			$this->db->from('ref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Get Activity Reach
		public function getActivityReach(){
			$this->db->from('ref_activityreach');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Insert Aform
		public function insertAForm($aform1, $aform2, $sDate, $s1Time, $e1time, $drsDate, $dreDate, $s2Time, $e2time){
			
		}
		
		//Insert List of Participants
		public function insertLOP($aform1, $aform2, $sDate, $s1Time, $e1time, $drsDate, $dreDate, $s2Time, $e2time){
			
		}
	}
?>