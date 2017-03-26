<?php
	class Org_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addOrg ($name,$acro, $username, $password, $email){
			$this->db->insert('ref_users', 
			array("name" => $name,"acronym" => $acro, "username" => $username, 
			"password" => $password, "email" => $email, "usertypeID" => 2,
			"numofpreacts" => 0, "numofgosm" => 0, "numofpreactssas" => 0
			));
		}
		
		public function getOrg(){
			$this->db->where(array("usertypeID" => 2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>