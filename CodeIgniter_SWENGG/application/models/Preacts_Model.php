<?php
	class Preacts_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function get(){
			$this->db->where(array("usertypeID"=>2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>