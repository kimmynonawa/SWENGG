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
		
		public function pprExists($act)
		{
			$sql="SELECT * 
					FROM ppr 
					WHERE preactsID=?";
			$query=$this->db->query($sql, array($act));
			return $query->num_rows();
		}
		
		public function changeExists($act)
		{
			$sql="SELECT * 
					FROM activitydetailschanges a JOIN sas b ON a.sasID=b.sasID
					WHERE b.preactsID=?";
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

		public function getFoodPermitDetails($preactsID) {
			$this->db->select('quantity,unit,description,cost');
			$this->db->from('fp_details fd');
			$this->db->join('foodpermit fp', 'fp.foodpermitID = fd.foodpermitID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getFoodPermitRequestInfo($preactsID) {
			$this->db->select('name,IDno,position,email,mobile,telephone');
	        $this->db->from('foodpermit');
			$this->db->where('preactsID', $preactsID);
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
			$this->db->select('name,purpose,duration,startdate,enddate,venue,datecreated');
			$this->db->from('trademarkuse');
			$this->db->join('trademarkuse_tm', 'trademarkuse.trademarkuseID = trademarkuse_tm.trademarkuseID');
			$this->db->join('REF_trademarks', 'trademarkuse_tm.trademarkID = REF_trademarks.trademarkID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getTrademarkUseRequestInfo($preactsID) {
			$this->db->select('requestedby,requestedby_position,IDno,email,telephone,mobile');
			$this->db->from('trademark_requestinginfo tr');
			$this->db->join('trademarkuse t', 't.trademarkuseID = tr.trademarkuseID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// NEW
		public function getTrademarksList($preactsID) {
			$this->db->select('name');
			$this->db->from('trademarkuse t');
			$this->db->join('trademarkuse_tm tm', 't.trademarkuseID = tm.trademarkuseID');
			$this->db->join('REF_trademarks tr', 'tm.trademarkID = tr.trademarkID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
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
		
		public function getContestMechanicsGuidelines($preactsID) {
			$this->db->select('guidelines, academiccontest');
	        $this->db->from('contestmechanics');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestMechanicsDetails($preactsID) {
			$this->db->select('mechanics');
			$this->db->from('cm_mechanics cm');
			$this->db->join('contestmechanics c', 'c.contestmechanicsID = cm.contestmechanicsID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestCriteria($preactsID) {
			$this->db->select('criteria');
			$this->db->from('cm_criteria cc');
			$this->db->join('contestmechanics c', 'c.contestmechanicsID = cc.contestmechanicsID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestJudges($preactsID) {
			$this->db->select('name');
			$this->db->from('cm_judges cj');
			$this->db->join('contestmechanics c', 'c.contestmechanicsID = cj.contestmechanicsID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestQuestions($preactsID) {
			$this->db->select('question');
			$this->db->from('cm_questions cq');
			$this->db->join('contestmechanics c', 'c.contestmechanicsID = cq.contestmechanicsID');
			$this->db->where('preactsID', $preactsID);
	        $query = $this->db->get();

	        return $query->result_array();
		}
		
		// CATHY PPR
		// This function gets the PPR of an activity
		// @preactsID is an INT that is the ID of an activity
		// @return the ID of the PPR of an activity
		public function getPPR($preactsID) {
			$this->db->select('pprID');
	        $this->db->from('PPR');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getPPRDetails($preactsID) {
			$this->db->select('objective1, objective2, objective3,context1,context2,context3');
			$this->db->from('ppr');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->row_array();
		}

		public function getProgramDesign($preactsID) {
			$this->db->select('starttime,endtime,duration,name,description,personincharge');
			$this->db->from('ppr_programdesign pd');
			$this->db->join('ppr p', 'p.pprID = pd.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the ID of the PPR Funds of an activity
		public function getFundsNum($preactsID) {
			$this->db->select('ppr_fundsID');
	        $this->db->from('PPR_FUNDS pf');
			$this->db->join('ppr p', 'p.pprID = pf.pprID');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// NEW
		// This function gets the funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the ID of the PPR Funds of an activity
		public function getFunds($preactsID) {
			$this->db->select('orgfunds,participantsfee,others');
	        $this->db->from('ppr_funds pf');
			$this->db->join('ppr p', 'p.pprID = pf.pprID');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		// This function gets the list of funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of funds for an activity
		public function getSourceFunds($preactsID) {
			$this->db->select('orgfunds, participantsfee, others');
			$this->db->from('ppr_funds pf');
			$this->db->join('ppr p', 'p.pprID = pf.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the sum of funds
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the sum of source funds
		public function getSourceFundsTotalAmount($preactsID) {
			$query = $this->db->query("SELECT (SUM(orgfunds)+SUM(participantsfee)+SUM(others)) AS 'totalAmount'
										 FROM ppr_funds
										WHERE preactsID = {$preactsID}");
	        return $query->result();
		}

		// This function gets the list of funds from other sources of an activity
		// @param $PPRFundsNum is an INT that is the newly filed PPR Funds Num
		// @return an array containing the list of funds  from other sources for an activity
		public function getOtherSourceFunds($preactsID) {
			$this->db->select('source, amount');
			$this->db->from('ppr_otherfunds po');
			$this->db->join('ppr_funds pf', 'pf.ppr_fundsID = po.ppr_fundsID');
			$this->db->join('ppr p', 'p.pprID = pf.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// EDITED
		// This function gets the list of organizational funds of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of organizational funds for an activity
		public function getOrgFunds($preactsID) {
			$this->db->select('operationalfunds, depositoryfunds, depository_asof, otherfunds, totaldisbursement, lessexpenses, balance');
			$this->db->from('ppr_orgfunds po');
			$this->db->join('ppr p', 'p.pprID = po.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of expenses for an activity
		public function getExpenses($preactsID) {
			$this->db->select('material, quantity, unitcost, totalcost');
			$this->db->from('ppr_expenses pe');
			$this->db->join('ppr p', 'p.pprID = pe.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the sume of expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return the sum of expenses for an activity
		public function getExpensesTotalAmount($preactsID) {
			$query = $this->db->query("SELECT SUM(totalcost) AS 'totalAmount'
										 FROM ppr_expenses
										WHERE preactsID = {$preactsID}");
	        return $query->result();
		}

		// EDITED 12:17AM APRIL 8
		// This function gets the list of projected income of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of projected income for an activity
		public function getProjectedIncome($preactsID) {
			$this->db->select('item, quantity, sellingprice,amount');
			$this->db->from('ppr_projectedincome pi');
			$this->db->join('ppr p', 'p.pprID = pi.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// EDITED 12:17AM APRIL 8
		// This function gets the list of projected expenses of an activity
		// @param $PPRnum is an INT that is the newly filed PPR
		// @return an array containing the list of projected expenses for an activity
		public function getProjectedExpenses($preactsID) {
			$this->db->select('item, quantity, sellingprice,amount');
			$this->db->from('ppr_projectedexpenses pe');
			$this->db->join('ppr p', 'p.pprID = pe.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// This function gets the list of project heads of an activity
		// @param $activityID is an INT that is the ID of the activity
		// @return an array containing the list of project heads
		public function getProjectHeads($preactsID) {
			$this->db->select('name,contactnumber');
			$this->db->from('ppr_projectheads ph');
			$this->db->join('ppr p', 'p.pprID = ph.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->result_array();
		}

		// NEW
		public function getProvisions($preactsID) {
			$this->db->select('person1,person2,position1,position2,pp.preparedby,treasurer,faculty,president');
			$this->db->from('ppr_provisions pp');
			$this->db->join('ppr p', 'p.pprID = pp.pprID');
			$this->db->where('preactsID', $preactsID);
			$query = $this->db->get();

	        return $query->row_array();
		}

		// This function gets the details of an activity
		// @param $actid is an INT that is the ID of the activity
		// @return an array that contains the details of an activity
		public function getActivityDetails($actid) {
			$this->db->select('title,startdate,enddate,starttime,endtime,venue,activitynature,activitytype,activityreach,ENP,ENMP,a.activitytypeID');
			$this->db->from('aform a');
			$this->db->join('ref_activitynature an', 'a.activitynatureID = an.activitynatureID');
			$this->db->join('ref_activitytype at', 'a.activitytypeID = at.activitytypeID');
			$this->db->join('ref_activityreach ar', 'a.activityreachID = ar.activityreachID');
			$this->db->join('aform_date ad', 'a.aformID = ad.aformID');


			$res = $this->db->get();
			return $res->result_array();
		}
	}
?>