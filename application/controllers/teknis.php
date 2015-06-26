<?php
	class teknis extends CI_Controller{
		function index(){
			$this->load->view('teknis/teknis');
		}
		
		function back_office() {
			$this->load->view('teknis/back_office');
		}
	}
?>