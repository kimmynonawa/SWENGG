<?php

	class p_forms_controller extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model("p_forms_model");
		}

		public function loadMinorPub()
		{
			$this->load->view('ORG_PreAct_MinorPublicationProposal');
		}
		
		public function minorpub_form()
		{
			$this->form_validation->set_rules('pubname', 'pubname', 'required');
			$this->form_validation->set_rules('pubtype', 'pubtype', 'required');
			$this->form_validation->set_rules('pubfreq', 'pubfreq', 'required');
			$this->form_validation->set_rules('pubcost', 'pubcost', 'required');
			$this->form_validation->set_rules('tdate', 'tdate', 'required');
			$this->form_validation->set_rules('obj1', 'obj1', 'required');
			$this->form_validation->set_rules('obj2', 'obj2', 'required');
			$this->form_validation->set_rules('obj3', 'obj3', 'required');
			$this->form_validation->set_rules('cont1', 'cont1', 'required');
			$this->form_validation->set_rules('cont2', 'cont2', 'required');
			$this->form_validation->set_rules('cont3', 'cont3', 'required');
			$this->form_validation->set_rules('tread1', 'tread1', 'required');
			$this->form_validation->set_rules('tread2', 'tread2', 'required');
			$this->form_validation->set_rules('tread3', 'tread3', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_MinorPublicationProposal');
			}
			
			else  
			{
				$data = array
				(
					'pubname' 	=> 	$this->input->post('pubname'),
					'pubtype' 	=>	$this->input->post('pubtype'),
					'pubfreq' 	=> 	$this->input->post('pubfreq'),
					'pubcost' 	=> 	$this->input->post('pubcost'),
					'tdate' 	=> 	$this->input->post('tdate'),
					'obj1' 		=>	$this->input->post('obj1'),
					'obj2' 		=>	$this->input->post('obj2'),
					'obj3' 		=>	$this->input->post('obj3'),
					'cont1' 	=> 	$this->input->post('cont1'),
					'cont2' 	=> 	$this->input->post('cont2'),
					'cont3' 	=> 	$this->input->post('cont3'),
					'tread1' 	=> 	$this->input->post('tread1'),
					'tread2' 	=> 	$this->input->post('tread2'),
					'tread3' 	=>	$this->input->post('tread3'),
				);
			}
		}
		
		public function loadMinorPub2()
		{
			$this->load->view('ORG_PreAct_MinorPublicationProposal2');
		}
		
		public function minorpub_form2()
		{
			$this->form_validation->set_rules('npages', 'npages', 'required');
			$this->form_validation->set_rules('ssize', 'ssize', 'required');
			$this->form_validation->set_rules('ptype', 'ptype', 'required');
			$this->form_validation->set_rules('ncolor', 'ncolor', 'required');
			$this->form_validation->set_rules('ncopies', 'ncopies', 'required');
			$this->form_validation->set_rules('pcont', 'pcont', 'required');
			$this->form_validation->set_rules('bm1', 'bm1', 'required');
			$this->form_validation->set_rules('bm2', 'bm2', 'required');
			$this->form_validation->set_rules('bm3', 'bm3', 'required');
			$this->form_validation->set_rules('bm4', 'bm4', 'required');
			$this->form_validation->set_rules('bm5', 'bm5', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_MinorPublicationProposal');
			}
			
			else  
			{
				$data = array
				(
					'npages' 	=> 	$this->input->post('npages'),
					'ssize' 	=> 	$this->input->post('ssize'),
					'ptype' 	=> 	$this->input->post('ptype'),
					'ncolor' 	=> 	$this->input->post('ncolor'),
					'ncopies' 	=> 	$this->input->post('ncopies'),
					'pcont' 	=> 	$this->input->post('pcont'),
					'bm1' 		=>	$this->input->post('bm1'),
					'bm2' 		=> 	$this->input->post('bm2'),
					'bm3' 		=> 	$this->input->post('bm3'),
					'bm4' 		=> 	$this->input->post('bm4'),
					'bm5' 		=> 	$this->input->post('bm5'),
				);
				
				//SESSION VARIABLES
				$org = $this->session->userdata('org')[0]['userID'];
				$orgname = $this->session->userdata('org')[0]['acrnoym'];
				$activity = 1; //SESSION VARIABLE!!!
				
				$this->p_forms_model->minorpub($data, $org, $orgname, $activity);
				$data = array ("success" => "true");
				$this->load->view('ORG_PreAct_MinorPublicationProposal', $data);
			}
		}
		
		public function loadSASform()
		{
			$this->load->view('ORG_PreAct_SpecialApprovalSlip');
		}
		
		public function sas_form()
		{
			$this->form_validation->set_rules('actType', 'actType', 'required');
			$this->form_validation->set_rules('submissionType', 'submissionType', 'required');
			$this->form_validation->set_rules('reason', 'reason', 'required');
			$this->form_validation->set_rules('name', 'name', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_SpecialApprovalSlip');
			}
			
			else  
			{
				$data = array
				(
					'actType' 			=> 	$this->input->post('actType'),
					'submissionType' 	=> 	$this->input->post('submissionType'),
					'reason' 			=> 	$this->input->post('reason'),
					'name' 				=> 	$this->input->post('name')
				);
				
				//SESSION VARIABLES
				$org = $this->session->userdata('org')[0]['userID'];
				$orgname = $this->session->userdata('org')[0]['acrnoym'];
				
				$this->p_forms_model->sasform($data, $org, $orgname);
				$data = array ("success" => "true");
				$this->load->view('ORG_PreAct_SpecialApprovalSlip', $data);
			}
		}
		
		public function loadSPCA1()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
		}
		
		public function loadSPCA2()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess2');
		}
		
		public function loadSPCA3()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3');
		}
		
		public function spca_form()
		{
			$this->form_validation->set_rules('actTitle', 'actTitle', 'required');
			$this->form_validation->set_rules('sdate[]', 'sdate', 'required');
			$this->form_validation->set_rules('stime[]', 'stime', 'required');
			$this->form_validation->set_rules('edate[]', 'edate', 'required');
			$this->form_validation->set_rules('etime[]', 'etime', 'required');
			$this->form_validation->set_rules('venue[]', 'venue', 'required');
			$this->form_validation->set_rules('numPersons', 'numPersons', 'required');
			$this->form_validation->set_rules('outsidersOption', 'outsidersOption', 'required');
			$this->form_validation->set_rules('Faculty', 'Faculty', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
			}
			
			else  
			{
				$data = array
				(
					'actTitle' 			=> 	$this->input->post('actTitle'),
					'numPersons' 		=> 	$this->input->post('numPersons'),
					'outsidersOption' 	=> 	$this->input->post('outsidersOption'),
					'Faculty' 			=> 	$this->input->post('Faculty')
				);
				
				
				
				//'sdate' 	= $this->input->post('sdate[]');
				//'stime' 	= $this->input->post('stime[]');
				//'edate'		= $this->input->post('edate[]');
				//'etime' 	= $this->input->post('etime[]');
				//'venue' 	= $this->input->post('venue[]');
			}
		}
		
		public function spca_form2()
		{
			
		}
		
		public function spca_form3()
		{
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('IDNum', 'IDNum', 'required');
			$this->form_validation->set_rules('officeLoc', 'officeLoc', 'required');
			$this->form_validation->set_rules('CPNo', 'CPNo', 'required');
			$this->form_validation->set_rules('TelNo', 'TelNo', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3');
			}
			
			else  
			{
				$data = array
				(
					'Name' 		=> 	$this->input->post('Name'),
					'IDNum' 	=> 	$this->input->post('IDNum'),
					'officeLoc' => 	$this->input->post('officeLoc'),
					'CPNo' 		=> 	$this->input->post('CPNo'),
					'TelNo' 	=> 	$this->input->post('TelNo'),
					'Email' 	=> 	$this->input->post('Email')
					
				);
				
				//SESSION VARIABLES
				$org = $this->session->userdata('org')[0]['userID'];
				$orgname = $this->session->userdata('org')[0]['acrnoym'];
				$activity = 1; //SESSION VARIABLE!!!
				
				$this->p_forms_model->spca($data, $org, $orgname);
				$data = array ("success" => "true");
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3', $data);
			}
		}
	}
?>