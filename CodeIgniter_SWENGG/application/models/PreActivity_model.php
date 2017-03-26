<?php
	class PreActivity_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function getPreactDetails($preactID){
			$this->db->where(array("preactsID" => $preactID));
			$this->db->from('aform');
			$this->db->join('ref_activitynature', 'aform.activitynatureID = ref_activitynature.activitynatureID');
			$this->db->join('ref_activitytype', 'aform.activitytypeID = ref_activitytype.activitytypeID');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Get Activity Nature where Actoff = activityoffice
		public function getActivityNature($actoff){
			$this->db->where(array("activityofficeID" => $actoff));
			$this->db->from('ref_activitynature');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Get Activity Type where prooff = processingoffice
		public function getActivityType($prooff){
			$this->db->where(array("processingofficeID" => $prooff));
			$this->db->from('ref_activitytype');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		//Get Activity Reach
		public function getActivityReach(){
			$this->db->from('ref_activityreach');
			$res = $this->db->get();
			return $res->result_array();
		}

		// CREATE PREACTS
		public function createPreacts($organization) {
			date_default_timezone_set('Asia/Manila');
			$this->db->insert('preacts', array( 'organizationID' => $organization,
												'datecreated'	 => date('Y-m-d H:i:s')));
		}

		// GET LATEST PREACTS
		public function getPreacts() {
			$this->db->select_max('preactsID');
			$this->db->from('preacts');
			$query = $this->db->get();
			return $query->row_array();
		} 

		
		//Insert AformGOSM
		public function insertAFormGOSM($preactsID, $title, $aform1, $aform2){
			date_default_timezone_set('Asia/Manila');
			echo $aform1['natact'];
			
			$this->db->insert('aform', array( 'preactsID'		 => $preactsID, 
											  'gosmID'			 => $aform1['actName'],
											  'activityreachID'  => $aform1['reachType'],
											  'activitytypeID'   => $aform1['typeact'], 
											  'activitynatureID' => $aform1['natact'],
											  'enp' 		     => $aform2['enp'], 
											  'enmp' 		     => $aform2['enmp'], 
											  'venue' 		     => $aform2['venue'],
											  'datecreated'      => date('Y-m-d H:i:s'), 
											  'title' 		     => $title));
		}
		
		//Not in  GOSM aform
		public function insertAformNotInGOSM($preactsID, $sas, $aform1, $aform2){
			date_default_timezone_set('Asia/Manila');
			echo $aform1['natact'];

			$this->db->insert('aform', array('preactsID'		=> $preactsID,
											 'title' 		  	=> $aform1['actName'],  
											 'activityreachID'  => $aform1['reachType'],
											 'activitytypeID'   => $aform1['typeact'], 
											 'activitynatureID' => $aform1['natact'],
											 'enp'			  	=> $aform2['enp'], 
											 'enmp' 		  	=> $aform2['enmp'], 
											 'venue' 		  	=> $aform2['venue'],
											 'datecreated' 	  	=> date('Y-m-d H:i:s'), 
											 'sasID' 		  	=> $sas));
		}

		public function createSASForm($preactsID, $sasTypeID, $data) {
			date_default_timezone_set('Asia/Manila');
			$this->db->insert('sas', array( 'preactsID'	    => $preactsID,
											'sasTypeID'		=> $sasTypeID, //Activity not in gosm
											'justification' => $data['reason'],
											'submittedby'	=> $data['submittedby'],
											'dateSubmitted'	=> date('Y-m-d H:i:s')));
		}
		
		public function getSASID(){
			$this->db->select_max('sasID');
			$this->db->from('sas');
			$query = $this->db->get();
			return $query->row_array();
		}

		//Get the Latest Aform
		public function getAformLatest(){
			$this->db->select_max('aformID');
			$this->db->from('aform');
			$res = $this->db->get();
			return $res->row_array();
		}
		
		//Insert Aform DateTime Single Date
		public function insertAformDateTimeSingle($aformID, $sdate, $s1time, $e1time){
			$this->db->insert('aform_date', array('aformID'   => $aformID, 
												  'startdate' => $sdate,
												  'starttime' => $s1time, 'endtime' => $e1time,
												  'type' 	  => 'singledate'));
		}
		
		//Insert Aform DateTime Date Range
		public function insertAformDateTimeRange($aformID, $drsdate, $dredate, $s2time, $e2time){
			$this->db->insert('aform_date', array('aformID'   => $aformID, 
												  'startdate' => $drsdate, 
												  'enddate'   => $dredate,
												  'starttime' => $s2time, 
												  'endtime'   => $e2time, 
												  'type'      => 'daterange'));
		}
		
		//Insert List of Participants
		public function insertLOP($id, $lname, $fname, $mname, $age, $lopid, $waiver){
			$this->db->insert('listofparticipants_details', array(	'IDno' 			   => $id, 	
																	'lastname' 			   => $lname,
																	'firstname' 		   => $fname,	
																	'middleinitial'		   => $mname,
																	'age' 				   => $age, 
																	'listofparticipantsID' => $lopid,
																	'waiver' 			   => $waiver));
		}
		
		//Insert  ng LOP PK
		public function loppk($preactsID){
			$this->db->insert('listofparticipants', array('preactsID' => $preactsID));
		}
		
		//Get the PK of Latest LOP
		public function lopid(){
			$this->db->select_max('listofparticipantsID');
			$this->db->from('listofparticipants');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getAformID($preact){
			$this->db->where(array('preactsID' => $preact));
			$this->db->from('aform');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function getAformDate($aformID){
			$this->db->where(array('aformID' => $aformID));
			$this->db->from('aform_date');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function insertChangeAct($cancellation,$reason, $requestedby, $sas){
			$this->db->insert('activitydetailschanges',
				array( 'sasID' 			=> $sas,
					  'cancellation'	=> $cancellation,
					  'justification'	=> $reason,
					  'requestedby'		=> $requestedby,
					  'datecreated'		=> date('Y-m-d H:i:s')
				));  
		}
		
		public function getCAD(){
			$this->db->select_max('activitydetailschangesID');
			$this->db->from('activitydetailschanges');
			$res = $this->db->get();
			return $res->result_array();
		}
		
		public function insertComDesCAD($activitydetailschangesID, $stime, $etime, $act, $desc, $peric){
			$this->db->insert('adc_newprogramdesign', array(
				'activitydetailschangesID' => $activitydetailschangesID,
				'starttime' => $stime,
				'endtime' => $etime,
				'name' => $act,
				'description' => $desc,
				'personincharge' => $peric
			));
		}
		
		public function insertVenueCAD($newvenue, $activitydetailschangesID){
			$this->db->insert('adc_newvenue', array(
				'activitydetailschangesID' => $activitydetailschangesID,
				'newvenue' => $newvenue
			));
		}
		
		public function insertAformDateTimeSingleCAD($activitydetailschangesID, $sdate, $s1time, $e1time){
			$this->db->insert('adc_newdatetime', array('activitydetailschangesID'   => $activitydetailschangesID, 
												  'newstartdate' => $sdate,
												  'newstarttime' => $s1time, 'newendtime' => $e1time,
												  'type' 	  => 'singledate'));
		}
		
		public function insertAformDateTimeRangeCAD($activitydetailschangesID, $drsdate, $dredate, $s2time, $e2time){
			$this->db->insert('adc_newdatetime', array('activitydetailschangesID'   => $activitydetailschangesID, 
												  'newstartdate' => $drsdate, 
												  'newenddate'   => $dredate,
												  'newstarttime' => $s2time, 
												  'newendtime'   => $e2time, 
												  'type'      => 'daterange'));
		}
		
		
	}
?>