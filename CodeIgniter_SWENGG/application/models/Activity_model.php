<?php
	class Activity_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getAct($org){
			$this->db->where(array("organization" => $org ));
			$this->db->from('activity');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>