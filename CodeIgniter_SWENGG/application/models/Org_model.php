<?php
	class Org_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addOrg ($name, $acronym, $username, $password, $email){
			$this->db->insert('ref_users', array("name" => $name, "acronym" =>, $acronym, "username" => $username, "password" => $password, "email" => $email, "type" => 2));
		}
	}
?>