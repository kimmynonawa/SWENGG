<?php
	class p_forms_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function minorpub($data, $org, $orgname, $activity)
		{
			$this->db->insert('minorpubproposal', 
			array(
				"activityID" => $activity,
				"organization" => $org,
				"pubname" => $data['pubname'],
				"releasedate" => $data['tdate'],
				"pubtype" => $data['pubtype'],
				"frequency" => $data['pubfreq'],
				"estcost" => $data['pubcost'],
				"objective1" => $data['obj1'],
				"objective2" => $data['obj2'],
				"objective3" => $data['obj3'],
				"content1" => $data['cont1'],
				"content2" => $data['cont2'],
				"content3" => $data['cont3'],
				"target1" => $data['tread1'],
				"target2" => $data['tread2'],
				"target3" => $data['tread3'],
				"datecreated" => date('Y-m-d H:i:s'),
				"pageno" => $data['npages'],
				"pageno_member" => $data['bm1'],
				"spreadsize" => $data['ssize'],
				"spreadsize_member" => $data['bm2'],
				"papertype" => $data['ptype'],
				"papertype_member" => $data['bm3'],
				"colorno" => $data['ncolor'],
				"colorno_member" => $data['bm4'],
				"copyno" => $data['ncopies'],
				"copyno_member" => $data['bm5']
			)
			
			);
		}
		
		public function sasform($data, $org, $orgname)
		{
			$this->db->insert('sas', 
			array(
				"type" => $data['submissionType'],
				"justification" => $data['reason'],
				"submittedby" => $data['name'],
				"datesubmitted" => date('Y-m-d H:i:s'),
				"notedby" => "Null",
				"datenoted" => "Null",
				"organization" => $org
			)
			
			);
		}
		
		public function spca($data, $org, $orgname, $activity)
		{
			$this->db->insert('spca', 
			array(
				"activityID" => $activity,
				"requestedby" => $data['Name'],
				"requestedby_position" => "Null",
				"office" => date('Y-m-d H:i:s'),
				"telephone" => $data['TelNo'],
				"IDno" => $data['IDnum'],
				"mobile" => $data['CPno'],
				"email" => $data['Email'],
				"facultyincharge" => 'Null',
				"datecreated" => date('Y-m-d H:i:s'),
				"ENP" => $data['numPersons'],
				"ENMP" => 0
			)
			
			);
		}
	}
?>