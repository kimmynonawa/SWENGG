<?php
	class homepage extends CI_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->helper("url");
		}
		
		
		public function login() {
			$this->load->view('login');
			/**if ($this->input->post("username") && $this->input->post("password")){//return f alse if not set
				//model for user login
				//$type = 
					//if ($type == 1){//if login as cso redirect to cso homepage
						//redirect("cso/homepage");
					//}
					if ($this->input->post("username") == 1){
						redirect("cso/homepage");
					}
					if ($type == 2){//if login as org redirect to org homepage
						redirect("org/homepage");
					}
					else{//wrong login
						//$this->load->view(//link to login page);
					}
			}
			
			else{
				$this->load->view('login');
			}**/
		}
		
		public function cso(){
			$this->load->view('CSO_Home');
		}
		
	}
?>