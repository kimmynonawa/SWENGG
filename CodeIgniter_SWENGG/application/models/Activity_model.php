<?php
	class Activity_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getAct($org){
			$this->db->where(array("organizationID" => $org ));
			$this->db->from('GOSM');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		
		
	}
?>