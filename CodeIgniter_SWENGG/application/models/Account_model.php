<?php
	class Account_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function checkLogin($username, $password){
			$this->db->where(array("username" => $username, "password" => $password));
			$this->db->select('type');
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>