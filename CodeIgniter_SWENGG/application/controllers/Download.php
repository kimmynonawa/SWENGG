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
	}
?>