<?php
	class PreActivityView_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getPreActs($org){
			$this->db->where(array('organizationID' => $org	));
			$this->db->from('aform');
			$this->db->join('preacts', 'aform.preactsID = preacts.preactsID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewAform($id){
			$this->db->where(array("preactsID"=>$id));
			$this->db->from('aform');
			$this->db->join('ref_activitynature', 'aform.activitynatureID = ref_activitynature.activitynatureID');
			$this->db->join('ref_activitytype', 'aform.activitytypeID = ref_activitytype.activitytypeID');
			$this->db->join('ref_activityreach', 'aform.activityreachID = ref_activityreach.activityreachID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getAformDate($aformID){
			$this->db->where(array('aformID' => $aformID));
			$this->db->from('aform_date');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewLOP($id){
			$this->db->where(array("preactsID"=>$id));
			$this->db->from('listofparticipants');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewLOPDetails($lopID){
			$this->db->where(array("listofparticipantsID"=>$lopID));
			$this->db->from('listofparticipants_details');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewSAS($id){
			$this->db->where(array("preactsID"=>$id));
			$this->db->from('sas');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewCAD($sasID){
			$this->db->where(array("sasID"=>$sasID));
			$this->db->from('activitydetailschanges');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewCADVenue($cadID){
			$this->db->where(array("activitydetailschangesID"=>$cadID));
			$this->db->from('adc_newvenue');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewCADDate($cadID){
			$this->db->where(array("activitydetailschangesID"=>$cadID));
			$this->db->from('adc_newdatetime');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function viewCADDes($cadID){
			$this->db->where(array("activitydetailschangesID"=>$cadID));
			$this->db->from('adc_newprogramdesign');
			$res = $this->db->get();
			return $res->result_array();
		}
		
	}
?>