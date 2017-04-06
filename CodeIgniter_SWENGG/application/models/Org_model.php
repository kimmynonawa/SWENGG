<?php
	class Org_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addOrg ($name,$acro, $username, $password, $email){
			$this->db->insert('ref_users', array("name" => $name,"acronym" => $acro, "username" => $username, "password" => $password, "email" => $email, "usertypeID" => 2));
		}
		
		public function getOrg(){
			$this->db->where(array("usertypeID" => 2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}

		public function getOrgDetails($orgID) {
			$this->db->select('');
			$this->db->where('userID', $orgID);
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function updateOrg($org, $newemail){
			$this->db->where(array("userID" => $org));
			$this->db->update('ref_users', array("email" => $newemail));
		}
		
		public function getCSOChart(){
			$this->db->limit(10); 
			$this->db->order_by('numofpreacts', 'DESC');
			$this->db->where(array("usertypeID"=>2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getORGChart($org){
			$this->db->select('numofpreacts, numofgosm, numofpreactssas');
			$this->db->where(array("userID" => $org));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>