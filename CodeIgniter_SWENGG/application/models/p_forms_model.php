<?php
	class p_forms_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function minorpub($pubname, $pubtype, $pubfreq, $pubcost, $pubdate, $obj1, $obj2, $obj3, $cont1, $cont2, $cont3, $targ1, $targ2, $targ3,
								$pagenum, $pagemember, $spreadsize, $spreadmember, $papertype, $papermember, $colornum, $colormember, $copynum, $copymember, $pubcontent)
		{
			//activityID and organization should come from session, datecreated should be now()
			$this->db->insert('MINORPUBPROPOSAL', array("activityID" => 1, "organization" => 1,
														"pubname" => $pubname, "releasedate" => $pubdate, "pubtype" => $pubtype, "frequency" => $pubfreq,
														"estcost" => $pubcost, "objective1" => $obj1, "objective2" => $obj2, "objective3" => $obj3,
														"content1" => $cont1, "content2" => $cont2, "content3" => $cont3,
														"target1" => $targ1, "target2" => $targ2, "target3" => $targ3,
														"datecreated" => "01/01/2000 01:01:01"));
														
			//MINORPUBPROPOSALno should come from the current minor pub proposal no being created
			$this->db->insert('MINORPUB_DETAILS', array("idMINORPUB_DETAILS" => 1, "MINORPUBPROPOSALno" => 1,
														"pageno" => $pagenum, "pageno_member" => $pagemember,
														"spreadsize" => $spreadsize, "spreadsize_member" => $spreadmember,
														"papertype" => $papertype, "papertype_member" => $papermember,
														"colorno" => $colornum, "colorno_member" => $colormember,
														"copyno" => $copynum, "copyno_member" => $copymember));
		}
		
		public function sas($activity, $submission, $reason, $submittedby, $president)
		{
			$this->db->insert('SAS', array("type" => $submission, "justification" => $reason, "submittedby" => $submittedby, 
											"datesubmitted" => "01/01/2000 01:01:01", "notedby" => "Null", "datenoted" => "01/01/2000 01:01:01"));
											
			
			$this->db->select_max('SASno');
			$query = $this->db->get('SAS');

			$data = array
			(
               'SASno' => $query
            );
			
			$this->db->where('activityID', $activity);
			$this->db->update('activity', $data); 
		}
		
		public function spca($act, $enmp, $enp, $faculty, $type, $org, $name, $IDnum, $office, $cellphone, $telephone, $email)
		{
			$this->db->insert('SPCA', array("activityID" => $act, "requestedby" => $org, "requestedby_position" => $name, 
											"office" => $office, "telephone" => $telephone, "IDno" => $IDnum, "mobile" => $cellphone,
											"email" => $email, "facultyincharge" => $faculty, "campusaccesstype" => $type, "datecreated" => "01/01/2000 01:01:01",
											"ENP" => $enp, "ENMP" => $enmp));
		}
	}
?>