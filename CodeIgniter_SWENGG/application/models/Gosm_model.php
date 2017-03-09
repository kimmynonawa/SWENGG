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
		
		public function insertActivity($data, $org, $gosm, $reto){
			$this->db->insert('activity', 
			array(
			"organization" => $org,
			"GOSMno" => $gosm,
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
			"activitynature" => $data['gosmnat'],
			"activitytype" => $data['gosmtype'],
			"reto" => $reto
			)
			
			);
		}
		
		public function getActivityNature(){
			$this->db->from('ref_activitynature');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getActivityType(){
			$this->db->from('ref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		
	}
?>