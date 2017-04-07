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
		
		public function getSASdetails($actno)
		{
			$sql="SELECT * 
					FROM sas a JOIN ref_sastype b ON a.sastypeID=b.sastypeID 
					JOIN aform c ON a.preactsID=c.preactsID 
					JOIN preacts d ON a.preactsID=d.preactsID
					JOIN ref_users e ON d.organizationID=e.userID
					WHERE a.preactsID=?";
			$query=$this->db->query($sql, array($actno));
			return $query->result();
		}
		
		public function getSPCAdetails($actno)
		{
			$sql="SELECT *, a.email AS email 
					FROM spca a JOIN preacts b ON a.preactsID=b.preactsID 
					JOIN ref_users c ON b.organizationID=c.userID 
					JOIN aform d ON a.preactsID=d.preactsID
					WHERE a.preactsID=?";
			$query=$this->db->query($sql, array($actno));
			return $query->result();
		}
		
		public function getSPCAactivitydetails($actno)
		{
			$sql="SELECT * 
					FROM spca a JOIN spca_activity b ON a.spcaID=b.spcaID 
					WHERE a.preactsID=?";
			$query=$this->db->query($sql, array($actno));
			return $query->result();
		}
		
		public function getSPCApersonsdetails($actno)
		{
			$sql="SELECT * 
					FROM spca a JOIN spca_persons b ON a.spcaID=b.spcaID 
					WHERE a.preactsID=?";
			$query=$this->db->query($sql, array($actno));
			return $query->result();
		}
	}
?>