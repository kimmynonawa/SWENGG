<?php

	class Pauline extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->model("p_forms_model");
		}

		public function minorpub_form()
		{
			$this->input->post("pubname");
			$this->input->post("pubtype");
			$this->input->post("pubfreq");
			$this->input->post("pubcost");
			$this->input->post("pubdate");
			$this->input->post("obj1");
			$this->input->post("obj2");
			$this->input->post("obj3");
			$this->input->post("cont1");
			$this->input->post("cont2");
			$this->input->post("cont3");
			$this->input->post("targ1");
			$this->input->post("targ2");
			$this->input->post("targ3");
			$this->input->post("pagenum");
			$this->input->post("pagemember");
			$this->input->post("spreadsize");
			$this->input->post("spreadmember");
			$this->input->post("papertype");
			$this->input->post("papermember");
			$this->input->post("colornum");
			$this->input->post("colormember");
			$this->input->post("copynum");
			$this->input->post("copymember");
			$this->input->post("pubcontent");
			
			//FORM VALIDATION
			
			//pub name
			$this->form_validation->set_rules
			(
				'pubname', 'Name of Publication', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//pub type
			$this->form_validation->set_rules
			(
				'pubtype', 'Type of Publication', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//pub frequency
			$this->form_validation->set_rules
			(
				'pubfreq', 'Frequency', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//pub cost
			$this->form_validation->set_rules
			(
				'pubcost', 'Estimated Cost', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//target date
			$this->form_validation->set_rules
			(
				'pubdate', 'Target Date', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//objective 1
			$this->form_validation->set_rules
			(
				'obj1', 'Objective 1', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//objective 2
			$this->form_validation->set_rules
			(
				'obj2', 'Objective 2', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//objective 3
			$this->form_validation->set_rules
			(
				'obj3', 'Objective 3', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//content 1
			$this->form_validation->set_rules
			(
				'cont1', 'Content 1', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//content 2
			$this->form_validation->set_rules
			(
				'cont2', 'Content 2', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//content 3
			$this->form_validation->set_rules
			(
				'cont3', 'Content 3', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//target 1
			$this->form_validation->set_rules
			(
				'targ1', 'Target 1', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//target 2
			$this->form_validation->set_rules
			(
				'targ2', 'Target 2', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//target 3
			$this->form_validation->set_rules
			(
				'targ3', 'Target 3', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//num of pages
			$this->form_validation->set_rules
			(
				'pagenum', 'Number of Pages', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules
			(
				'pagemember', 'Board Member-in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//spread size
			$this->form_validation->set_rules
			(
				'spreadsize', 'Spread Size',
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules
			(
				'spreadmember', 'Board Member-in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//type of paper
			$this->form_validation->set_rules
			(
				'papertype', 'Type of Paper',
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules
			(
				'papermember', 'Board Member-in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//num of colors
			$this->form_validation->set_rules
			(
				'colornum', 'Number of Colors', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules
			(
				'colormember', 'Board Member-in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//num of copies
			$this->form_validation->set_rules
			(
				'copynum', 'Number of Copies', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			$this->form_validation->set_rules
			(
				'copymember', 'Board Member-in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			
			//content
			$this->form_validation->set_rules
			(
				'pubcontent', 'Content', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//END
			
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_MinorPublicationProposal');
			}
			
			else  
			{
				$this->p_forms_model->minorpub($this->input->post("pubname"),$this->input->post("pubtype"),$this->input->post("pubfreq"),$this->input->post("pubcost"),
												$this->input->post("pubdate"),$this->input->post("obj1"),$this->input->post("obj2"),$this->input->post("obj3"),
												$this->input->post("cont1"),$this->input->post("cont2"),$this->input->post("cont3"),$this->input->post("targ1"),
												$this->input->post("targ2"),$this->input->post("targ3"),$this->input->post("pagenum"),$this->input->post("pagemember"),
												$this->input->post("spreadsize"),$this->input->post("spreadmember"),$this->input->post("papertype"),$this->input->post("papermember"),
												$this->input->post("colornum"),$this->input->post("colormember"),$this->input->post("copynum"),$this->input->post("copymember"),$this->input->post("pubcontent"));
				
				$data = array ("success" => "true");
				
				$this->load->view('ORG_PreAct_MinorPublicationProposal', $data);
			}
		}
		
		public function sas_form()
		{
			$this->input->post("activity");
			$this->input->post("submission");
			$this->input->post("reason");
			$this->input->post("submittedby");
			$this->input->post("president");
			
			//FORM VALIDATION
			
			//Activity
			$this->form_validation->set_rules
			(
				'activity', 'Activity', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Type of Submission
			$this->form_validation->set_rules
			(
				'submission', 'Type of Submission', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Reason
			$this->form_validation->set_rules
			(
				'reason', 'Reason', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Submitted By
			$this->form_validation->set_rules
			(
				'submittedby', 'Submitted By', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//President
			$this->form_validation->set_rules
			(
				'president', 'President', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//END
			
			
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_SpecialApprovalSlip');
			}
			
			else  
			{
				$this->p_forms_model->sas($this->input->post("activity"),$this->input->post("submission"),$this->input->post("reason"),
												$this->input->post("submittedby"),$this->input->post("president"));
				
				$data = array ("success" => "true");
				
				$this->load->view('ORG_PreAct_SpecialApprovalSlip', $data);
			}
		}
		
		public function spca_form()
		{
			$this->input->post("act");
			$this->input->post("enmp");
			$this->input->post("enp");
			$this->input->post("faculty");
			$this->input->post("type");
			
			$this->input->post("org");
			$this->input->post("name");
			$this->input->post("IDnum");
			$this->input->post("office");
			$this->input->post("cellphone");
			$this->input->post("telephone");
			$this->input->post("email");
			
			//FORM VALIDATION
			
			//Activity
			$this->form_validation->set_rules
			(
				'act', 'Activity', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//ENMP
			$this->form_validation->set_rules
			(
				'enmp', 'ENMP', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//ENP
			$this->form_validation->set_rules
			(
				'enp', 'ENP', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Faculty in-Charge
			$this->form_validation->set_rules
			(
				'faculty', 'Faculty in-Charge', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Campus Access Type
			$this->form_validation->set_rules
			(
				'type', 'Campus Access Type', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Organization
			$this->form_validation->set_rules
			(
				'org', 'Office/Organization', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Name
			$this->form_validation->set_rules
			(
				'name', 'Name/Position', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//IDnum
			$this->form_validation->set_rules
			(
				'IDnum', 'ID Number', 
				'required|min_length[7]|max_length[7]',
				array
				(
					'required'      => 'You have not provided %s.',
					'min_length[7]'	=> 'The minimum length is 7.',
					'max_length[7]'	=> 'The maximum length is 7.'
				)
			);
			
			//Office Location
			$this->form_validation->set_rules
			(
				'office', 'Office Location', 
				'required',
				array
				(
					'required'      => 'You have not provided %s.',
				)
			);
			
			//Cellphone
			$this->form_validation->set_rules
			(
				'cellphone', 'Cellphone', 
				'required|min_length[11]|max_length[14]',
				array
				(
					'required'      => 'You have not provided %s.',
					'min_length[11]'	=> 'The minimum length is 11.',
					'max_length[14]'	=> 'The maximum length is 14.'
				)
			);
			
			//Telephone
			$this->form_validation->set_rules
			(
				'telephone', 'Telephone', 
				'required|min_length[7]|max_length[9]',
				array
				(
					'required'      => 'You have not provided %s.',
					'min_length[7]'	=> 'The minimum length is 7.',
					'max_length[9]'	=> 'The maximum length is 9.'
				)
			);
			
			//email
			$this->form_validation->set_rules(
				'email', 'Email', 
				'required|valid_email',
				array(
					'required'      => 'You have not provided %s.',
					'valid_email'	=> 'The input is not a valid $s'
				)
			);
			
			//END
			
			
		
			
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
			}
			
			else  
			{
				$this->p_forms_model->spca($this->input->post("act"),$this->input->post("enmp"),$this->input->post("enp"),
												$this->input->post("faculty"),$this->input->post("type"),$this->input->post("org"),
												$this->input->post("name"),$this->input->post("IDnum"),$this->input->post("office"),
												$this->input->post("cellphone"),$this->input->post("telephone"),$this->input->post("email"));
				
				$data = array ("success" => "true");
				
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess', $data);
			}
		}
	}
?>