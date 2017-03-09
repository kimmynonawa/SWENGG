<?php
	class Org_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addOrg ($name, $username, $password, $email){
			$this->db->insert('ref_users', array("name" => $name, "username" => $username, "password" => $password, "email" => $email, "type" => 2));
		}
		
		public function getOrg(){
			$this->db->where(array("type" => 2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getAcro(){
			$this->db->select('acronym');
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>