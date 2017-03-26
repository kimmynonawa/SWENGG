<?php

	class p_forms_controller extends CI_Controller 
	{
		public function __construct() 
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model("p_forms_model");
		}

		
		public function loadOtherReq()
		{
			$this->load->view('ORG_FillOutOtherReq');
		}
		
		public function other()
		{
			//$org=1;
			$org = $this->session->userdata('org')[0]['userID'];
			
			$data['groups'] = $this->p_forms_model->getActs($org);
			$this->load->view('ORG_FillOutOtherReq',$data);
			$this->form_validation->set_rules('act', 'act', 'required');
			$this->form_validation->set_rules('req', 'req', 'required');

			
			if ($this->form_validation->run() == FALSE)
			{
				echo "";
			}
			else  
			{
				$req 	= $this->input->post('req');
				$act 	= $this->input->post('act');
				
				$this->session->set_userdata("actno", $act);
				
				$actno = $this->session->userdata("actno");
				
				if($req==1) //List of Participants
				{
					redirect('PreActivity/listOfParticipants');
				}
				
				else if($req==2) //Sas
				{
					redirect('PreActivity/sas');
				}
				
				else if($req==3) //SPCA
				{
					redirect('p_forms_controller/spca1');
				}
				
				else if($req==4) //Trademark Use
				{
					redirect('Cathy/new_approval_use_trademark');
				}
				
				else if($req==5) //Contest Mechanics
				{
					redirect('Cathy/new_contest_mechanics');
				}
				
				else if($req==6) //Food Permit
				{
					redirect('Cathy/new_food_permit');
				}
				
				else if($req==7) //Minor Publication Proposal
				{
					redirect('p_forms_controller/minorpub_form');
				}
			}
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

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_MinorPublicationProposal');
			}
			else  {
				
				$pubname 	= $this->input->post('pubname');
				$pubtype 	= $this->input->post('pubtype');
				$pubfreq 	= $this->input->post('pubfreq');
				$pubcost 	= $this->input->post('pubcost');
				$pubdate 	= $this->input->post('tdate');
				
				$obj1 	= $this->input->post('obj1');
				$obj2 	= $this->input->post('obj2');
				$obj3 	= $this->input->post('obj3');
				
				$cont1 	= $this->input->post('cont1');
				$cont2 	= $this->input->post('cont2');
				$cont3 	= $this->input->post('cont3');
				
				$tread1 	= $this->input->post('tread1');
				$tread2 	= $this->input->post('tread2');
				$tread3 	= $this->input->post('tread3');

				$actno = $this->session->userdata("actno");

				if ($this->p_forms_model->minorpub($actno, $pubname, $pubtype, $pubfreq, $pubcost, $pubdate, $obj1, $obj2, $obj3, $cont1, $cont2, $cont3, $tread1, $tread2, $tread3)) redirect('p_forms_controller/minorpub_form2');
				else echo "Error";
			}
		}
		
		public function loadMinorPub2()
		{
			$this->load->view('ORG_PreAct_MinorPublicationProposal2');
		}
		
		public function minorpub_form2()
		{	
			$this->form_validation->set_rules('npages', 'npages', 'required');
			$this->form_validation->set_rules('bm1', 'bm1', 'required');
			$this->form_validation->set_rules('ssize', 'ssize', 'required');
			$this->form_validation->set_rules('bm2', 'bm2', 'required');
			$this->form_validation->set_rules('ptype', 'ptype', 'required');
			$this->form_validation->set_rules('bm3', 'bm3', 'required');
			$this->form_validation->set_rules('ncolor', 'ncolor', 'required');
			$this->form_validation->set_rules('bm4', 'bm4', 'required');
			$this->form_validation->set_rules('ncopies', 'ncopies', 'required');
			$this->form_validation->set_rules('bm5', 'bm5', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_MinorPublicationProposal2');
			}
			else  {
				
				$npages = $this->input->post('npages');
				$bm1 	= $this->input->post('bm1');
				
				$ssize 	= $this->input->post('ssize');
				$bm2 	= $this->input->post('bm2');
				
				$ptype 	= $this->input->post('ptype');
				$bm3	= $this->input->post('bm3');
				
				$ncolor 	= $this->input->post('ncolor');
				$bm4	= $this->input->post('bm4');
				
				$ncopies 	= $this->input->post('ncopies');
				$bm5 	= $this->input->post('bm5');

				$actno = $this->session->userdata("actno");

				$minorpubID=$this->p_forms_model->getMinorPub($actno);
				
				foreach ($minorpubID as $pubID) 
				{
					if ($this->p_forms_model->minorpub2($pubID, $npages, $bm1, $ssize, $bm2, $ptype, $bm3, $ncolor, $bm4, $ncopies, $bm5, $actno)) echo "Minor Pub done";
					else echo "Error";
				}
			}
		}
		
		public function loadSASform()
		{
			$this->load->view('ORG_PreAct_SpecialApprovalSlip');
		}
		
		public function sas_form()
		{
			$this->form_validation->set_rules('titleAct', 'titleAct', 'required');
			$this->form_validation->set_rules('submissionType', 'submissionType', 'required');
			$this->form_validation->set_rules('reason', 'reason', 'required');
			$this->form_validation->set_rules('name', 'name', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialApprovalSlip');
			}
			else  {
				
				$titleAct = $this->input->post('titleAct');
				$submissionType	= $this->input->post('submissionType');
				$reason	= $this->input->post('reason');
				$name	= $this->input->post('name');
				
				$actno = $this->session->userdata("actno");
				
				if ($this->p_forms_model->sas($actno, $titleAct, $submissionType, $reason, $name)) echo "SAS done";
				else echo "Error";
			}
		}
		
		public function loadSPCA1()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
		}
		
		public function spca1()
		{
			$this->form_validation->set_rules('actTitle', 'actTitle', 'required');
			$this->form_validation->set_rules('numPersons', 'numPersons', 'required');
			$this->form_validation->set_rules('outsidersOption', 'outsidersOption', 'required');
			$this->form_validation->set_rules('Faculty', 'Faculty', 'required');
			
			$this->form_validation->set_rules('Name', 'Name', 'required');
			$this->form_validation->set_rules('IDNum', 'IDNum', 'required');
			$this->form_validation->set_rules('officeLoc', 'officeLoc', 'required');
			$this->form_validation->set_rules('CPNo', 'CPNo', 'required');
			$this->form_validation->set_rules('TelNo', 'TelNo', 'required');
			$this->form_validation->set_rules('Email', 'Email', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess');
			}
			else  {
				
				$actTitle = $this->input->post('actTitle');
				$numPersons	= $this->input->post('numPersons');
				$outsidersOption	= $this->input->post('outsidersOption');
				$Faculty	= $this->input->post('Faculty');
				
				$Name = $this->input->post('Name');
				$IDNum	= $this->input->post('IDNum');
				$officeLoc	= $this->input->post('officeLoc');
				$CPNo	= $this->input->post('CPNo');
				$TelNo	= $this->input->post('TelNo');
				$Email	= $this->input->post('Email');
				
				$actno = $this->session->userdata("actno");

				if ($this->p_forms_model->spca1($actno, $actTitle, $numPersons, $Faculty, $Name, $IDNum, $officeLoc, $CPNo, $TelNo, $Email)) redirect('p_forms_controller/spca2');
				else echo "Error";
			}
		}
		
		public function loadSPCA2()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess2');
		}
		
		public function spca2()
		{
			$this->form_validation->set_rules('lName[]', 'lName', 'required');
			$this->form_validation->set_rules('fName[]', 'fName', 'required');
			$this->form_validation->set_rules('mName[]', 'mName', 'required');
			$this->form_validation->set_rules('classification[]', 'classification', 'required');
			$this->form_validation->set_rules('email[]', 'email', 'required');
			$this->form_validation->set_rules('mNum[]', 'mNum', 'required');

			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess2');
			}
			else  {
				$lName 			= $this->input->post('lName');
				$fName 			= $this->input->post('fName');
				$mName 	= $this->input->post('mName');
				$classification 			= $this->input->post('classification');
				$email 			= $this->input->post('email');
				$mNum 			= $this->input->post('mNum');
				
				$actno = $this->session->userdata("actno");

				$SPCAno=$this->p_forms_model->getSPCA($actno);
				$error = FALSE;

				foreach ($SPCAno as $SPCAnum) {
					for ($i = 0; $i < sizeof($lName); $i++) {
						if (!$this->p_forms_model->spca2($SPCAnum, $lName[$i], $fName[$i], $mName[$i], $classification[$i], $email[$i], $mNum[$i])) $error=TRUE;
					}
				}

				if (!$error) {
					foreach ($SPCAno as $SPCAnum) {
						$SPCApersons = $this->p_forms_model->getSPCApersons($SPCAnum);
						echo "SPCA No.: ".$SPCAnum."<br>";

						foreach ($SPCApersons as $details) {
							echo "Last Name: ".$details['lastname']."<br>";
							echo "First Name: ".$details['firstname']."<br>";
							echo "Middle Name: ".$details['middle']."<br>";
							echo "Classification: ".$details['classification']."<br>";
							echo "Mobile: ".$details['mobile']."<br>";
							echo "E-mail: ".$details['email']."<br>";
						}
					}
					
					redirect('p_forms_controller/spca3');
				}
				else echo "no";
			}
		}
		
		public function loadSPCA3()
		{
			$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3');
		}
		
		public function spca3()
		{
			$this->form_validation->set_rules('sdate[]', 'sdate', 'required');
			$this->form_validation->set_rules('stime[]', 'stime', 'required');
			$this->form_validation->set_rules('edate[]', 'edate', 'required');
			$this->form_validation->set_rules('etime[]', 'etime', 'required');
			$this->form_validation->set_rules('venue[]', 'venue', 'required');
			
			if ($this->form_validation->run() == FALSE){
				$this->load->view('ORG_PreAct_SpecialPermitCampusAccess3');
			}
			else  {
				$sdate 			= $this->input->post('sdate');
				$stime 			= $this->input->post('stime');
				$edate 	= $this->input->post('edate');
				$etime 			= $this->input->post('etime');
				$venue 			= $this->input->post('venue');
				
				$actno = $this->session->userdata("actno");

				$SPCAno=$this->p_forms_model->getSPCA($actno);
				$error = FALSE;

				foreach ($SPCAno as $SPCAnum) {
					for ($i = 0; $i < sizeof($sdate); $i++) {
						if (!$this->p_forms_model->spca3($SPCAnum, $sdate[$i], $stime[$i], $edate[$i], $etime[$i], $venue[$i])) $error=TRUE;
					}
				}

				if (!$error) {
					foreach ($SPCAno as $SPCAnum) {
						$SPCAactivity = $this->p_forms_model->getSPCAactivity($SPCAnum);
						echo "SPCA No.: ".$SPCAnum."<br>";

						foreach ($SPCAactivity as $details) {
							echo "Start Date: ".$details['startdate']."<br>";
							echo "Start Time: ".$details['starttime']."<br>";
							echo "End Date: ".$details['enddate']."<br>";
							echo "End Time: ".$details['endtime']."<br>";
							echo "Venue: ".$details['venue']."<br>";
						}
					}
				}
				else echo "no";
			}
		}
	}
?>