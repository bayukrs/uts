<?php
class Freelancer extends CI_Controller {
 
 	public function __construct(){
		parent::__construct();
		$this->login_admin->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}

	public function index(){
		$data['freelancer'] = $this->m_admin->get_freelancer();
		$this->load->view('freelancer',$data);
	}

	function hapus($id_kategori){
		$where = array('id_freelancer' => $id_kategori);
		$this->m_admin->hapus_data($where,'freelancer');
		redirect(base_url('admin/freelancer'));
	}
}