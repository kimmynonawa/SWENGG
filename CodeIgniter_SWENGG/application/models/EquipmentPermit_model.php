<?php
	class EquipmentPermit_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function createEquipmentEntryPermit($actno, $name, $position, $reasonRequest){
			date_default_timezone_set('Asia/Manila');
			$dateCreated = date("Y-m-d g:i:s");

			return $this->db->insert('equipmentpermit', array("activityID" => $actno, "datecreated" => $dateCreated, "requestedby" => $name, "requestedby_position" => $position, "body" => $reasonRequest));
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