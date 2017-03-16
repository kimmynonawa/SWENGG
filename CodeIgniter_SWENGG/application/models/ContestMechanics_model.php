<?php
	class ContestMechanics_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// TESTED
		public function newContestMechanics($generalInfo){
			return $this->db->insert('contestmechanics', array( "activityID"   => $generalInfo['actno'], 
																"guidelines"   => $generalInfo['guidelines'],
																"organization" => $generalInfo['organization']));
		}

		// TESTED
		public function addContestMechanicsDetails($contestMechanicsNum,$mechanicsDetails) {
			$mechanicsDetails = $mechanicsDetails['mechanics[]'];
			for ($i = 0; $i < sizeof($mechanicsDetails); $i++) {
				$this->db->insert('cm_mechanics', array( "CONTESTMECHANICSno" => $contestMechanicsNum, 
														 "mechanics" 		  => $mechanicsDetails[$i]));
			}
		}

		// TESTED
		public function addContestMechanicsCriteria($contestMechanicsNum,$criteriaDetails) {
			$criteriaDetails = $criteriaDetails['criteria[]'];
			for ($i = 0; $i < sizeof($criteriaDetails); $i++) {
				$this->db->insert('cm_criteria', array(	"CONTESTMECHANICSno" => $contestMechanicsNum, 
														"criteria" 			 => $criteriaDetails[$i]));
			}
		}

		// TESTED
		public function addContestMechanicsJudges($contestMechanicsNum,$judges) {
			$judges = $judges['judges[]'];
			for ($i = 0; $i < sizeof($judges); $i++) {
				$this->db->insert('cm_judges', array(	"CONTESTMECHANICSno" => $contestMechanicsNum, 
														"name" 				 => $judges[$i]));
			}
		}

		// TESTED
		public function addContestMechanicsQuestions($contestMechanicsNum,$questionDetails) {
			$questionDetails = $questionDetails['questions[]'];
			for ($i = 0; $i < sizeof($questionDetails); $i++) {
				$this->db->insert('cm_questions', array(	"CONTESTMECHANICSno" => $contestMechanicsNum, 
															"question" 			 => $questionDetails[$i]));
			}
		}

		public function getContestMechanicsNumber($actno) {
			$this->db->select('CONTESTMECHANICSno');
	        $this->db->from('contestmechanics');
	        $this->db->where('activityID', $actno); 
	        $query = $this->db->get();

	        return $query->row_array();
		}

		public function getContestMechanicsDetails($contestMechanicsNum) {
			$this->db->select('mechanics');
			$this->db->from('cm_mechanics');
			$this->db->where('CONTESTMECHANICSno', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestCriteria($contestMechanicsNum) {
			$this->db->select('criteria');
			$this->db->from('cm_criteria');
			$this->db->where('CONTESTMECHANICSno', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestJudges($contestMechanicsNum) {
			$this->db->select('name');
			$this->db->from('cm_judges');
			$this->db->where('CONTESTMECHANICSno', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}

		public function getContestQuestions($contestMechanicsNum) {
			$this->db->select('question');
			$this->db->from('cm_questions');
			$this->db->where('CONTESTMECHANICSno', $contestMechanicsNum);
	        $query = $this->db->get();

	        return $query->result_array();
		}
	}
?>