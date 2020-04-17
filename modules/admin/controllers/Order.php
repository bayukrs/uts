<?php
class Order extends CI_Controller {
 
 	public function __construct(){
		parent::__construct();
		$this->login_admin->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}

	public function index(){
		$data['order'] = $this->m_admin->get_order();
		$data['order_detail'] = $this->m_admin->get_order_detail();	
		$data['pelanggan'] = $this->m_admin->get_pelanggan();		
		$this->load->view('order',$data);
	}
}