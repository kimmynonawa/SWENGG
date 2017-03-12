<?php
	class ContestMechanics_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}
		
		public function newContestMechanics($actno,$guidelines){
			return $this->db->insert('contestmechanics', array("activityID" => $actno, "guidelines" => $guidelines));
		}

		public function addContestMechanicsDetails($contestMechanicsNum,$mechanicsDetails) {
			return $this->db->insert('cm_mechanics', array("CONTESTMECHANICSno" => $contestMechanicsNum, "mechanics" => $mechanicsDetails));
		}

		public function addContestMechanicsCriteria($contestMechanicsNum,$criteriaDetails) {
			return $this->db->insert('cm_criteria', array("CONTESTMECHANICSno" => $contestMechanicsNum, "criteria" => $criteriaDetails));
		}

		public function addContestMechanicsJudges($contestMechanicsNum,$judgeName) {
			return $this->db->insert('cm_judges', array("CONTESTMECHANICSno" => $contestMechanicsNum, "name" => $judgeName));
		}

		public function addContestMechanicsQuestions($contestMechanicsNum,$questionDetails) {
			return $this->db->insert('cm_questions', array("CONTESTMECHANICSno" => $contestMechanicsNum, "question" => $questionDetails));
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