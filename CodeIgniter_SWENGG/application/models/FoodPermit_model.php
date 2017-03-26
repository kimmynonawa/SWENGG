<?php
	class FoodPermit_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function createFoodPermit($data){
			$this->db->insert('foodpermit', array(	"preactsID" 	=> $data['preactsID'], 
													"name" 		 	=> $data['name'], 
													"IDno"	 	 	=> $data['IDnum'], 
													"position" 	 	=> $data['position'], 
													"email" 	 	=> $data['email'], 
													"mobile" 	 	=> $data['mobile'], 
													"telephone"  	=> $data['telephone'],));
		}

		// TESTED FOR NEW DB
		public function createFoodPermitDetails($foodPermitNum, $data) {
			$quantity 	 = $data['quantity[]'];
			$unit 	 	 = $data['unit[]'];
			$description = $data['description[]'];
			$cost 		 = $data['cost[]'];

			for ($i = 0; $i < sizeof($quantity); $i++){
				$this->db->insert('fp_details',	array(	"foodpermitID" 	=> $foodPermitNum, 
														"quantity" 		=> $quantity[$i], 
														"unit" 			=> $unit[$i], 
														"description" 	=> $description[$i], 
														"cost" 			=> $cost[$i]));
			}
		}

		public function getFoodPermit($preactsID) {
			$this->db->select('foodpermitID');
	        $this->db->from('foodpermit');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getFoodPermitDetails($foodPermitNum) {
			$this->db->select('quantity,unit,description,cost');
			$this->db->from('fp_details');
			$this->db->where('foodpermitID', $foodPermitNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

	}
?>