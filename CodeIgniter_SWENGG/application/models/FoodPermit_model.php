<?php
	class FoodPermit_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function createFoodPermit($actno, $name, $IDnum, $position, $email, $mobile, $telephone){
			return $this->db->insert('foodpermit', array("activityID" => $actno, "name" => $name, "IDnumber" => $IDnum, "position" => $position, "email" => $email, "mobile" => $mobile, "telephone" => $telephone));
		}

		public function createFoodPermitDetails($foodPermitNum, $quantity, $unit, $description, $cost) {
			return $this->db->insert('fp_details', array("FOODPERMITno" => $foodPermitNum, "quantity" => $quantity, "unit" => $unit, "description" => $description, "cost" => $cost));
		}

		public function getFoodPermit($actno) {
			$this->db->select('FOODPERMITno');
	        $this->db->from('foodpermit');
	        $this->db->where('activityID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getFoodPermitDetails($foodPermitNum) {
			$this->db->select('quantity,unit,description,cost');
			$this->db->from('fp_details');
			$this->db->where('FOODPERMITno', $foodPermitNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

	}
?>