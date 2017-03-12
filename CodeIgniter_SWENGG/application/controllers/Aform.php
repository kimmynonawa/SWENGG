<?php
	session_start();
	class Aform extends CI_Controller {
	
		public function __construct() {
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->model('Aform_model');
			$this->load->library('session');
		}
		
		
		
		public function loadAddAform(){
			$this->load->view('ORG_PreAct_AForm');
			
		}
		
		public function loadAddAform2(){
			$this->load->view('ORG_PreAct_AForm2');
			
		}
		
		public function addAform()
		{
			
			$this->input->post("CSOactOptions");
			$this->input->post("USGactOptions");
			$this->input->post("CSOactType");
			$this->input->post("USGactType");
			$this->input->post("reachType");
			
			$_SESSION['reach'] = $this->input->post("reachType");
			
				$this->form_validation->set_rules(
				'reachtype', 'Reach type', 
				'required',
				array(
					'required'      => 'You have not provided %s.'
				)
			);
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_AForms');
			}
			else  {
				$data = array ("success" => "true");
				$this->load->view('ORG_PreAct_AForm2', $data);
			}
			
			
		}
		
		public function addAform2(){
			
			
			if($this->input->post("select") == "1")
			{
				
				$date1 = $this->input->post("Date");
				$stime1 =$this->input->post("sTime");
				$etimep1 = $this->input->post("eTIme");
				$reach = $_SESSION['reach'];
				$this->input->post("enp2");
				$this->input->post("enmp2");
			
			
			$this->form_validation->set_rules(
				'enmp2', 'enmp2 ', 
				'required',
				array(
					'required'      => 'You have not provided %s.'
				)
			);
				$this->form_validation->set_rules(
				'en2', 'enp2 ', 
				'required',
				array(
					'required'      => 'You have not provided %s.'
				
				)
			);
				
			
				
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_AForm2');
			}
			else  {
				$data = array ("success" => "true");
				$this->Aform_model->addAform2($this->input->post("Date"),$this->input->post("sTime"),$this->input->post("eTime"),$this->input->post("v"),$this->input->post("enp2"),$this->input->post("enmp2"),$reach);
				$this->load->view('ORG_PreAct_AForm2', $data);
			}
				
			}
			
			/*
			}else if ($this->input->post("select") == "2")
			{
				$sdate = $this->input->post("sDate");
				$edate = $this->input->post("eDate");
				$stime2 =$this->input->post("sTime2");
				$etimep2 = $this->input->post("eTIme2");
				$this->input->post("enp2");
				$this->input->post("enmp2");
				for( $x =0; $x >count($sdate)
				$this->Aform_model->A($this->input->post(""),$this->input->post("orgacro"),$this->input->post("orgun"),$encrypted,$this->input->post("orgemail"));
			}*/
				
			}
			
		}
		
		
		
?>