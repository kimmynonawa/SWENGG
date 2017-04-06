<?php
	class Notification_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// This function gets the newly created GOSM activities
		// @return an array that contains a list of newly create GOSM activities
		public function getnew(){
			$this->db->where(array("status" => 1));
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function gets all GOSM activities
		// @return an array that contains a list of GOSM activities
		public function getall(){
			$this->db->from('GOSM');
			$this->db->join('ref_users', 'GOSM.organizationID = ref_users.userID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function sets newly created GOSM activities to seen
		public function setseen(){
			$this->db->update('GOSM', array("status" => 2));
			$this->db->where(array("status" => 1));
		}
	}
?>