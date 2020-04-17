<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$valid = $this->form_validation;
		$username = $this->input->post('username');           
		$password = $this->input->post('password');           
		$valid->set_rules('username','Email','required');
		$valid->set_rules('password','Password','required');

		 if($valid->run()) {
		 	$this->freelancer_login->login($username,$password, base_url('freelancer'), base_url('freelancer/login'));
		 	}
		$this->load->view('login');
	}
	public function logout(){
		$this->freelancer_login->logout();
	}
}
