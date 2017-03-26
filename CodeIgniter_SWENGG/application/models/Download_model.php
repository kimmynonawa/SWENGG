<?php
	class Download_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getAform($i){
			$this->db->where(array('aformno' => $i));
			$this->db->from('Aform');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>