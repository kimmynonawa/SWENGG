<?php
	class EquipmentPermit_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// TESTED
		public function createEquipmentEntryPermit($data){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s"); 

			return $this->db->insert('equipmentpermit', array(	"activityID" 			=> $data['actno'], 
															 	"requestedby" 			=> $data['name'], 
															 	"requestedby_position" 	=> $data['position'],
															 	"body"					=> $data['reasonRequest'],
															 	"organization"			=> $data['organization'],
															 	"datecreated" 			=> $dateCreated));
		}

		public function getEquipmentPermit($actno) {
			$this->db->select('idEQUIPMENTPERMIT');
	        $this->db->from('equipmentpermit');
	        $this->db->where('activityID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getEquipmentPermitDetails($permitNum) {
			$this->db->select('datecreated,requestedby,requestedby_position,body');
	        $this->db->from('equipmentpermit');
	        $this->db->where('idEQUIPMENTPERMIT', $permitNum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}
	}
?>