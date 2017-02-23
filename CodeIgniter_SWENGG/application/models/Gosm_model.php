<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getGosmDetails(){
			$res = $this->db->get("Activity");
			return $res->result_array();
		}
	}
?>