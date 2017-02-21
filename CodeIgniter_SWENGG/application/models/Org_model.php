<?php
	class Org_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addOrg ($name, $username, $password, $email){
			$this->db->insert('ref_users', array("name" => $name, "username" => $username, "password" => $password, "email" => $email));
		}
	}
?>