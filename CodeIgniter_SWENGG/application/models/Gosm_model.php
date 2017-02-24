<?php
	class Gosm_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getGosmDetails($actno){
			
			$this->db->where(array("activityID" => $actno));
			$this->db->from('Activity');
			$this->db->join('ref_activitynature', 'Activity.activitynature = ref_activitynature.idref_activitynature');
			$this->db->join('ref_activitytype', 'Activity.activitytype = ref_activitytype.idref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//CENCOMM
		public function getCenCommCommunications($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_communications');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_communications.idcencomm_communications');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommDocumentations($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_documentations');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_documentations.idcencomm_documentations');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommExternals($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_externals');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_externals.idcencomm_externals');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommFinance($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_finance');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_finance.idcencomm_finance');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommHR($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_hr');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_hr.idcencomm_hr');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommInternals($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_internals');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_internals.idcencomm_internals');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getCenCommPromotions($actno){
			
			$this->db->where(array("cencomm.activityID" => $actno));
			$this->db->from('cencomm_promotions');
			$this->db->join('cencomm', 'cencomm.cencommno = cencomm_promotions.idcencomm_promotions');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//OTHERS
		public function getOthersEquipments($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_equipment');
			$this->db->join('others', 'others.othersno = others_equipment.idothers_equipment');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getOthersHosts($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_hosts');
			$this->db->join('others', 'others.othersno = others_hosts.idothers_hosts');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getOthersPhotographers($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_photographers');
			$this->db->join('others', 'others.othersno = others_photographers.idothers_photographers');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getOthersSpeakers($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_speakers');
			$this->db->join('others', 'others.othersno = others_speakers.idothers_speakers');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getOthersSponsors($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_sponsors');
			$this->db->join('others', 'others.othersno = others_sponsors.idothers_sponsors');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getOthersVideographers($actno){
			
			$this->db->where(array("others.activityID" => $actno));
			$this->db->from('others_videographers');
			$this->db->join('others', 'others.othersno = others_videographers.idothers_videographers');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		
	}
?>