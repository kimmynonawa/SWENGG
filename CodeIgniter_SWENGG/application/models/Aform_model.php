<?php
	class Aform_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function addaform2 ($date, $starttime, $endtime,$venue, $enp, $enmp, $reach)
		{
			$createdate = '2016-10-10';//test
			$activityID = 1;//test
			$this->db->insert('aform', array("activityID" => $activityID, "date" => $date, "starttime" => $starttime, "endtime" => $endtime, "ENP" => $enp, "ENMP" => $enmp,"venue" => $venue,"activityreach" => $reach, "datecreated" => $createdate));//UNABLE TO INSERT NEEDS DATA
		}
		
		
		
		
		
	/*public function getOrg(){
			$this->db->where(array("type" => 2));
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getAcro(){
			$this->db->select('acronym');
			$this->db->from('ref_users');
			$res = $this->db->get();
			return $res->result_array();
		}*////
		
	}
?>