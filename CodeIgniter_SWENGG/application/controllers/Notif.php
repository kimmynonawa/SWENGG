<?php
	class Notif extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
			$this->load->model('Notification_model');
		}
		
		// This function gets the newly created GOSM activities
		// @return a json array that contains a list of newly create GOSM activities
		public function getnew(){
			header("Content-type: application/json");
			$res = $this->Notification_model->getnew();
			echo json_encode($res);
		}
		
		// This function gets all GOSM activities
		// @return a json array that contains a list of GOSM activities
		public function getall(){
			header("Content-type: application/json");
			$res = $this->Notification_model->getall();
			echo json_encode($res);
		}
		
		// This function sets newly created GOSM activities to seen
		public function setseen(){
			$this->Notification_model->setseen();
		}
			
	}
?>