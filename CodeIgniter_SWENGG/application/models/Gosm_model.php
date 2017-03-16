<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getnew(){
			$this->db->where(array("status" => 1));
			$this->db->from('activity');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getall(){
			$this->db->from('activity');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function setseen(){
			$this->db->update('activity', array("status" => 2));
			$this->db->where(array("status" => 1));
		}
		
		public function getGosmDetails($actno){
			
			$this->db->where(array("activityID" => $actno));
			$this->db->from('Activity');
			$this->db->join('ref_activitynature', 'Activity.activitynature = ref_activitynature.idref_activitynature');
			$this->db->join('ref_activitytype', 'Activity.activitytype = ref_activitytype.idref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function insertActivity($data, $org, $gosm, $reto, $orgname){
			$this->db->insert('activity', 
			array(
				"organization" => $org,
				"orgname" => $orgname,
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
				"reto" => $reto,
				"status" =>1,
				"created" => date('Y-m-d H:i:s')
			)
			
			);
		}
		
		
	}
?>