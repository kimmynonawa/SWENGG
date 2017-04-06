<?php
	class Account_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// This function checks if the user is valid for login
		// @param $username is a String that is the entered username upon login
		// @param $password is a String that is the entered password upon login
		// @return the type of user that the user is
		public function checkLogin($username, $password){
			$this->db->where(array("username" => $username, "password" => $password));
			$this->db->select('usertypeID');
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		// This function selects the organization details of the logged in user
		// @param $username is a String that is the entered username upon login
		// @param $password is a String that is the entered password upon login
		// @return an array that contains the organization details that matches the given input
		public function getID($username, $password){
			$this->db->where(array("username" => $username, "password" => $password));
			$this->db->select('userID, name, acronym');
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>