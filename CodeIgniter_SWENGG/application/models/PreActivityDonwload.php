<?php
	class PreActivityDownload extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->library('form_validation');
			$this->load->library('session');
			$this->load->model('PreActivityView_model');
			$this->load->model('Gosm_model');
		}
		
		public function viewPreactsFormCSO(){
			$this->load->view('CSO_ViewPreActs');
		}
		
		public function viewAform(){
			$preacts = 12;
			$aform = $this->PreActivityView_model->viewAform($preacts);
			var_dump($aform);
			$aformdate = $this->PreActivityView_model->getAformDate($aform[0]['aformID']);
			var_dump($aformdate);
			//$this->load->view('CSO_ViewPreActs_Aform');
		}
		
		public function viewLOP(){
			$preacts = 12;
			$lop = $this->PreActivityView_model->viewLOP($preacts);
			var_dump($lop);
			$lopdetails = $this->PreActivityView_model->viewLOPDetails($lop[0]['listofparticipantsID']);
			var_dump($lopdetails);
		}
		
		public function viewCAD(){
			$preacts = 13;
			$sas = $this->PreActivityView_model->viewSAS($preacts);
			$data = array('sas' => $sas);
			$cad = $this->PreActivityView_model->viewCAD($sas[0]['sasID']);
			$data['cad'] = $cad;
			
			if ($cad[0]['cancellation'] == 1){
				$changes = 'cancel';
				$data['changes'] = $changes;
			}
			else{
				$cadvenue = $this->PreActivityView_model->viewCADVenue($cad[0]['activitydetailschangesID']);
				$caddate = $this->PreActivityView_model->viewCADDate($cad[0]['activitydetailschangesID']);
				$caddes = $this->PreActivityView_model->viewCADDes($cad[0]['activitydetailschangesID']);
				if ($cadvenue!=Null){
					$data['cadvenue'] = $cadvenue;
				}
				if ($caddate!=Null){
					$data['caddate'] = $caddate;
				}
				if ($caddes!=Null){
					$data['caddes'] = $caddes;
				}
			}
			var_dump($data);
		}
	}
?>