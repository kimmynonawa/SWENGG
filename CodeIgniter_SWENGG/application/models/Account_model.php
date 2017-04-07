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
		
		public function getWeekActsOrgWithPreActs($org)
		{
			$sql="SELECT * 
					FROM gosm 
					WHERE organizationID=? 
					AND YEARWEEK(fromdate) = YEARWEEK(NOW()) 
					AND gosmID IN(SELECT gosmID 
									FROM aform 
									WHERE gosmID IS NOT NULL)";
			$query=$this->db->query($sql, array($org));
			return $query->result();
		}
		
		public function getWeekActsOrgNoPreActs($org)
		{
			$sql="SELECT * 
					FROM gosm
					WHERE organizationID=? 
					AND YEARWEEK(fromdate) = YEARWEEK(NOW()) 
					AND gosmID NOT IN(SELECT gosmID 
										FROM aform 
										WHERE gosmID IS NOT NULL)";
			$query=$this->db->query($sql, array($org));
			return $query->result();
		}
		
		public function getWeekActsWithPreActs()
		{
			$sql="SELECT *
					FROM gosm a JOIN ref_users b ON a.organizationID=b.userID
					WHERE YEARWEEK(fromdate) = YEARWEEK(NOW())
					AND gosmID IN(SELECT gosmID 
									FROM aform 
									WHERE gosmID IS NOT NULL)";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getWeekActsNoPreActs()
		{
			$sql="SELECT * 
					FROM gosm a JOIN ref_users b ON a.organizationID=b.userID
					WHERE YEARWEEK(fromdate) = YEARWEEK(NOW()) 
					AND gosmID NOT IN(SELECT gosmID 
										FROM aform 
										WHERE gosmID IS NOT NULL)";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getRecentActs()
		{
			$sql="SELECT * 
					FROM aform a JOIN preacts b ON a.preactsID=b.preactsID
					JOIN ref_users c ON b.organizationID=c.userID
					ORDER BY a.datecreated DESC
					LIMIT 20";
			$query=$this->db->query($sql);
			return $query->result();
		}
		
		public function getRecentActsOrg($org)
		{
			$sql="SELECT * 
					FROM aform a JOIN preacts b ON a.preactsID=b.preactsID
					JOIN ref_users c ON b.organizationID=c.userID
					WHERE organizationID=? 
					ORDER BY a.datecreated DESC
					LIMIT 20";
			$query=$this->db->query($sql, array($org));
			return $query->result();
		}
		
	}
?>