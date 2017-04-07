<?php
	class Download extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->model("Download_model");
		}
		
		public function Aform(){
			$res = $this->Download_model->getAform(1);
			$data = array("res" => $res);
			$this->load->view('Aform', $data);
		}
		
		public function SASpdf()
		{
			$actno='1'; //CHANGE THIS TO A SESSION VARIABLE
			
			$data['groups'] = $this->Download_model->getSASdetails($actno);
			$this->load->view('SAS',$data);
		}
		
		public function SPCApdf()
		{
			$actno='1'; //CHANGE THIS TO A SESSION VARIABLE
			
			$data['groups'] = $this->Download_model->getSPCAdetails($actno);
			$data['groups2'] = $this->Download_model->getSPCAactivitydetails($actno);
			$data['groups3'] = $this->Download_model->getSPCApersonsdetails($actno);
			$this->load->view('SPCA',$data);
		}
	}
?>