<?php
	class p_forms_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		//testing shit out
		function getActs($org)
		{
			$sql="SELECT a.preactsID, a.title FROM aform a JOIN preacts p ON a.preactsID=p.preactsID WHERE p.organizationID=?";
			$query=$this->db->query($sql, array($org));
			return $query->result();
		}
		
		public function minorpub($actno, $pubname, $pubtype, $pubfreq, $pubcost, $pubdate, $obj1, $obj2, $obj3, $cont1, $cont2, $cont3, $tread1, $tread2, $tread3)
		{
			date_default_timezone_set('Asia/Manila');
			$datecreated = date("Y-m-d g:i:s");

			return $this->db->insert('minorpubproposal', array("preactsID" => $actno, "pubname" => $pubname, "releasedate" => $pubdate, 
																"pubtype" => $pubtype, "frequency" => $pubfreq, "estcost" => $pubcost, 
																"objective1" => $obj1, "objective2" => $obj2, "objective3" => $obj3, 
																"content1" => $cont1, "content2" => $cont2, "content3" => $cont3, 
																"target1" => $tread1, "target2" => $tread2, "target3" => $tread3, 
																"datecreated" => $datecreated));
		}
		
		public function minorpub2($pubID, $npages, $bm1, $ssize, $bm2, $ptype, $bm3, $ncolor, $bm4, $ncopies, $bm5, $actno)
		{
			/**
			$this->db->select('minorpubproposalID');
	        $this->db->from('minorpubproposal');
	        $this->db->where('preactsID', $actno); 
	        $query = $this->db->get();

	        $minorpubno = $query->row_array();
			**/
			
			return $this->db->insert('minorpub_details', array("minorpubproposalID" => $pubID, 
																"pageno" => $npages, "pageno_member" => $bm1,
																"spreadsize" => $ssize, "spreadsize_member" => $bm2, 
																"papertype" => $ptype, "papertype_member" => $bm3, 
																"colorno" => $ncolor, "colorno_member" => $bm4, 
																"copyno" => $ncopies, "copyno_member" => $bm5));
		}
		
		public function sas($actno, $titleAct, $submissionType, $reason, $name)
		{
			date_default_timezone_set('Asia/Manila');
			$datecreated = date("Y-m-d g:i:s");

			return $this->db->insert('sas', array("preactsID" => $actno, "sastypeID" => $submissionType, "justification" => $reason, "submittedby" => $name, "datesubmitted" => $datecreated));
		}
		
		public function spca1($actno, $actTitle, $numPersons, $Faculty, $Name, $IDNum, $officeLoc, $CPNo, $TelNo, $Email)
		{
			date_default_timezone_set('Asia/Manila');
			$datecreated = date("Y-m-d g:i:s");

			return $this->db->insert('spca', array("preactsID" => $actno, "requestedby" => $Name, "office" => $officeLoc, 
													"telephone" => $TelNo, "IDno" => $IDNum, "mobile" => $CPNo, "email" => $Email, 
													"ENP" => $numPersons, "facultyincharge" => $Faculty, "datecreated" => $datecreated));
		}
		
		public function spca2($SPCAnum, $lastname, $firstname, $middle, $classification, $mobile, $email) {
			return $this->db->insert('spca_persons', array("spcaID" => $SPCAnum, "lastname" => $lastname, "firstname" => $firstname, "middle" => $middle, 
										"classification" => $classification, "mobile" => $mobile, "email" => $email));
		}
		
		public function spca3($SPCAnum, $startdate, $starttime, $enddate, $endtime, $venue) {
			return $this->db->insert('spca_activity', array("spcaID" => $SPCAnum, "startdate" => $startdate, "starttime" => $starttime, "enddate" => $enddate, 
										"endtime" => $endtime, "venue" => $venue));
		}
		
		public function getMinorPub($actno) {
			$this->db->select('minorpubproposalID');
	        $this->db->from('minorpubproposal');
	        $this->db->where('preactsID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}
		
		public function getSPCA($actno) {
			$this->db->select('spcaID');
	        $this->db->from('spca');
	        $this->db->where('preactsID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getSPCApersons($SPCAno) {
			$this->db->select('lastname,firstname,middle,classification,mobile,email');
			$this->db->from('spca_persons');
			$this->db->where('spcaID', $SPCAno);
	        $query = $this->db->get();

	        return $query->result_array();
		}
		
		public function getSPCAactivity($SPCAno) {
			$this->db->select('startdate,starttime,enddate,endtime,venue');
			$this->db->from('spca_activity');
			$this->db->where('spcaID', $SPCAno);
	        $query = $this->db->get();

	        return $query->result_array();
		}
	}
?>