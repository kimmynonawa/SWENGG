<?php
	class FoodPermit_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// TESTED
		public function createFoodPermit($data){
			$this->db->insert('foodpermit', array(	"activityID" 	=> $data['actno'], 
													"name" 		 	=> $data['name'], 
													"IDnumber" 	 	=> $data['IDnum'], 
													"position" 	 	=> $data['position'], 
													"email" 	 	=> $data['email'], 
													"mobile" 	 	=> $data['mobile'], 
													"telephone"  	=> $data['telephone'],
													"organization"  => $data['organization']));
		}

		// TESTED
		public function createFoodPermitDetails($foodPermitNum, $data) {
			$quantity 	 = $data['quantity[]'];
			$unit 	 	 = $data['unit[]'];
			$description = $data['description[]'];
			$cost 		 = $data['cost[]'];

			for ($i = 0; $i < sizeof($quantity); $i++){
				$this->db->insert('fp_details',	array(	"FOODPERMITno" 	=> $foodPermitNum, 
														"quantity" 		=> $quantity[$i], 
														"unit" 			=> $unit[$i], 
														"description" 	=> $description[$i], 
														"cost" 			=> $cost[$i]));
			}
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