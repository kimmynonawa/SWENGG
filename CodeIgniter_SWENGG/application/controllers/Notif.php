<?php
	class Notif extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->model('Gosm_model');
		}
		
		public function loadA(){
			$this->load->view('a');
		}
		
		public function add(){
			$datetime = date('Y-m-d H:i:s');
			$this->Gosm_model->add($datetime);
			$this->load->view('a');
		}
		
		public function getnew(){
			header("Content-type: application/json");
			$res = $this->Gosm_model->getnew();
			echo json_encode($res);
		}
		
		public function getall(){
			header("Content-type: application/json");
			$res = $this->Gosm_model->getall();
			echo json_encode($res);
		}
		
		public function setseen(){
			$this->Gosm_model->setseen();
		}
			
	}
?>