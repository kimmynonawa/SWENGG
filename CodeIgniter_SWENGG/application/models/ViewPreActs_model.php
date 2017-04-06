<?php
	class ViewPreActs_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function aformExists($act)
		{
			$sql="SELECT * 
					FROM aform 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function lopExists($act)
		{
			$sql="SELECT * 
					FROM listofparticipants 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function contestExists($act)
		{
			$sql="SELECT * 
					FROM contestmechanics 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function foodExists($act)
		{
			$sql="SELECT * 
					FROM foodpermit 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function trademarkExists($act)
		{
			$sql="SELECT * 
					FROM trademarkuse 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function minorpubExists($act)
		{
			$sql="SELECT * 
					FROM minorpubproposal 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function sasExists($act)
		{
			$sql="SELECT * 
					FROM sas 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function spcaExists($act)
		{
			$sql="SELECT * 
					FROM spca 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		/**
		*/
		
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
		
		public function getMinorPubDetails($actno)
		{
			$sql="SELECT * 
					FROM minorpubproposal a JOIN minorpub_details b ON a.minorpubproposalID=b.minorpubproposalID 
					WHERE a.preactsID=?";
			$query=$this->db->query($sql, array($actno));
			return $query->result();
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

		public function getFoodPermitRequestInfo($foodPermitNum) {
			$this->db->select('name,IDno,position,email,mobile,telephone');
	        $this->db->from('foodpermit');
	        $this->db->where('foodpermitID', $foodPermitNum); 
	        $query = $this->db->get();

	        return $query->row_array();
		}
		
		public function getTrademarkUseApproval($preactsID) {
			$this->db->select('trademarkuseID');
	        $this->db->from('trademarkuse');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseDetails($preactsID) {
			$this->db->select('name,purpose,duration,starttime,endtime,venue,datecreated');
			$this->db->from('trademarkuse');
			$this->db->join('trademarkuse_tm', 'trademarkuse.trademarkuseID = trademarkuse_tm.trademarkuseID');
			$this->db->join('REF_trademarks', 'trademarkuse_tm.trademarkID = REF_trademarks.trademarkID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseRequestInfo($trademarkUseNum) {
			$this->db->select('requestedby,requestedby_position,IDno,email,telephone,mobile');
			$this->db->from('trademark_requestinginfo');
			$this->db->where('trademarkuseID', $trademarkUseNum);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getActivityTypes() {
			$query = $this->db->query('SELECT activityTypeID, activityType 
										 FROM ref_activitytype 
									 ORDER BY activityTypeID ASC');
	        return $query->result();
		}

		public function getTrademarks($type) {
			if ($type == 1) $trademarkType = "Logos/Design";
			else if ($type == 2) $trademarkType = "DLSU Labels";
			else if ($type == 3) $trademarkType = "DLSU Taglines";

			$query = $this->db->query("SELECT trademarkID, name 
										 FROM ref_trademarks 
										WHERE type LIKE '{$trademarkType}' 
									 ORDER BY trademarkID ASC");
	        return $query->result();
		}

		public function getDifferentTrademarks(){
			header("Content-type: application/json");
			$result = $this->ApprovalTrademark_model->getTrademarks($this->input->post('trademark'));
			echo json_encode($result);
		}
		
		public function getContestMechanicsGuidelines($contestMechanicsNum) {
			$this->db->select('guidelines, academiccontest');
	        $this->db->from('contestmechanics');
	        $this->db->where('contestmechanicsID', $contestMechanicsNum); 
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestMechanicsDetails($contestMechanicsNum) {
			$this->db->select('mechanics');
			$this->db->from('cm_mechanics');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestCriteria($contestMechanicsNum) {
			$this->db->select('criteria');
			$this->db->from('cm_criteria');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestJudges($contestMechanicsNum) {
			$this->db->select('name');
			$this->db->from('cm_judges');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestQuestions($contestMechanicsNum) {
			$this->db->select('question');
			$this->db->from('cm_questions');
			$this->db->where('contestmechanicsID', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}
	}
?>