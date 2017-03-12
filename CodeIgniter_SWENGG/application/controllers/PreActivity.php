<?php
	class PreActivity extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
		}
		
		public function preacts(){
			$this->load->view('ORG_PreAct');
		}
		
		public function preacts2(){
			if ($this->input->post('yesno') == 'yes'){
				redirect('AForm/loadAddAform');
			}
			else if ($this->input->post('yesno') == 'no'){
				redirect('preActivity/sas');
			}
		}
		
		public function sas(){
			$this->load->view('ORG_PreAct_SpecialApprovalSlip');
		}
		
	}
?>