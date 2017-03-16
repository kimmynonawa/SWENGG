<?php
	class Notif extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->model('Gosm_model');
		}
		
		//Get New Activities for Notif
		public function getnew(){
			header("Content-type: application/json");
			$res = $this->Gosm_model->getnew();
			echo json_encode($res);
		}
		
		//Get All Activities for Notif
		public function getall(){
			header("Content-type: application/json");
			$res = $this->Gosm_model->getall();
			echo json_encode($res);
		}
		
		//Update New Activities to Seen
		public function setseen(){
			$this->Gosm_model->setseen();
		}
			
	}
?>