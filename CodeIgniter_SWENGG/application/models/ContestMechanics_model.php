<?php
	class ContestMechanics_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function newContestMechanics($generalInfo){
			return $this->db->insert('contestmechanics', array( "preactsID"    => $generalInfo['preactsID'], 
																"guidelines"   => $generalInfo['guidelines']));
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addContestMechanicsDetails($contestMechanicsNum,$mechanicsDetails) {
			$mechanicsDetails = $mechanicsDetails['mechanics[]'];
			for ($i = 0; $i < sizeof($mechanicsDetails); $i++) {
				$this->db->insert('cm_mechanics', array( "contestmechanicsID" => $contestMechanicsNum, 
														 "mechanics" 		  => $mechanicsDetails[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addContestMechanicsCriteria($contestMechanicsNum,$criteriaDetails) {
			$criteriaDetails = $criteriaDetails['criteria[]'];
			for ($i = 0; $i < sizeof($criteriaDetails); $i++) {
				$this->db->insert('cm_criteria', array(	"contestmechanicsID" => $contestMechanicsNum, 
														"criteria" 			 => $criteriaDetails[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addContestMechanicsJudges($contestMechanicsNum,$judges) {
			$judges = $judges['judges[]'];
			for ($i = 0; $i < sizeof($judges); $i++) {
				$this->db->insert('cm_judges', array(	"contestmechanicsID" => $contestMechanicsNum, 
														"name" 				 => $judges[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function addContestMechanicsQuestions($contestMechanicsNum,$questionDetails) {
			$questionDetails = $questionDetails['questions[]'];
			for ($i = 0; $i < sizeof($questionDetails); $i++) {
				$this->db->insert('cm_questions', array(	"contestmechanicsID" => $contestMechanicsNum, 
															"question" 			 => $questionDetails[$i]));
			}
		}

		// REVISED FOR NEW DB
		// TESTED FOR NEW DB
		public function getContestMechanicsNumber($preactsID) {
			$this->db->select('contestmechanicsID');
	        $this->db->from('contestmechanics');
	        $this->db->where('preactsID', $preactsID); 
	        $query = $this->db->get();

	        return $query->row_array();
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