<?php 
defined('BASEPATH') or exit ('no direct script access allowed');

	/**
	 * 
	 */
	class Home extends CI_Controller{
		
		public function index(){
			$this->load->view('v_home');
		}
	}


 ?>